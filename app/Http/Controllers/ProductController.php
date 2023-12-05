<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function getProductsData()
    {
        return [
            [
                'id' => 1,
                'productName' => 'Wool-blend Jacket',
                'sprice' => '123',
                'pprice' => '103',
                'quantity' => '12',
                'details' => 'The Iconic Silhouette	',
                'description' => 'A modern take on the classic striped tee, in a relaxed, slightly cropped fit. Made with eco-friendly hemp and super-soft 100% organic cotton.',
                'category' => 'Men',
                'subcategory' => 'jackets',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_15_a_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_15_a_6-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_15_a_4-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_15_b_1-570x760.jpg'],
                'size' => ['M', 'L', "XL", "2xl"]
            ],
            [
                'id' => 2,
                'productName' => 'Oversized Jacket',
                'sprice' => '313',
                'pprice' => '243',
                'quantity' => '16',
                'details' => 'The Iconic Silhouette	',
                'description' => 'A modern take on the classic striped tee, in a relaxed, slightly cropped fit. Made with eco-friendly hemp and super-soft 100% organic cotton.',
                'category' => 'Men',
                'subcategory' => 'jackets',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_01_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_01_4-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_01_3-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_01_5-570x760.jpg'],
                'size' => ['M', 'L', "XL", "2xl"]
            ],
            [
                'id' => 3,
                'productName' => 'Drawstring T-shirt Dress',
                'sprice' => '313',
                'pprice' => '243',
                'quantity' => '16',
                'details' => 'The Iconic Silhouette	',
                'description' => 'He garments labelled as Committed are products that have been produced using sustainable fibers or processes, reducing their environmental impact.',
                'category' => 'Women',
                'subcategory' => 'Tops',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_17_b_1-570x760.jpeg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_17_a_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_17_a_2-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_17_b_2-570x760.jpeg'],
                'size' => ['M', 'L', "XL", "2xl"]
            ],
            [
                'id' => 4,
                'productName' => 'Tinted Sunglasses',
                'sprice' => '313',
                'pprice' => '243',
                'quantity' => '16',
                'details' => 'The Iconic Silhouette	',
                'description' => ' He garments labelled as Committed are products that have been produced using sustainable fibers or processes, reducing their environmental impact. Mango’s goal is to support the implementation of practices more committed to the environment, and therefore increase the number of sustainable garments in the collection. ',
                'category' => 'Mens',
                'subcategory' => 'Sunglasses',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_26_a_2-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_26_a_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_25_a_3-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_25_a_2-570x760.jpg'],
                'size' => ['M', 'L']
            ],
            [
                'id' => 5,
                'productName' => 'Square Shoulder Bag',
                'sprice' => '113',
                'pprice' => '83',
                'quantity' => '36',
                'details' => 'The Iconic Silhouette	',
                'description' => ' He garments labelled as Committed are products that have been produced using sustainable fibers or processes, reducing their environmental impact. Mango’s goal is to support the implementation of practices more committed to the environment, and therefore increase the number of sustainable garments in the collection. ',
                'category' => 'Women',
                'subcategory' => 'Begs',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_16_a_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_16_a_4-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_16_a_2-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_16_b_1-570x760.jpg'],
                'size' => ['M', 'L']
            ],
            [
                'id' => 6,
                'productName' => 'Stripe Cotton Shirt',
                'sprice' => '213',
                'pprice' => '183',
                'quantity' => '42',
                'details' => 'The Iconic Silhouette	',
                'description' => ' He garments labelled as Committed are products that have been produced using sustainable fibers or processes, reducing their environmental impact. Mango’s goal is to support the implementation of practices more committed to the environment, and therefore increase the number of sustainable garments in the collection. ',
                'category' => 'Mens',
                'subcategory' => 'Shirts',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_13_c_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_13_c_5-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_13_c_3-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_13_a_1-570x760.jpg'],
                'size' => ['M', 'L', "XL", "2XL"]
            ],
            [
                'id' => 7,
                'productName' => 'High Ankle Jeans',
                'sprice' => '243',
                'pprice' => '173',
                'quantity' => '32',
                'details' => 'The Iconic Silhouette	',
                'description' => ' He garments labelled as Committed are products that have been produced using sustainable fibers or processes, reducing their environmental impact. Mango’s goal is to support the implementation of practices more committed to the environment, and therefore increase the number of sustainable garments in the collection. ',
                'category' => 'Mens',
                'subcategory' => 'Pants',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_35_b_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_35_b_4-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_35_a_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_35_a_2-570x760.jpg'],
                'size' => ['M', 'L', "XL", "2XL"]
            ],
            [
                'id' => 8,
                'productName' => 'Trainers Sneakers',
                'sprice' => '243',
                'pprice' => '173',
                'quantity' => '32',
                'details' => 'The Iconic Silhouette	',
                'description' => ' He garments labelled as Committed are products that have been produced using sustainable fibers or processes, reducing their environmental impact. Mango’s goal is to support the implementation of practices more committed to the environment, and therefore increase the number of sustainable garments in the collection. ',
                'category' => 'Mens',
                'subcategory' => 'Sneakers',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_34_a_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_34_a_2-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_34_a_4-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_34_b_2-570x760.jpg'],
                'size' => ['35', '36', "38", "40"]
            ],
            [
                'id' => 9,
                'productName' => 'Diamond Chain Earrings',
                'sprice' => '2143',
                'pprice' => '1713',
                'quantity' => '4',
                'details' => 'Yellow Gold plated sterling silver',
                'description' => '  Match with your favorite chains and pendants for a timeless stack. Perfect for everyday wear or to add some extra drip to your little black dress, either way you’re sure to get some much deserved attention. ',
                'category' => 'Women',
                'subcategory' => 'Jewelry',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_jewelry_14_2-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_jewelry_14_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_jewelry_14_3-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_jewelry_05_3-570x760.jpg'],
            ],
            [
                'id' => 10,
                'productName' => 'Trainers Sneakers',
                'sprice' => '343',
                'pprice' => '273',
                'quantity' => '64',
                'details' => 'Espadrilles Sandals',
                'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident. ',
                'category' => 'Women',
                'subcategory' => 'Shoes',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_37_b_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_37_b_2-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_37_c_3-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_37_c_1-570x760.jpg'],
                'size' => ['35', '36', "38", "40"]
            ],
            [
                'id' => 11,
                'productName' => 'Floral Reuseable Face Mask',
                'sprice' => '23',
                'pprice' => '13',
                'quantity' => '64',
                'details' => 'Espadrilles Sandals',
                'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident. ',
                'category' => 'Mens',
                'subcategory' => 'Face Mask',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_print_04_a-570x760.png', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_print_19-570x760.png', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_print_19_a-570x760.png', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_print_04-570x760.png'],
            ],
            [
                'id' => 12,
                'productName' => 'Pressed Ashfield Watch',
                'sprice' => '323',
                'pprice' => '133',
                'quantity' => '14',
                'details' => 'The Iconic Silhouette	',
                'description' => ' He garments labelled as Committed are products that have been produced using sustainable fibers or processes, reducing their environmental impact. Mango’s goal is to support the implementation of practices more committed to the environment, and therefore increase the number of sustainable garments in the collection. ',
                'category' => 'Mens',
                'subcategory' => 'Watch',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2022/01/product_watch_02-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2022/01/product_watch_06-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2022/01/product_watch_01-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2022/01/product_watch_01-570x760.jpg'],
            ],
            [
                'id' => 13,
                'productName' => 'Wool-blend Jacket',
                'sprice' => '123',
                'pprice' => '103',
                'quantity' => '12',
                'details' => 'The Iconic Silhouette	',
                'description' => 'A modern take on the classic striped tee, in a relaxed, slightly cropped fit. Made with eco-friendly hemp and super-soft 100% organic cotton.',
                'category' => 'Men',
                'subcategory' => 'jackets',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_15_a_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_15_a_6-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_15_a_4-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_15_b_1-570x760.jpg'],
                'size' => ['M', 'L', "XL", "2xl"]
            ],
            [
                'id' => 14,
                'productName' => 'Oversized Jacket',
                'sprice' => '313',
                'pprice' => '243',
                'quantity' => '16',
                'details' => 'The Iconic Silhouette	',
                'description' => 'A modern take on the classic striped tee, in a relaxed, slightly cropped fit. Made with eco-friendly hemp and super-soft 100% organic cotton.',
                'category' => 'Men',
                'subcategory' => 'jackets',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_01_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_01_4-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_01_3-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_01_5-570x760.jpg'],
                'size' => ['M', 'L', "XL", "2xl"]
            ],
            [
                'id' => 15,
                'productName' => 'Drawstring T-shirt Dress',
                'sprice' => '313',
                'pprice' => '243',
                'quantity' => '16',
                'details' => 'The Iconic Silhouette	',
                'description' => 'He garments labelled as Committed are products that have been produced using sustainable fibers or processes, reducing their environmental impact.',
                'category' => 'Women',
                'subcategory' => 'Tops',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_17_b_1-570x760.jpeg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_17_a_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_17_a_2-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_17_b_2-570x760.jpeg'],
                'size' => ['M', 'L', "XL", "2xl"]
            ],
            [
                'id' => 16,
                'productName' => 'Tinted Sunglasses',
                'sprice' => '313',
                'pprice' => '243',
                'quantity' => '16',
                'details' => 'The Iconic Silhouette	',
                'description' => ' He garments labelled as Committed are products that have been produced using sustainable fibers or processes, reducing their environmental impact. Mango’s goal is to support the implementation of practices more committed to the environment, and therefore increase the number of sustainable garments in the collection. ',
                'category' => 'Mens',
                'subcategory' => 'Sunglasses',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_26_a_2-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_26_a_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_25_a_3-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_25_a_2-570x760.jpg'],
                'size' => ['M', 'L']
            ],
            [
                'id' => 17,
                'productName' => 'Square Shoulder Bag',
                'sprice' => '113',
                'pprice' => '83',
                'quantity' => '36',
                'details' => 'The Iconic Silhouette	',
                'description' => ' He garments labelled as Committed are products that have been produced using sustainable fibers or processes, reducing their environmental impact. Mango’s goal is to support the implementation of practices more committed to the environment, and therefore increase the number of sustainable garments in the collection. ',
                'category' => 'Women',
                'subcategory' => 'Begs',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_16_a_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_16_a_4-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_16_a_2-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_16_b_1-570x760.jpg'],
                'size' => ['M', 'L']
            ],
            [
                'id' => 18,
                'productName' => 'Stripe Cotton Shirt',
                'sprice' => '213',
                'pprice' => '183',
                'quantity' => '42',
                'details' => 'The Iconic Silhouette	',
                'description' => ' He garments labelled as Committed are products that have been produced using sustainable fibers or processes, reducing their environmental impact. Mango’s goal is to support the implementation of practices more committed to the environment, and therefore increase the number of sustainable garments in the collection. ',
                'category' => 'Mens',
                'subcategory' => 'Shirts',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_13_c_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_13_c_5-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_13_c_3-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_13_a_1-570x760.jpg'],
                'size' => ['M', 'L', "XL", "2XL"]
            ],
            [
                'id' => 19,
                'productName' => 'High Ankle Jeans',
                'sprice' => '243',
                'pprice' => '173',
                'quantity' => '32',
                'details' => 'The Iconic Silhouette	',
                'description' => ' He garments labelled as Committed are products that have been produced using sustainable fibers or processes, reducing their environmental impact. Mango’s goal is to support the implementation of practices more committed to the environment, and therefore increase the number of sustainable garments in the collection. ',
                'category' => 'Mens',
                'subcategory' => 'Pants',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_35_b_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_35_b_4-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_35_a_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_35_a_2-570x760.jpg'],
                'size' => ['M', 'L', "XL", "2XL"]
            ],
            [
                'id' => 20,
                'productName' => 'Trainers Sneakers',
                'sprice' => '243',
                'pprice' => '173',
                'quantity' => '32',
                'details' => 'The Iconic Silhouette	',
                'description' => ' He garments labelled as Committed are products that have been produced using sustainable fibers or processes, reducing their environmental impact. Mango’s goal is to support the implementation of practices more committed to the environment, and therefore increase the number of sustainable garments in the collection. ',
                'category' => 'Mens',
                'subcategory' => 'Sneakers',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_34_a_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_34_a_2-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_34_a_4-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_34_b_2-570x760.jpg'],
                'size' => ['35', '36', "38", "40"]
            ],
            [
                'id' => 21,
                'productName' => 'Diamond Chain Earrings',
                'sprice' => '2143',
                'pprice' => '1713',
                'quantity' => '4',
                'details' => 'Yellow Gold plated sterling silver',
                'description' => '  Match with your favorite chains and pendants for a timeless stack. Perfect for everyday wear or to add some extra drip to your little black dress, either way you’re sure to get some much deserved attention. ',
                'category' => 'Women',
                'subcategory' => 'Jewelry',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_jewelry_14_2-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_jewelry_14_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_jewelry_14_3-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_jewelry_05_3-570x760.jpg'],
            ],
            [
                'id' => 22,
                'productName' => 'Trainers Sneakers',
                'sprice' => '343',
                'pprice' => '273',
                'quantity' => '64',
                'details' => 'Espadrilles Sandals',
                'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident. ',
                'category' => 'Women',
                'subcategory' => 'Shoes',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_37_b_1-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_37_b_2-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_37_c_3-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_37_c_1-570x760.jpg'],
                'size' => ['35', '36', "38", "40"]
            ],
            [
                'id' => 23,
                'productName' => 'Floral Reuseable Face Mask',
                'sprice' => '23',
                'pprice' => '13',
                'quantity' => '64',
                'details' => 'Espadrilles Sandals',
                'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident. ',
                'category' => 'Mens',
                'subcategory' => 'Face Mask',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_print_04_a-570x760.png', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_print_19-570x760.png', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_print_19_a-570x760.png', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_print_04-570x760.png'],
            ],
            [
                'id' => 24,
                'productName' => 'Pressed Ashfield Watch',
                'sprice' => '323',
                'pprice' => '133',
                'quantity' => '14',
                'details' => 'The Iconic Silhouette	',
                'description' => ' He garments labelled as Committed are products that have been produced using sustainable fibers or processes, reducing their environmental impact. Mango’s goal is to support the implementation of practices more committed to the environment, and therefore increase the number of sustainable garments in the collection. ',
                'category' => 'Mens',
                'subcategory' => 'Watch',
                'image' => ['https://minimog-4437.kxcdn.com/wp-content/uploads/2022/01/product_watch_02-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2022/01/product_watch_06-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2022/01/product_watch_01-570x760.jpg', 'https://minimog-4437.kxcdn.com/wp-content/uploads/2022/01/product_watch_01-570x760.jpg'],
            ],
        ];
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
