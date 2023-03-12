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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('description');
            // $table->string('cours');
            $table->string('dificulties');
            $table->string('image');
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('formateur_id');
            $table->foreign('cat_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('formateur_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
