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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();

            $table->string('title', 200);
            $table->string('price', 200);
            $table->boolean('discount');
            $table->string('discount_price', 50);
            $table->enum('payment_method', ['cash','bkash','credit_card']);

            //foreign id
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
         
            //Relation with Products
            $table->foreign('product_id')->references('id')->on('products')->restrictOnDelete()->cascadeOnUpdate();
            //Relation with Orders
            $table->foreign('order_id')->references('id')->on('orders')->restrictOnDelete()->cascadeOnUpdate();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
