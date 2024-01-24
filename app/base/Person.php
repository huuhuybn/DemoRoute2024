<?php

namespace Huuhu\Demo\base;
abstract class Person
{
    public $id;
    public $name;
    public $address;
    public $phone;

    abstract function profile();
    abstract function login($username,$password);
    abstract function logout();

}