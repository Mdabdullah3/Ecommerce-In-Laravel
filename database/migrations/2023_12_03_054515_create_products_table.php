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
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('subcategory_id')->unsigned();
            $table->bigInteger('size_id')->unsigned();
            $table->bigInteger('images_id')->unsigned();
            $table->text('shortDetails');
            $table->text('description');
            $table->integer('quantity');
            $table->decimal('sprice', 8, 2); // Example precision and scale, adjust as needed
            $table->decimal('pprice', 8, 2); // Example precision and scale, adjust as needed
            $table->decimal('discount', 8, 2)->nullable(); // Nullable discount column
            $table->timestamps();

            // Change onDelete("restrict") to onDelete("cascade")
            $table->foreign('category_id')->references('id')->on('categories')->onDelete("restrict");
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete("restrict");

            // Change onDelete("restrict") to onDelete("cascade")
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete("restrict");

            // Keep onDelete("cascade") for images_id
            $table->foreign('images_id')->references('id')->on('images')->onDelete("cascade");
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
