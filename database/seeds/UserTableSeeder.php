<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        	'id' => 1,
            'name' => 'admin',
            'tel' => '0663226032',
            'email' => 'admin@app.com',
            'password' => bcrypt('islam022'),
            'admin' => 1,
            'created_at' => date('Y-m-d H:i:s')

        ]);
    }
}
