<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Http\Requests\StorecategoryRequest;
use App\Http\Requests\UpdatecategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function getCategoryData()
    {
        return [
            [
                'id' => 1,
                'name' => 'Sneakers',
                'img' => 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_34_a_1-570x760.jpg',
                'items' => 19
            ],
            [
                'id' => 2,
                'name' => 'Shirts',
                'img' => 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_13_b_1-570x760.jpg',
                'items' => 8
            ],
            [
                'id' => 3,
                'name' => 'Pants',
                'img' => 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_31_a_1-1-570x760.jpg',
                'items' => 10
            ],
            [
                'id' => 4,
                'name' => 'Jackets',
                'img' => 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_15_a_1-570x760.jpg',
                'items' => 14
            ],
            [
                'id' => 5,
                'name' => 'T-shirts',
                'img' => 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_21_a_1-570x760.jpg',
                'items' => 18
            ],
            [
                'id' => 6,
                'name' => 'Sunglasses',
                'img' => 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_29_b_1-570x760.jpg',
                'items' => 13
            ],
            [
                'id' => 7,
                'name' => 'Face Mask',
                'img' => 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_print_20-570x760.png',
                'items' => 20
            ],
            [
                'id' => 8,
                'name' => 'Watch',
                'img' => 'https://minimog-4437.kxcdn.com/wp-content/uploads/2022/01/product_watch_06-570x760.jpg',
                'items' => 3
            ],
            [
                'id' => 9,
                'name' => 'Jewelry',
                'img' => 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_jewelry_13_2-570x760.jpg',
                'items' => 7
            ],
            [
                'id' => 10,
                'name' => 'Tops',
                'img' => 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_39_a_1-570x760.jpg',
                'items' => 7
            ],
            [
                'id' => 11,
                'name' => 'Shoes',
                'img' => 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_04_1-570x760.jpg',
                'items' => 12
            ],
            [
                'id' => 12,
                'name' => 'begs',
                'img' => 'https://minimog-4437.kxcdn.com/wp-content/uploads/2021/12/product_fashion_30_b_1-570x760.jpg',
                'items' => 4
            ]
        ];
    }
    public function index()
    {
        return view('Home.Components.Category', ['categoryData' => $this->getCategoryData()]);
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
    public function store(StorecategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecategoryRequest $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        //
    }
}
