<?php
class SessionHander {
    
    public function __construct()
    {
        session_start();
    }

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
        return true;
    }

    public function get($key)
    {
        return $_SESSION[$key];
    }

    public function clearData()
    {
        session_unset();
    }
}
?>