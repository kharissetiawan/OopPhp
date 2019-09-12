<?php

//  OOP adalah object oriented programing/ pemograman berbasis object

//  Class => Schema / Template untuk membuat object
 class User 
 {
    //   Property => variable di dalam Class
     public $username;

    // Method => Function di dalam Class
    public function getUsername($username)
     {
        return $this->username = $username;
     }
 }

//   Object => Sebuah komponen yang terdiri dari Property dan Object
 $object = new User;
 echo $object->getUsername("Fuji Santoso Abdul Mukti");