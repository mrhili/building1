<?php

use Illuminate\Database\Seeder;

class BuildingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        //factory(App\Building::class, 40)->create();

        DB::table('buildings')->insert([


            'id' => 1,
            'name' => 'temporary building 4 storing imgs',
            'price' => 0,
            'status' => 0,
            'state' => 0,
            'rent' => 0,
            'square' => 0,
            'type' => 0,
            'roomNumber' => 0,
            'lang' => 0,
            'lat' => 0,
            'largDisc' => 'temporary building 4 storing imgs',
            'kind' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'user_id' => 1,
            'area_id' => 1,
            'tel' => '0663226032'

        ]);

    }
}
