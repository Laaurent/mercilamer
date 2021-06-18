<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citations', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->integer('theme_id')->unsigned();
            $table->timestamps();

            $table->foreign('theme_id')->references('id')->on('themes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citations');
    }
}
