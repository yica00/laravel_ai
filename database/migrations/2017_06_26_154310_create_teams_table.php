<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',20);
            $table->string('belong_to',20)->nullable();
            $table->string('photo',100)->nullable();
            $table->string('introduce',200)->nullable();
            $table->string('iterm',20)->nullable();
            $table->char('phone',15)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
