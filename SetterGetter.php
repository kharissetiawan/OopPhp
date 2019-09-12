<?php

class user
{
    public $username;

    public function setUsername($setUsername)
    {
        $this->username = $setUsername;
    }

    public function getUsername()
    {
        return $this->username;
    }
}

$user = new User;
$user->setUsername("Rozi");
echo $user->getUsername();