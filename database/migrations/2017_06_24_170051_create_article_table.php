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
    protected $fillable = ['title','thumbnail','comtent','pid','is_nav','link','serial_number'];

    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',80);
            $table->string('thumbnail',100)->nullable();
            $table->string('introduce',200)->nullable();
            $table->text('comtent',2000)->nullable();
            $table->integer('pid');
            $table->tinyInteger('is_nav')->default(1);
            $table->integer('serial_number')->default(0);
            $table->string('link',100)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
