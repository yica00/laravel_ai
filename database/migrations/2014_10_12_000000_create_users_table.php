<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name',11)->unique();
            $table->string('rel_name',10)->nullable();
            $table->string('wx_name',30)->nullable();
            $table->string('photo',160)->nullable();
            $table->char('phone',11)->nullable();
            $table->string('id_card',20)->nullable();
            $table->string('address',100)->nullable();
            $table->string('openid',40)->nullable();
            $table->integer('refer')->nullable();
            $table->decimal('tatal_fee',8,2)->default(0);
            $table->decimal('payed_fee',8,2)->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
