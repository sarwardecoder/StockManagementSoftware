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
        Schema::create('stock_transactions', function (Blueprint $table) {
            $table->id();

            $table->string('stock_in', 200);
            $table->string('stock_out', 200);
            $table->string('final_stock', 200);
            $table->enum('payment_method', ['cash','bkash','credit_card']);
            
            //foreign id
            $table->string('product_name', 200);
            $table->string('supplier_name', 200);
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
         
            //Relation with Products
            // $table->foreign('product_name')->references('name')->on('products')->restrictOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('stock_transactions');
    }
};
