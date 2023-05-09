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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users');//one to many
$table->integer('statues')->default(0);
$table->string('payment_statues',700);
$table->string('payment_id');
$table->string('total_price',700);
$table->string('address',500);
$table->string('phone',300);
$table->string('email',300);
$table->string('name',300);
$table->string('city',300);
$table->string('postal_code',300);
$table->string('country',300);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
