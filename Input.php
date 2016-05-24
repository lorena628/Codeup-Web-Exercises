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
    public static function getString($key, $min=2, $max=500) 
    {   
        $value = self::get($key);

        //If $key is not a string, or $min & $max are not numbers, throw an InvalidArgumentException.
        if(!is_string($key) || !is_numeric($min) || !is_numeric($max)) {
            throw new InvalidArgumentException("Must be a string or must be numeric");
        }

        //If the requested key is missing from the input,
        if (self::get($key)==null){
            throw new OutOfRangeException("All inputs must be filled");
        }

        //If a string is shorter than $min or longer than $max
        if(strlen($value) <  $min || strlen($value) > $max) {
            throw new LengthException ("Text input did not meet length extentions");
        }

        //If the value is the wrong type
        if (!is_string($value) || is_numeric($value)) {
            throw new DomainException ("$key must be a string ");
        }
        return $value;
    }
    


    public static function getNumber($key, $min=1, $max=500)
    {
        $value = self::get($key);

        //if input is not a number
        if(!is_numeric($value)) {
            throw new InvalidArgumentException("Must be a number");
        }

        //If the value is the wrong type
        if(!is_numeric($min) || !is_numeric($max)) {
            throw new DomainException ("$key must be a number");
        }

        //If the requested key is missing from the input,
        if(self::get($key)==null){
            throw new OutOfRangeException ("All inputs must be filled");
        }

        //If a numeric input  is shorter than $min or longer than $max
        if(is_numeric($value) < is_numeric ($min) || is_numeric($value) > is_numeric($max)) {
            throw new LengthException ("Numeric input did not meet length extentions");
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

