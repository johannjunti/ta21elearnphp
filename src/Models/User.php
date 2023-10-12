<?php

namespace App\Models;

class User extends Model{
    static $table = 'posts';
    public $id;
    public $email;
    public $password;
}