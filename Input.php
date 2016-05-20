<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        return isset($_REQUEST[$key]);
        // TODO: Fill in this function
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        //use self becasue your calling its class of Input with ITS method of "has"....so self to replace $this
        return self::has($key) ? $_REQUEST[$key] : $default;
        // TODO: Fill in this function
    }



    // cam said maybe to do a check because when i fill out form and put numbers instead for Name where it should be a string it is // being submitted either way. so we need to add a check to see if the characters are actual letters but my string function is
    // correct overall 
    public static function getString($key) 
    {   
        $value = self::get($key);

        if (self::get($value)==null){
            throw new Exception ("All inputs must be filled");
        }
        if (!is_string($value) || is_numeric($key)) {
            throw new Exception ("$key must be a string ");
        } else {
            return $value;
        }
    }
    
    public static function getNumber($key)
    {
        $value = self::get($key);
        if (self::get($value)==null){
            throw new Exception ("All inputs must be filled");
        }
        if(!is_int($value)) {
            throw new Exception (" $key must be a number");
        }
        return $value;
    }


    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}

