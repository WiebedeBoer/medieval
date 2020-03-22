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
		$this->call('TitleSeeder');
		//admin user
		$this->call('userSeeder');
    }
}

class fkeySeeder extends Seeder
{
	//foreign keys
    public function run()
    {
        
		Schema::table('places', function (Blueprint $table) {
            $table->foreign('region')->references('region_id')->on('regions');
			$table->foreign('lord_paramount')->references('person_id')->on('people');
			$table->foreign('tenant_in_chief')->references('person_id')->on('people');
			$table->foreign('mesne_lord')->references('person_id')->on('people');
			$table->foreign('tenant_paravail')->references('person_id')->on('people');
			$table->foreign('allodial_owner')->references('person_id')->on('people');
			$table->foreign('tenure_owner')->references('person_id')->on('people');
			
        });
		
        Schema::table('regions', function (Blueprint $table) {
            $table->foreign('culture')->references('culture_id')->on('cultures');
			$table->foreign('lord_paramount')->references('person_id')->on('people');
			$table->foreign('tenant_in_chief')->references('person_id')->on('people');
			$table->foreign('mesne_lord')->references('person_id')->on('people');
			$table->foreign('tenant_paravail')->references('person_id')->on('people');
			$table->foreign('allodial_owner')->references('person_id')->on('people');
			$table->foreign('tenure_owner')->references('person_id')->on('people');
			
        });  
		
		Schema::table('dynasties', function (Blueprint $table) {
            $table->foreign('culture')->references('culture_id')->on('cultures');
			$table->foreign('dynasty_owner')->references('id')->on('users');
        }); 
		
		Schema::table('threads', function (Blueprint $table) {
            $table->foreign('region')->references('region_id')->on('regions');
			$table->foreign('creator')->references('id')->on('users');
        }); 
		
		Schema::table('posts', function (Blueprint $table) {
            $table->foreign('thread')->references('thread_id')->on('threads');
			$table->foreign('creator')->references('id')->on('users');
			$table->foreign('editor')->references('id')->on('users');
        }); 

		Schema::table('realms', function (Blueprint $table) {
			$table->foreign('ruler')->references('person_id')->on('people');
			$table->foreign('owner')->references('id')->on('users');
            $table->foreign('dynasty')->references('dynasty_id')->on('dynasties');		
			$table->foreign('culture')->references('culture_id')->on('cultures');
			$table->foreign('chancellor')->references('person_id')->on('people');
			$table->foreign('chamberlain')->references('person_id')->on('people');
			$table->foreign('marshall')->references('person_id')->on('people');
			$table->foreign('admiral')->references('person_id')->on('people');
			$table->foreign('steward')->references('person_id')->on('people');
			$table->foreign('capital')->references('place_id')->on('places');
        }); 

		Schema::table('people', function (Blueprint $table) {
			$table->foreign('owner')->references('id')->on('users');
            $table->foreign('dynasty')->references('dynasty_id')->on('dynasties');		
			$table->foreign('culture')->references('culture_id')->on('cultures');
			$table->foreign('spouse')->references('person_id')->on('people');
			$table->foreign('father')->references('person_id')->on('people');
			$table->foreign('mother')->references('person_id')->on('people');
        }); 

		Schema::table('skills', function (Blueprint $table) {
			$table->foreign('person')->references('person_id')->on('people');
        }); 	

		Schema::table('armies', function (Blueprint $table) {
			$table->foreign('marshall')->references('person_id')->on('people');
			$table->foreign('general')->references('person_id')->on('people');
			$table->foreign('lieutenant')->references('person_id')->on('people');
			$table->foreign('owner')->references('dynasty_id')->on('dynasties');
			$table->foreign('location')->references('place_id')->on('places');
        }); 

		Schema::table('titles', function (Blueprint $table) {
			$table->foreign('owner')->references('person_id')->on('people');
			$table->foreign('holder')->references('person_id')->on('people');
			$table->foreign('region')->references('region_id')->on('regions');
			$table->foreign('place')->references('place_id')->on('places');
        }); 		
		
    }
}

class userSeeder extends Seeder
{
	//admin
    public function run()
    {
		DB::table('users')->insert([
			'name' => 'Wiebe',
			'email' => 'wiebe81@gmail.com',
			'password' => '$2y$10$cGxbdYZ84Jd1iBerxc4YcOSSUmu6JeIFc5JhrPe5Fh9MRTQcl3xwO',
			'admin' => '1'
	]);
	
	}
	
}
