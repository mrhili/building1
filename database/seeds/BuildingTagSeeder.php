<?php

use Illuminate\Database\Seeder;

class BuildingTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            DB::table('building_tag')->insert(['building_id' => 1, 'tag_id' => 4]);

            DB::table('building_tag')->insert(['building_id' => 3, 'tag_id' => 2]);

            DB::table('building_tag')->insert(['building_id' => 4, 'tag_id' => 2]);

            DB::table('building_tag')->insert(['building_id' => 1, 'tag_id' => 1]);

            DB::table('building_tag')->insert(['building_id' => 5, 'tag_id' => 3]);

            DB::table('building_tag')->insert(['building_id' => 5, 'tag_id' => 1]);

            DB::table('building_tag')->insert(['building_id' => 1, 'tag_id' => 2]);
    }
}
