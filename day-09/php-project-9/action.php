<?php

require_once "vendor/autoload.php";

use App\classes\Category;
use App\classes\Post;

$category = new Category();
$categories = $category->getAllCategories();

$post = new Post();
$posts = $post->getAllPosts();


if (isset($_GET['page'])) {
    if ($_GET['page'] === 'home') {
        include "pages/home.php";
    } else if ($_GET['page'] === 'category') {
        $posts = $post->getPostsByCategoryId($_GET['id']);
        include "pages/category.php";
    } else if ($_GET['page'] === 'detailed_news') {
        $postDetailedInformation = $post->getPostDetailedInformationById($_GET['id']);
        include "pages/detailed_post.php";
    }
}