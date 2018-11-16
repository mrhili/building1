<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(SiteSettingsSeeder::class);
        $this->call(UserTableSeeder::class);

        $this->call(AreaSeeder::class);
        $this->call(BuildingTableSeeder::class);
       $this->call(TagSeeder::class);
//		$this->call(BuildingTagSeeder::class);
        //$this->call(ContactSeeding::class);
        //$this->call(ReplyTableSeeder::class);
    }
}
