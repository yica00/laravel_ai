<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRcasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rcases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',80);
            $table->string('thumbnail',100)->nullable();
            $table->text('comtent',2000)->nullable();
            $table->integer('serial_number')->default(0);
            $table->integer('style_id');
            $table->integer('house_id');
            $table->integer('team_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rcases');
    }
}
