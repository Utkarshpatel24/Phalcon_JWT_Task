<?php

use Phalcon\Mvc\Model;

class Users extends Model
{
    public $id;
    public $name;
    public $role;
    public $email;
    public $password;
    public $token;
    
}