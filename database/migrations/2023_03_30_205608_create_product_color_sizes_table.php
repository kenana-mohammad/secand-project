<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_color_sizes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('size_id')->constrained('sizes');//one to many
            $table->foreignId('product_color_id')->constrained('product_colors');//one to many
$table->integer('quantily');
$table->string('price_two',400)->nullable();
$table->string('discount',400)->nullable();
$table->integer('status')->default(1);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_color_sizes');
    }
};
