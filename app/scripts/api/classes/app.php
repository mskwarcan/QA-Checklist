<?php
class Init {
    //our holders for configs
    public $config;
    public $basecamp;

    //let's start this party
    public function __construct()
    {
        //get our database and core configs and startup & hold onto the objects
        require_once('config/config.php');
        require_once('vendor/basecamp/basecamp.php');

        //grab hold of our configs
        $config = new Config;
        $basecamp = basecamp_api_client($config->appName, $$config->appContact,
            $$config->basecampAccountId, $$config->basecampUsername, $$config->basecampPassword);
    }
}
?>