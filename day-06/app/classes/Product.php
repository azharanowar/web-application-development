<?php

namespace App\classes;

class Product
{
    public function allProducts() {
        return [
            0   => [
                'id'    => 1,
                'name'  => "Paradoxical Sajid",
                'price'  => 200,
                'image'  => '../../assets/images/paradoxical-sajid.jpg',
            ],
            1   => [
                'id'    => 2,
                'name'  => "Paradoxical Sajid 2",
                'price'  => 240,
                'image'  => '../../assets/images/paradoxical-sajid-2.jpg',
            ],
            2   => [
                'id'    => 3,
                'name'  => "Bela Purabar Age",
                'price'  => 250,
                'image'  => '../../assets/images/bela-purabar-age.jpg',
            ],
        ];

    }
}