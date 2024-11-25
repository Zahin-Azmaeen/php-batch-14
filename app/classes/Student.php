<?php

namespace App\classes;
class Student
{
    public $students = [];

    public function __construct()
    {
        $this->students = [
            0 => [
                'id'        => 1,
                'name'      => 'Zian',
                'email'     => 'zian@gmail.com',
                'mobile'    => '01715123456',
                'address'   => 'Dhaka',
                'image'     => 'assets/img/1.webp',
            ],
            1 => [
                'id'        => 2,
                'name'      => 'Rifat',
                'email'     => 'rifat@gmail.com',
                'mobile'    => '01515445566',
                'address'   => 'Savar',
                'image'     => 'assets/img/2.jpeg',
            ],
            2 => [
                'id'        => 3,
                'name'      => 'Sakib',
                'email'     => 'sakib@gmail.com',
                'mobile'    => '0191545789',
                'address'   => 'Gazipur',
                'image'     => 'assets/img/3.webp',
            ],
            3 => [
                'id'        => 4,
                'name'      => 'Korim',
                'email'     => 'korim@gmail.com',
                'mobile'    => '018585789',
                'address'   => 'Manikigonj',
                'image'     => 'assets/img/4.jpeg',
            ],
        ];
    }

    public function getAllStudent()
    {
        return $this->students;
    }
}