<?php

class Model
{
    // Array to store our key/value data
    private $attributes = array();

    // Magic setter to populate $attributes array
    public function __set($name, $value)
    {
        // Set the $name key to hold $value in $data
        $this -> attributes[$name] = $value;
    }

    // Magic getter to retrieve values from $data
    public function __get($name)
    {
        // Check for existence of array key $name
        if(array_key_exists($name, $this-> attributes))
            return $this->attributes[$name];
    }
}

