<?php

namespace App\classes;

use App\classes\Category;

class Home
{
    public $category, $categories;
    public function index() {
        header("Location: action.php?page=home&categories=category");

//        $this->category = new Category();
//        $this->categories = $this->category->getAllCategories();
//        echo '<pre>';
//        print_r($this->categories);
//        exit();
    }
}