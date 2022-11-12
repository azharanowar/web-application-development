<?php

require_once "vendor/autoload.php";

use App\classes\Category;
use App\classes\Product;

$category = new Category();
$categories = $category->getAllCategories();

if (isset($_GET['page'])) {
    if ($_GET['page'] === 'home') {
        $product = new Product();
        $products = $product->getAllProducts();
        include "pages/home.php";
    } else if ($_GET['page'] === 'category') {

    } else if ($_GET['page'] === 'product-details') {
        $productId = $_GET['id'];

        $product = new Product();
        $productDetailsInfo = $product->getProductDetailsInfoById($productId);

        $productCategory = $category->getCategoryById($productDetailsInfo['category_id']);
        $productDetailsInfo['category_name'] = $productCategory['name'];

        include "pages/product-details.php";
    }
}