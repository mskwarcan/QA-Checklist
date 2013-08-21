<?php
class App {
    //our holders for configs and classes
    public $Config;
    public $Debugger;
    public $Cache;
    public $Session;
    public $Layout;
    public $Tasks;
    //app variables
    public $httpMode;

    //let's start this party
    public function __construct()
    {
        //get our database and core configs and startup & hold onto the objects
        require_once('api/config/Config.php');
        require_once('api/config/Cache.php');
        require_once('api/config/Tasks.php');
        require_once('api/classes/Debugger.php');
        require_once('api/classes/SessionHander.php');
        require_once('api/classes/Layout.php');
        require_once('api/vendor/basecamp/basecamp.php');

        //grab hold of our configs
        $this->Config = new Config;
        $this->Cache = new Cache;
        $this->Debugger = new Debugger;
        $this->Session = new SessionHander;
        $this->Layout = new Layout;
        $this->Tasks = new Tasks;

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

    public function createLists($projectData)
    {
        //first give them access to the project, if they're not already on it
        $this->grantAccess($projectData);
        //create the to dos
        $this->createToDoLists($projectData);
    }

    private function grantAccess($projectData)
    {
        $userIdArr = array();
        foreach($projectData['people_accountexecutives'] as $person) {
            $userIdArr[] = $person['id'];
        }
        foreach($projectData['people_projectmanagers'] as $person) {
            $userIdArr[] = $person['id'];
        }
        foreach($projectData['people_seniordeveloper'] as $person) {
            $userIdArr[] = $person['id'];
        }
        foreach($projectData['people_developers'] as $person) {
            $userIdArr[] = $person['id'];
        }
        $dataToSend = array(
            'ids' => $userIdArr
        );
        $this->run('POST', '/projects/' . $projectData['projectData']['id'] . '/accesses.json', $dataToSend);
        return true;
    }

    private function createToDoLists($projectData)
    {
        $proejctId = $projectData['projectData']['id'];

        foreach($projectData['people_accountexecutives'] as $person) {
            //get the tasks
            $tasksArr = $this->Tasks->get('accountexecutives');
            //create to do list for user
            $listData = $this->createToDoList($person, 'Account Executive', $proejctId);
            $listId = $this->getIdFromJson($listData);
            //finally create the todo items
            $this->createToDoItems($tasksArr, $listId, $person, $proejctId);
        }

        foreach($projectData['people_projectmanagers'] as $person) {
            //get the tasks
            $tasksArr = $this->Tasks->get('accountexecutives');
            //create to do list for user
            $listData = $this->createToDoList($person, 'Project Manager', $proejctId);
            $listId = $this->getIdFromJson($listData);
            //finally create the todo items
            $this->createToDoItems($tasksArr, $listId, $person, $proejctId);
        }

        foreach($projectData['people_seniordeveloper'] as $person) {
            //get the tasks
            $tasksArr = $this->Tasks->get('accountexecutives');
            //create to do list for user
            $listData = $this->createToDoList($person, 'Senior Developer', $proejctId);
            $listId = $this->getIdFromJson($listData);
            //finally create the todo items
            $this->createToDoItems($tasksArr, $listId, $person, $proejctId);
        }

        foreach($projectData['people_developers'] as $person) {
            //get the tasks
            $tasksArr = $this->Tasks->get('accountexecutives');
            //create to do list for user
            $listData = $this->createToDoList($person, 'Developer', $proejctId);
            $listId = $this->getIdFromJson($listData);
            //finally create the todo items
            $this->createToDoItems($tasksArr, $listId, $person, $proejctId);
        }
    }

    private function createToDoList($person, $type, $proejctId)
    {
        $projectListData = array(
            "name" => "QA List for " . $type . " - " . $person['name']
        );
        $toDoListData = $this->run('POST', '/projects/' . $proejctId . '/todolists.json', $projectListData);
        return $toDoListData;
    }

    private function getIdFromJson($jsonData) {
        $dataArr = json_decode($jsonData, true);
        $id = $dataArr['id'];
        return $id;
    }

    private function createToDoItems($tasksArr, $listId, $person, $proejctId) {
        //now that the list has been created, need to make the todos
        foreach($tasksArr as $todoItem) {
            $attrData = array(
                'content' => $todoItem,
                'assignee' => array(
                                'id'    => $person['id'],
                                'type'  => 'Person'
                )
            );
            $toDoItemData = $this->run('POST', '/projects/' . $proejctId . '/todolists/' . $listId . '/todos.json', $projectListData);
        }
        return true;
    }
}
?>