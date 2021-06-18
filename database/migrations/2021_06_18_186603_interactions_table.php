<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InteractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('article_id')->unsigned();
            $table->integer('type')->default(0);
            // 0 -> J'aime : 1 -> Ajout à une playlist
            $table->integer('playlist_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('article_id')->references('id')->on('articles');
            $table->foreign('playlist_id')->references('id')->on('playlists');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interactions');
    }
}
