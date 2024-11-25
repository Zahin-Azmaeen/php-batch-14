<?php


namespace App\classes;

class Product
{
    public $products = [];

    public function __construct()
    {
        $this->products = [
            0 => [
                'id'        => 1,
                'name'      => 'T shirt',
                'price'     => '1500',
                'desription'    => 'Good T Shirt',
                'image'     => 'assets/img/5.webp',
            ],
            1 => [
                'id'        => 2,
                'name'      => 'Jens PAnk',
                'price'     => '5500',
                'desription'    => 'Good Jens PAnk',
                'image'     => 'assets/img/6.webp',
            ],
            2 => [
                'id'        => 3,
                'name'      => 'Sahree',
                'price'     => '7500',
                'desription'    => 'Good Sahree',
                'image'     => 'assets/img/7.webp',
            ],
        ];
    }

    public function getAllProduct()
    {
        return $this->products;
    }
}