<?php

class Models
{
    protected $name = "Kharis Setiawan";
}

class User extends Models
{
    public function getUser()
    {
        return $this->name;
    }
}

$user = new User;
echo $user->getUser();