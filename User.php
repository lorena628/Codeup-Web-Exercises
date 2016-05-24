<?php

// __DIR__ is a *magic constant* with the directory path containing this file.
// This allows us to correctly require_once Model.php, no matter where this file is being required from.
require_once __DIR__ . '/Model.php';

class User extends Model
{
    /** Insert a new entry into the database */
    protected function insert()
    { 
        // @TODO: Use prepared statements to ensure data security
        // @TODO: You will need to iterate through all the attributes to build the prepared query
        // @TODO: After the insert, add the id back to the attributes array
        //        so the object properly represents a DB record
        // self::dbConnect();
        $query = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
        $stmt =  self::$dbc->prepare($query);
        //binding
        $stmt->bindValue(':name', $this->attributes['name'], PDO::PARAM_STR);
        $stmt->bindValue(':email',  $this->attributes['email'],  PDO::PARAM_STR);
        $stmt->bindValue(':password', $this->attributes['password'],  PDO::PARAM_STR);
            $result = $stmt->execute();

        if($result) {
            $this->attributes['id'] = self::$dbc->lastInsertId();
        }
    }

    /** Update existing entry in the database */
    protected function update()
    {
        // @TODO: Use prepared statements to ensure data security
        // @TODO: You will need to iterate through all the attributes to build the prepared query
        // self::dbConnect();
        $query = "UPDATE users (name, email, password, id) VALUES (:name, :email, :password, :id)";
        $stmt =  self::$dbc->prepare($query);
        //binding
        $stmt->bindValue(':name', $this->attributes['name'], PDO::PARAM_STR);
        $stmt->bindValue(':email',  $this->attributes['email'],  PDO::PARAM_STR);
        $stmt->bindValue(':password',  $this->attributes['password'],  PDO::PARAM_STR);
        $stmt->bindValue(':id',  $this->attributes['id'],  PDO::PARAM_INT);
            //executing
        $result = $stmt->execute();
    }

    /**
     * Find a single record in the DB based on its id
     *
     * @param int $id id of the user entry in the database
     *
     * @return User An instance of the User class with attributes array set to values from the database
     */
    public static function find($id)
    {
        // Get connection to the database
        // @TODO: Create select statement using prepared statements
        // @TODO: Store the result in a variable named $result
        self::dbConnect();
        $stmt = self::$dbc->prepare('SELECT * FROM users WHERE id = :id');  
        $stmt->bindValue(':id',  $id,  PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ($result) {
            $instance = new static($result);
            // $instance->attributes = $result;
            // echo "inside of find if";
        }
        return $instance;
    }

    /**
     * Find all records in a table
     *
     * @return User[] Array of instances of the User class with attributes set to values from database
     */
    public static function all()
    {
        // @TODO: Learning from the find method, return all the matching records
        self::dbConnect();
        $stmt = self::$dbc->prepare("SELECT * FROM users");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    // public function delete()
    // {
    //     self::dbConnect();
    //     $stmt = self::$dbc->prepare('DELETE FROM users WHERE id = id');
    //     $stmt->bindValue(':id', $this->attributes['id'], PDO::PARAM_INT)
    //     $stmt->execute();
    // }
}
