<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categoryController = app(CategoryController::class);
        $productController = app(ProductController::class);

        $data = [
            'categoryData' => $categoryController->getCategoryData(),
            'productData' => $productController->getProductsData(),
        ];

        return view('Home.home', $data);
    }
}
