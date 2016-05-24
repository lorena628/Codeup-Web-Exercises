<?php
class model
{
    // Array to store our key/value data
    private $attributes = array();
    protected static $table;

    // Magic setter to populate $attributes array
    public function __set($name, $value)
    {
        // Set the $name key to hold $value in $attributes
        $this -> attributes[$name] = $value;
    }

    // Magic getter to retrieve values from $attributes
    public function __get($name)
    {
        // Check for existence of array key $name
        if(array_key_exists($name, $this-> attributes))
            return $this->attributes[$name];
    }



    public static function getTableName()
    {
        // static users will come up but self keyword will refer to the model class or base class  static is child and self is the base or parent  class 
        return static::$table;
    }

}

