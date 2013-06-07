<?php
class App {
    //our holders for configs
    public $Config;
    public $Debugger;
    //app variables
    public $httpMode;

    //let's start this party
    public function __construct()
    {
        //get our database and core configs and startup & hold onto the objects
        require_once('config/Config.php');
        require_once('classes/Debugger.php');
        require_once('vendor/basecamp/basecamp.php');

        //grab hold of our configs
        $this->Config = new Config;
        $this->Debugger = new Debugger;

        //enable debug mode if necessary
        if($this->Config->debug === true) {
            $this->Debugger->enableDebugMode();
        }

        //start the app
        $this->start();
    }

    public function start()
    {
        //get the request mode
        $this->httpMode = $_SERVER['REQUEST_METHOD'];
        echo $this->httpMode;

        //setup the basecamp api
        $basecamp = basecamp_api_client($this->Config->appName, $this->Config->appContact,
            $this->Config->basecampAccountId, $this->Config->basecampUsername, $this->Config->basecampPassword);

        //try what we need to do
        try {
            /**
             * Get a list of all projects:
             */
            $projects = $basecamp($this->httpMode, '/' . $_SERVER['REDIRECT_QUERY_STRING']);
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
}
?>