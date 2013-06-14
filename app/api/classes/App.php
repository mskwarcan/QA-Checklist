<?php
class App {
    //our holders for configs and classes
    public $Config;
    public $Debugger;
    public $Cache;
    public $Session;
    public $Layout;
    //app variables
    public $httpMode;

    //let's start this party
    public function __construct()
    {
        //get our database and core configs and startup & hold onto the objects
        require_once('api/config/Config.php');
        require_once('api/config/Cache.php');
        require_once('api/classes/Debugger.php');
        require_once('api/vendor/basecamp/basecamp.php');
        require_once('api/classes/SessionHander.php');
        require_once('api/classes/Layout.php');

        //grab hold of our configs
        $this->Config = new Config;
        $this->Cache = new Cache;
        $this->Debugger = new Debugger;
        $this->Session = new SessionHander;
        $this->Layout = new Layout;

        //enable debug mode if necessary
        if($this->Config->debug === true) {
            $this->Debugger->enableDebugMode();
        }
    }

    public function run($httpMode, $method, $data = false)
    {
        //get the request mode
        $this->httpMode = $httpMode;

        //setup the basecamp api
        $basecamp = basecamp_api_client($this->Config->appName, $this->Config->appContact,
            $this->Config->basecampAccountId, $this->Config->basecampUsername, $this->Config->basecampPassword);
        //try what we need to do
        try {
            /**
             * process request
             */
            $data = $basecamp($this->httpMode, '/' . $method, $data);
            return $data;
            /**
             * Create a new project:
             * $project = array(
             *     'name' => 'My new project!',
             * );
             * 
             * $newProject = $basecamp('POST', '/projects.json', $project);
             * echo "New project ID is {$newProject->id}\n";
             */

        //catch any errors
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getPeople($group) {
        return $this->Cache->get($group);
    }

    public function redirect($url)
    {
        header('Location: ' . $url);
        die();
    }

    public function getProjectData()
    {
        $accountExecs = json_decode($this->Session->get('people_accountexecutives'), true);
        $projectManagers = json_decode($this->Session->get('people_projectmanagers'), true);
        $seniorDeveloper = json_decode($this->Session->get('people_seniordeveloper'), true);
        $developers = json_decode($this->Session->get('people_developers'), true);
        $proejctSize = json_decode($this->Session->get('projectsize'), true);
        $projectId = $this->Session->get('projectId');

        //get the user data back from the IDs
        $returnArray = array(
            'people_accountexecutives' => $this->Cache->getPerson($accountExecs),
            'people_projectmanagers' => $this->Cache->getPerson($projectManagers),
            'people_seniordeveloper' => $this->Cache->getPerson($seniorDeveloper),
            'people_developers' => $this->Cache->getPeople($developers),
            'projectSize' => $this->Cache->getProjectSize($proejctSize),
            'projectData' => json_decode($this->run('GET', '/projects/' . $projectId . '.json'), true)
        );

        return $returnArray;
    }

    public function grantAccess($data)
    {
        $userIdArr = array();
        foreach($data['people_accountexecutives'] as $person) {
            $userIdArr[] = $person['id'];
        }
        foreach($data['people_projectmanagers'] as $person) {
            $userIdArr[] = $person['id'];
        }
        foreach($data['people_seniordeveloper'] as $person) {
            $userIdArr[] = $person['id'];
        }
        foreach($data['people_developers'] as $person) {
            $userIdArr[] = $person['id'];
        }
        $dataToSend = array(
            'ids' => $userIdArr
        );
        $this->run('POST', '/projects/' . $data['projectData']['id'] . '/accesses.json', $dataToSend);
        return true;
    }
}
?>