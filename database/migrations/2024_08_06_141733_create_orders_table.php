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
        if (!Schema::hasTable('orders')) {
            Schema::create('orders', function (Blueprint $table) {
                $table->id();
                $table->string('name',200);
                $table->string('email',200);
                $table->string('number',12);
                $table->string('address',200);
                $table->string('method',50);
                $table->string('payment_status',20);
                $table->integer('user_id');
                $table->string('total_products',1000);
                $table->integer('total_price',100);
                $table->string('placed_on',50);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
