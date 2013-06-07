<?php
class App {
    //our holders for configs
    public $Config;
    public $Debugger;

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
        if($this->Config->debug === true) {
            $this->Debugger->enableDebugMode();
        }
    }

    public function getProjects()
    {
        $basecamp = basecamp_api_client($this->Config->appName, $this->Config->appContact,
            $this->Config->basecampAccountId, $this->Config->basecampUsername, $this->Config->basecampPassword);
        try {
            /**
             * Get a list of all projects:
             */
            $projects = $basecamp('GET', '/projects.json');
            echo "Current list of projects:\n";
            foreach ($projects as $project) {
                echo "\t".$project->name."\n";
            }

            /**
             * Create a new project:
             * $project = array(
             *     'name' => 'My new project!',
             * );
             * 
             * $newProject = $basecamp('POST', '/projects.json', $project);
             * echo "New project ID is {$newProject->id}\n";
             */
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
?>