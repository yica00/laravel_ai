<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('managers')->insert([
            'name'=>'admin',
            'email'=>'hupp@vip.qq.com',
            'password'=>bcrypt('li1028')
        ]);
    }
}
