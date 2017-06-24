<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJdAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jd_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account',20);
            $table->string('password',20);
            $table->string('charge_password',20)->nullable();
            $table->string('email',30)->nullable();
            $table->string('email_password',20)->nullable();
            $table->string('qq',13)->nullable();
            $table->string('ip',16)->nullable();
            $table->string('ip_location',30)->nullable();
            $table->string('phone',20)->nullable();
            $table->char('simulator_phone',11)->nullable();
            $table->string('imei',20)->nullable();
            $table->string('receiver_address',30)->nullable();
            $table->string('receiver_name',10)->nullable();
            $table->char('receiver_phone',11)->nullable();
            $table->string('pc_cookie',1000)->nullable();
            $table->string('mc_cookie',1000)->nullable();
            $table->string('app_cookie',1000)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jd_accounts');
    }
}
