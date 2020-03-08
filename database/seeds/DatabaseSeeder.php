<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //foreign keys
		$this->call('fkeySeeder');
		//tables
		$this->call('CultureSeeder');
		$this->call('RegionSeeder');
		$this->call('PlaceSeeder');
    }
}

class fkeySeeder extends Seeder
{
	//foreign keys
    public function run()
    {
        Schema::table('places', function (Blueprint $table) {
            $table->foreign('region')->references('region_id')->on('regions');
        });
        Schema::table('regions', function (Blueprint $table) {
            $table->foreign('culture')->references('culture_id')->on('cultures');
        });  
		
    }
}
