<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('productName');
            $table->unsignedBigInteger('size_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id');
            $table->unsignedBigInteger('images_id');
            $table->text('shortDetails');
            $table->text('description');
            $table->integer('quantity');
            $table->decimal('sprice', 8, 2); // Example precision and scale, adjust as needed
            $table->decimal('pprice', 8, 2); // Example precision and scale, adjust as needed
            $table->decimal('discount', 8, 2)->nullable(); // Nullable discount column
            $table->timestamps();
            // Foreign key constraints
            $table->foreign('size_id')->references('id')->on('sizes');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('subcategory_id')->references('id')->on('subcategories');
            $table->foreign('images_id')->references('id')->on('images');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
