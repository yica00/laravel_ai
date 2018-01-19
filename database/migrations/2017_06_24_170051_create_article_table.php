<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
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
            $table->string('title',50);
            $table->string('thumbnail',200)->nullable();
            $table->integer('serial_number')->unsigned()->default(0);
            $table->integer('pid')->unsigned()->default(0);
            $table->integer('is_nav')->unsigned()->default(0);
            $table->string('imgs',250)->nullable();
            $table->text('text',1000)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
