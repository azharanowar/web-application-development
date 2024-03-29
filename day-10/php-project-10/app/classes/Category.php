<?php

namespace App\classes;

class Category
{
    public $categories = [];

    public function __construct() {
        $this->categories = [
          0 => [
              'id'      =>  1,
              'name'    =>  "Electronics",
              'image'   =>  'category-1.jpg',
          ],
          1 => [
              'id'      =>  2,
              'name'    =>  "Man Fashion",
              'image'   =>  'category-2.jpg',
          ],
          2 => [
              'id'      =>  3,
              'name'    =>  "Women Fashion",
              'image'   =>  'category-3.jpg',
          ],
          3 => [
              'id'      =>  4,
              'name'    =>  "Computer Accessories",
              'image'   =>  'category-4.jpg',
          ],
          4 => [
              'id'      =>  5,
              'name'    =>  "Sports",
              'image'   =>  'category-5.jpg',
          ],
        ];
    }

    public function getAllCategories() {
        return $this->categories;
    }

    public function getCategoryById($categoryId) {
        foreach ($this->categories as $category) {
            if ($category['id'] == $categoryId) {
                return $category;
            }
        }
    }
}