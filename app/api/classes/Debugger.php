<?php
class Debugger
{
    public function enableDebugMode()
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 'on');
    }  
}
?>