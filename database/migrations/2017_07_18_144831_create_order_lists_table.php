<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',40);
            $table->string('address',50)->nullable();
            $table->timestamp('order_data')->nullable();
            $table->string('category',15)->nullable();
            $table->string('parameter',30)->nullable();
            $table->integer('amount')->nullable();
            $table->string('organization',20)->nullable();
            $table->integer('article_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_lists');
    }
}
