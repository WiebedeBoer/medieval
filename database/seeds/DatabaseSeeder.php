<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
		
		Schema::table('dynasties', function (Blueprint $table) {
            $table->foreign('culture')->references('culture_id')->on('cultures');
        }); 
		
		Schema::table('threads', function (Blueprint $table) {
            $table->foreign('region')->references('region_id')->on('regions');
			$table->foreign('creator')->references('id')->on('users');
        }); 
		
		Schema::table('posts', function (Blueprint $table) {
            $table->foreign('thread')->references('thread_id')->on('threads');
			$table->foreign('creator')->references('id')->on('users');
        }); 
		
    }
}
