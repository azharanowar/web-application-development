<?php

namespace App\classes;

class Product
{
    public $products = [], $productsByCategory = [];

    public function __construct() {
        $this->products = [
            0   =>  [
                'id'                    =>  1,
                'category_id'           =>  3,
                'title'                 =>  "Titan Karishma Silver Dial Analog Watch for Women",
                'short_description'     =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur deserunt id provident sequi! Atque, mollitia.",
                'description'           =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur culpa eaque expedita in, ipsam minus numquam odit optio perferendis sapiente soluta. At, dignissimos earum fugiat modi rerum similique vitae? Earum eius necessitatibus placeat quae qui veniam. A eligendi fugit incidunt quos repudiandae. Aliquid dolor repellat temporibus. Aliquid doloremque placeat reprehenderit? Accusantium commodi debitis illo inventore ipsa ipsam, laborum mollitia nam omnis placeat, quia quidem sed sit. A alias amet aperiam autem consectetur cumque deserunt, dicta dignissimos dolores eaque facere impedit ipsam itaque magnam molestiae odit officia perferendis quam quis quisquam rerum saepe sit ut vel velit? Aliquid blanditiis consectetur cupiditate dolores ducimus esse et eum neque quibusdam voluptatibus? Aliquid blanditiis doloribus fugit ipsa laborum magnam molestias officia reprehenderit. Animi deserunt explicabo incidunt ipsa iusto rem voluptatum! Aliquam architecto asperiores at enim esse necessitatibus officiis praesentium, repellendus? Commodi est in maxime possimus, quam quasi saepe tempore. At beatae distinctio, eos eum fugiat inventore, minus modi nemo nisi omnis perspiciatis qui, quis reprehenderit velit voluptates? Cupiditate deleniti, dicta dolor excepturi fugit impedit ipsa iste iure iusto laudantium libero minus nam nostrum numquam obcaecati officiis perferendis perspiciatis quas repellendus reprehenderit rerum saepe sed tempora unde veritatis, voluptates voluptatibus? Animi necessitatibus numquam praesentium!",
                'price'                 =>  1200,
                'image'                 =>  "product-image-1.jpg",
            ],
            1   =>  [
                'id'                    =>  2,
                'category_id'           =>  3,
                'title'                 =>  "Exclusive Ladies watch",
                'short_description'     =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur deserunt id provident sequi! Atque, mollitia.",
                'description'           =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur culpa eaque expedita in, ipsam minus numquam odit optio perferendis sapiente soluta. At, dignissimos earum fugiat modi rerum similique vitae? Earum eius necessitatibus placeat quae qui veniam. A eligendi fugit incidunt quos repudiandae. Aliquid dolor repellat temporibus. Aliquid doloremque placeat reprehenderit? Accusantium commodi debitis illo inventore ipsa ipsam, laborum mollitia nam omnis placeat, quia quidem sed sit. A alias amet aperiam autem consectetur cumque deserunt, dicta dignissimos dolores eaque facere impedit ipsam itaque magnam molestiae odit officia perferendis quam quis quisquam rerum saepe sit ut vel velit? Aliquid blanditiis consectetur cupiditate dolores ducimus esse et eum neque quibusdam voluptatibus? Aliquid blanditiis doloribus fugit ipsa laborum magnam molestias officia reprehenderit. Animi deserunt explicabo incidunt ipsa iusto rem voluptatum! Aliquam architecto asperiores at enim esse necessitatibus officiis praesentium, repellendus? Commodi est in maxime possimus, quam quasi saepe tempore. At beatae distinctio, eos eum fugiat inventore, minus modi nemo nisi omnis perspiciatis qui, quis reprehenderit velit voluptates? Cupiditate deleniti, dicta dolor excepturi fugit impedit ipsa iste iure iusto laudantium libero minus nam nostrum numquam obcaecati officiis perferendis perspiciatis quas repellendus reprehenderit rerum saepe sed tempora unde veritatis, voluptates voluptatibus? Animi necessitatibus numquam praesentium!",
                'price'                 =>  950,
                'image'                 =>  "product-image-2.jpg",
            ],
            2   =>  [
                'id'                    =>  3,
                'category_id'           =>  3,
                'title'                 =>  "Canvas Tote Bag Plain Off-White Color, Shoulder bag for Man & Women",
                'short_description'     =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur deserunt id provident sequi! Atque, mollitia.",
                'description'           =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur culpa eaque expedita in, ipsam minus numquam odit optio perferendis sapiente soluta. At, dignissimos earum fugiat modi rerum similique vitae? Earum eius necessitatibus placeat quae qui veniam. A eligendi fugit incidunt quos repudiandae. Aliquid dolor repellat temporibus. Aliquid doloremque placeat reprehenderit? Accusantium commodi debitis illo inventore ipsa ipsam, laborum mollitia nam omnis placeat, quia quidem sed sit. A alias amet aperiam autem consectetur cumque deserunt, dicta dignissimos dolores eaque facere impedit ipsam itaque magnam molestiae odit officia perferendis quam quis quisquam rerum saepe sit ut vel velit? Aliquid blanditiis consectetur cupiditate dolores ducimus esse et eum neque quibusdam voluptatibus? Aliquid blanditiis doloribus fugit ipsa laborum magnam molestias officia reprehenderit. Animi deserunt explicabo incidunt ipsa iusto rem voluptatum! Aliquam architecto asperiores at enim esse necessitatibus officiis praesentium, repellendus? Commodi est in maxime possimus, quam quasi saepe tempore. At beatae distinctio, eos eum fugiat inventore, minus modi nemo nisi omnis perspiciatis qui, quis reprehenderit velit voluptates? Cupiditate deleniti, dicta dolor excepturi fugit impedit ipsa iste iure iusto laudantium libero minus nam nostrum numquam obcaecati officiis perferendis perspiciatis quas repellendus reprehenderit rerum saepe sed tempora unde veritatis, voluptates voluptatibus? Animi necessitatibus numquam praesentium!",
                'price'                 =>  350,
                'image'                 =>  "product-image-3.jpg",
            ],
            3   =>  [
                'id'                    =>  4,
                'category_id'           =>  1,
                'title'                 =>  "Symphony i80 Smartphone - 8GB/128GB",
                'short_description'     =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur deserunt id provident sequi! Atque, mollitia.",
                'description'           =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur culpa eaque expedita in, ipsam minus numquam odit optio perferendis sapiente soluta. At, dignissimos earum fugiat modi rerum similique vitae? Earum eius necessitatibus placeat quae qui veniam. A eligendi fugit incidunt quos repudiandae. Aliquid dolor repellat temporibus. Aliquid doloremque placeat reprehenderit? Accusantium commodi debitis illo inventore ipsa ipsam, laborum mollitia nam omnis placeat, quia quidem sed sit. A alias amet aperiam autem consectetur cumque deserunt, dicta dignissimos dolores eaque facere impedit ipsam itaque magnam molestiae odit officia perferendis quam quis quisquam rerum saepe sit ut vel velit? Aliquid blanditiis consectetur cupiditate dolores ducimus esse et eum neque quibusdam voluptatibus? Aliquid blanditiis doloribus fugit ipsa laborum magnam molestias officia reprehenderit. Animi deserunt explicabo incidunt ipsa iusto rem voluptatum! Aliquam architecto asperiores at enim esse necessitatibus officiis praesentium, repellendus? Commodi est in maxime possimus, quam quasi saepe tempore. At beatae distinctio, eos eum fugiat inventore, minus modi nemo nisi omnis perspiciatis qui, quis reprehenderit velit voluptates? Cupiditate deleniti, dicta dolor excepturi fugit impedit ipsa iste iure iusto laudantium libero minus nam nostrum numquam obcaecati officiis perferendis perspiciatis quas repellendus reprehenderit rerum saepe sed tempora unde veritatis, voluptates voluptatibus? Animi necessitatibus numquam praesentium!",
                'price'                 =>  14500,
                'image'                 =>  "product-image-4.jpg",
            ],
            4   =>  [
                'id'                    =>  5,
                'category_id'           =>  1,
                'title'                 =>  "Realme 9 Pro (8GB/128GB)",
                'short_description'     =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur deserunt id provident sequi! Atque, mollitia.",
                'description'           =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur culpa eaque expedita in, ipsam minus numquam odit optio perferendis sapiente soluta. At, dignissimos earum fugiat modi rerum similique vitae? Earum eius necessitatibus placeat quae qui veniam. A eligendi fugit incidunt quos repudiandae. Aliquid dolor repellat temporibus. Aliquid doloremque placeat reprehenderit? Accusantium commodi debitis illo inventore ipsa ipsam, laborum mollitia nam omnis placeat, quia quidem sed sit. A alias amet aperiam autem consectetur cumque deserunt, dicta dignissimos dolores eaque facere impedit ipsam itaque magnam molestiae odit officia perferendis quam quis quisquam rerum saepe sit ut vel velit? Aliquid blanditiis consectetur cupiditate dolores ducimus esse et eum neque quibusdam voluptatibus? Aliquid blanditiis doloribus fugit ipsa laborum magnam molestias officia reprehenderit. Animi deserunt explicabo incidunt ipsa iusto rem voluptatum! Aliquam architecto asperiores at enim esse necessitatibus officiis praesentium, repellendus? Commodi est in maxime possimus, quam quasi saepe tempore. At beatae distinctio, eos eum fugiat inventore, minus modi nemo nisi omnis perspiciatis qui, quis reprehenderit velit voluptates? Cupiditate deleniti, dicta dolor excepturi fugit impedit ipsa iste iure iusto laudantium libero minus nam nostrum numquam obcaecati officiis perferendis perspiciatis quas repellendus reprehenderit rerum saepe sed tempora unde veritatis, voluptates voluptatibus? Animi necessitatibus numquam praesentium!",
                'price'                 =>  30750,
                'image'                 =>  "product-image-5.jpg",
            ],
            5   =>  [
                'id'                    =>  6,
                'category_id'           =>  2,
                'title'                 =>  "Stylish Premium Winter Hoodie For Men",
                'short_description'     =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur deserunt id provident sequi! Atque, mollitia.",
                'description'           =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur culpa eaque expedita in, ipsam minus numquam odit optio perferendis sapiente soluta. At, dignissimos earum fugiat modi rerum similique vitae? Earum eius necessitatibus placeat quae qui veniam. A eligendi fugit incidunt quos repudiandae. Aliquid dolor repellat temporibus. Aliquid doloremque placeat reprehenderit? Accusantium commodi debitis illo inventore ipsa ipsam, laborum mollitia nam omnis placeat, quia quidem sed sit. A alias amet aperiam autem consectetur cumque deserunt, dicta dignissimos dolores eaque facere impedit ipsam itaque magnam molestiae odit officia perferendis quam quis quisquam rerum saepe sit ut vel velit? Aliquid blanditiis consectetur cupiditate dolores ducimus esse et eum neque quibusdam voluptatibus? Aliquid blanditiis doloribus fugit ipsa laborum magnam molestias officia reprehenderit. Animi deserunt explicabo incidunt ipsa iusto rem voluptatum! Aliquam architecto asperiores at enim esse necessitatibus officiis praesentium, repellendus? Commodi est in maxime possimus, quam quasi saepe tempore. At beatae distinctio, eos eum fugiat inventore, minus modi nemo nisi omnis perspiciatis qui, quis reprehenderit velit voluptates? Cupiditate deleniti, dicta dolor excepturi fugit impedit ipsa iste iure iusto laudantium libero minus nam nostrum numquam obcaecati officiis perferendis perspiciatis quas repellendus reprehenderit rerum saepe sed tempora unde veritatis, voluptates voluptatibus? Animi necessitatibus numquam praesentium!",
                'price'                 =>  1250,
                'image'                 =>  "product-image-6.jpg",
            ],
            6   =>  [
                'id'                    =>  7,
                'category_id'           =>  2,
                'title'                 =>  "Long Sleeve Band Coller Polo Shirt",
                'short_description'     =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur deserunt id provident sequi! Atque, mollitia.",
                'description'           =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur culpa eaque expedita in, ipsam minus numquam odit optio perferendis sapiente soluta. At, dignissimos earum fugiat modi rerum similique vitae? Earum eius necessitatibus placeat quae qui veniam. A eligendi fugit incidunt quos repudiandae. Aliquid dolor repellat temporibus. Aliquid doloremque placeat reprehenderit? Accusantium commodi debitis illo inventore ipsa ipsam, laborum mollitia nam omnis placeat, quia quidem sed sit. A alias amet aperiam autem consectetur cumque deserunt, dicta dignissimos dolores eaque facere impedit ipsam itaque magnam molestiae odit officia perferendis quam quis quisquam rerum saepe sit ut vel velit? Aliquid blanditiis consectetur cupiditate dolores ducimus esse et eum neque quibusdam voluptatibus? Aliquid blanditiis doloribus fugit ipsa laborum magnam molestias officia reprehenderit. Animi deserunt explicabo incidunt ipsa iusto rem voluptatum! Aliquam architecto asperiores at enim esse necessitatibus officiis praesentium, repellendus? Commodi est in maxime possimus, quam quasi saepe tempore. At beatae distinctio, eos eum fugiat inventore, minus modi nemo nisi omnis perspiciatis qui, quis reprehenderit velit voluptates? Cupiditate deleniti, dicta dolor excepturi fugit impedit ipsa iste iure iusto laudantium libero minus nam nostrum numquam obcaecati officiis perferendis perspiciatis quas repellendus reprehenderit rerum saepe sed tempora unde veritatis, voluptates voluptatibus? Animi necessitatibus numquam praesentium!",
                'price'                 =>  950,
                'image'                 =>  "product-image-7.jpg",
            ],
            7   =>  [
                'id'                    =>  8,
                'category_id'           =>  4,
                'title'                 =>  "Realme Book Core i5 11th Gen (8+512)",
                'short_description'     =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur deserunt id provident sequi! Atque, mollitia.",
                'description'           =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur culpa eaque expedita in, ipsam minus numquam odit optio perferendis sapiente soluta. At, dignissimos earum fugiat modi rerum similique vitae? Earum eius necessitatibus placeat quae qui veniam. A eligendi fugit incidunt quos repudiandae. Aliquid dolor repellat temporibus. Aliquid doloremque placeat reprehenderit? Accusantium commodi debitis illo inventore ipsa ipsam, laborum mollitia nam omnis placeat, quia quidem sed sit. A alias amet aperiam autem consectetur cumque deserunt, dicta dignissimos dolores eaque facere impedit ipsam itaque magnam molestiae odit officia perferendis quam quis quisquam rerum saepe sit ut vel velit? Aliquid blanditiis consectetur cupiditate dolores ducimus esse et eum neque quibusdam voluptatibus? Aliquid blanditiis doloribus fugit ipsa laborum magnam molestias officia reprehenderit. Animi deserunt explicabo incidunt ipsa iusto rem voluptatum! Aliquam architecto asperiores at enim esse necessitatibus officiis praesentium, repellendus? Commodi est in maxime possimus, quam quasi saepe tempore. At beatae distinctio, eos eum fugiat inventore, minus modi nemo nisi omnis perspiciatis qui, quis reprehenderit velit voluptates? Cupiditate deleniti, dicta dolor excepturi fugit impedit ipsa iste iure iusto laudantium libero minus nam nostrum numquam obcaecati officiis perferendis perspiciatis quas repellendus reprehenderit rerum saepe sed tempora unde veritatis, voluptates voluptatibus? Animi necessitatibus numquam praesentium!",
                'price'                 =>  69500,
                'image'                 =>  "product-image-8.jpg",
            ],
            8   =>  [
                'id'                    =>  9,
                'category_id'           =>  4,
                'title'                 =>  "Apple MacBook Air M1 Chip 13 inch 8GB RAM 256GB SSD Silver",
                'short_description'     =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur deserunt id provident sequi! Atque, mollitia.",
                'description'           =>  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur culpa eaque expedita in, ipsam minus numquam odit optio perferendis sapiente soluta. At, dignissimos earum fugiat modi rerum similique vitae? Earum eius necessitatibus placeat quae qui veniam. A eligendi fugit incidunt quos repudiandae. Aliquid dolor repellat temporibus. Aliquid doloremque placeat reprehenderit? Accusantium commodi debitis illo inventore ipsa ipsam, laborum mollitia nam omnis placeat, quia quidem sed sit. A alias amet aperiam autem consectetur cumque deserunt, dicta dignissimos dolores eaque facere impedit ipsam itaque magnam molestiae odit officia perferendis quam quis quisquam rerum saepe sit ut vel velit? Aliquid blanditiis consectetur cupiditate dolores ducimus esse et eum neque quibusdam voluptatibus? Aliquid blanditiis doloribus fugit ipsa laborum magnam molestias officia reprehenderit. Animi deserunt explicabo incidunt ipsa iusto rem voluptatum! Aliquam architecto asperiores at enim esse necessitatibus officiis praesentium, repellendus? Commodi est in maxime possimus, quam quasi saepe tempore. At beatae distinctio, eos eum fugiat inventore, minus modi nemo nisi omnis perspiciatis qui, quis reprehenderit velit voluptates? Cupiditate deleniti, dicta dolor excepturi fugit impedit ipsa iste iure iusto laudantium libero minus nam nostrum numquam obcaecati officiis perferendis perspiciatis quas repellendus reprehenderit rerum saepe sed tempora unde veritatis, voluptates voluptatibus? Animi necessitatibus numquam praesentium!",
                'price'                 =>  113000,
                'image'                 =>  "product-image-9.jpg",
            ],
        ];
    }

    public function getAllProducts() {
        return $this->products;
    }

    public function getAllProductsByCategory($categoryId) {
        foreach ($this->products as $product) {
            if ($product['category_id'] == $categoryId) {
                array_push($this->productsByCategory, $product);
            }
        }

        return $this->productsByCategory;
    }

    public function getProductDetailsInfoById($productId) {
        foreach ($this->products as $product) {
            if ($product['id'] == $productId) {
                return $product;
            }
        }
    }
}