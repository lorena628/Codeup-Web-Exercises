<?php
require_once 'model_late_static_binding.php';

class user extends model
{
    protected static $table = 'users';
}
echo user::getTableName() . PHP_EOL;