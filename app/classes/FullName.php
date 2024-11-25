<?php

namespace App\classes;
class FullName
{
    public $firstName, $lastName, $fullName;

    public function __construct($post)
    {
        $this->firstName = $post['first_name'];
        $this->lastName  = $post['last_name'];
    }

    public function getFullName()
    {
        $this->fullName = $this->firstName .' '.$this->lastName;
        header("Location: route.php?page=contact&&result=$this->fullName");
    }
}