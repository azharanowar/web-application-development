<?php

require_once "vendor/autoload.php";
use App\classes\Category;
use App\classes\Blog;

$category = new Category();
$categories = $category->getAllCategories();

$blog = new Blog();
$blogs = $blog->getAllBlogs();

if (isset($_GET['page'])) {
    if ($_GET['page'] === 'home') {
        include 'pages/home.php';
    } else if ($_GET['page'] === 'category') {

        $categoryId = $_GET['category_id'];
        $blogs = $blog->getBlogsByCategoryId($categoryId);
        include 'pages/category.php';
    }
}