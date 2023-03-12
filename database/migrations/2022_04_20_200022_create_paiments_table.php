<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Paiment;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiments', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("number");
            $table->integer("jour");

            $table->integer("moins");
            $table->integer("ccv");
            $table->float("total");

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
        Schema::dropIfExists('paiments');
    }
};
