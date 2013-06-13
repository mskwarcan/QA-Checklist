<?php
class App {
    //our holders for configs
    public $Config;
    public $Debugger;
    public $Cache;
    public $Session;
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

        //grab hold of our configs
        $this->Config = new Config;
        $this->Cache = new Cache;
        $this->Debugger = new Debugger;
        $this->Session = new SessionHander;

        //enable debug mode if necessary
        if($this->Config->debug === true) {
            $this->Debugger->enableDebugMode();
        }
    }

    public function run($httpMode, $method)
    {
        //get the request mode
        $this->httpMode = $httpMode;

        //setup the basecamp api
        $basecamp = basecamp_api_client($this->Config->appName, $this->Config->appContact,
            $this->Config->basecampAccountId, $this->Config->basecampUsername, $this->Config->basecampPassword);
        //try what we need to do
        try {
            /**
             * Get a list of all projects:
             */
            $projects = $basecamp($this->httpMode, '/' . $method);
            echo $projects;

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
}
?>