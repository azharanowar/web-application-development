<?php

namespace App\classes;

class Category
{
    public $categories;

    public function __construct() {
        $this->categories = [
            0   =>  [
                'id'    =>  1,
                'name'  =>  "Breaking News",
            ],
            1   =>  [
                'id'    =>  2,
                'name'  =>  "Regular News",
            ],
            2   =>  [
                'id'    =>  3,
                'name'  =>  "International News",
            ],
            3   =>  [
                'id'    =>  4,
                'name'  =>  "Entertainment",
            ],
            4   =>  [
                'id'    =>  5,
                'name'  =>  "Economics",
            ],
            5   =>  [
                'id'    =>  6,
                'name'  =>  "Sports",
            ],
            6   =>  [
                'id'    =>  7,
                'name'  =>  "Culture",
            ],
            7   =>  [
                'id'    =>  8,
                'name'  =>  "Arts",
            ],
        ];
    }

    public function getAllCategories() {
        return $this->categories;
    }
}