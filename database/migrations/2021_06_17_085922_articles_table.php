<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->date('publication_date');
            $table->integer('target')->unsigned();
            // 0 -> tous : 1 -> primaire : 2 -> collège : 3 -> lycée : 4 -> membre
            $table->integer('theme')->unsigned();
            $table->text('key_words');
            $table->integer('association')->unsigned()->nullable();
            $table->integer('certified')->default(0);
            $table->integer('type')->default(0);
            $table->integer('support')->unsigned();
            $table->integer('read_time')->nullable();
            $table->text('url');
            // 0 -> Article : 1 -> News
            $table->bigInteger('views')->default(0);
            $table->timestamps();

            $table->foreign('target')->references('id')->on('targets');
            $table->foreign('theme')->references('id')->on('themes');
            $table->foreign('support')->references('id')->on('supports');
            $table->foreign('association')->references('id')->on('associations'); 
        });
        DB::statement('ALTER TABLE articles ADD FULLTEXT fulltext_index (title, content,key_words)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
