<?php

use Phalcon\Mvc\Model;

class Users extends Model
{
    public $id;
    public $role;
    public $email;
    public $password;
    public $token;
    
}