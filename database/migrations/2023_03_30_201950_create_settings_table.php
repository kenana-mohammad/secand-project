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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title',200)->nullable();
            $table->string('decsrption',200)->nullable();
            $table->string('adddress',200)->nullable();
            $table->string('logo',200)->nullable();
            $table->string('favicon',200)->nullable();
            $table->string('email',200)->nullable();
            $table->string('phone',200)->nullable();
            $table->string('facebook',200)->nullable();
            $table->string('instagram',200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
