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
        Schema::create('paniers', function (Blueprint $table) {
            $table->bigIncrements('panier_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('coure_id');
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('coure_id')
            ->references('id')->on('courses')
            ->onDelete('cascade');

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
        Schema::dropIfExists('paniers');
    }
};
