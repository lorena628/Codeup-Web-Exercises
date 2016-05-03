<?php
require_once 'Log.php'

class Auth
{
    public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';


    public static function attempt($username, $password)
    {
        $log = new Log;
        if($username == 'guest' && password_verify($password, self::$password) 
        {
            $_SESSION['logged_in_user']=$username;
            $log->info('User $username is logged in.');

        } else{
            $log->error('User $username failed to log in.');
        }

    }

    public static function check()
    {
        return isset($_SESSION['logged_in_user']) ? true : false; 
    }

    public static function user()
    {
        return $_SESSION['logged_in_user'];
    }

    public static function logout()
    {
        session_unset();
        
        session_destroy();
        
        session_regenerate_id();
    }

//review functions
    


}