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
		//cultures
		$this->call('CultureSeeder');
		//regions
		$this->call('RegionSeeder');
		//places
		$this->call('PlaceSeeder');
		//titles
		$this->call('RealmTitlesSeeder');
		$this->call('CourtTitlesSeeder');
		$this->call('NobleTitlesSeeder');
		$this->call('ClergyTitlesSeeder');
		$this->call('CrusaderTitlesSeeder');
		$this->call('MonasticTitlesSeeder');
		$this->call('BurgherTitlesSeeder');
		$this->call('InnTitlesSeeder');
		$this->call('CommonTitlesSeeder');
		//titles
		$this->call('TitleSeeder');
		//admin user
		$this->call('userSeeder');
		//player character names
		$this->call('NamesSeeder');
		//character nick names
		$this->call('NicknameSeeder');
		//equipment types
		$this->call('EquipTypeSeeder');
		//skill types
		$this->call('SkillCategorySeeder');
		//resource types
		$this->call('ResourceTypeSeeder');
		
    }
}

class fkeySeeder extends Seeder
{
	//foreign keys
    public function run()
    {
        
		//places
		Schema::table('places', function (Blueprint $table) {
            $table->foreign('region')->references('region_id')->on('regions');
			$table->foreign('lord_paramount')->references('person_id')->on('people');
			$table->foreign('tenant_in_chief')->references('person_id')->on('people');
			$table->foreign('mesne_lord')->references('person_id')->on('people');
			$table->foreign('tenant_paravail')->references('person_id')->on('people');
			$table->foreign('allodial_owner')->references('person_id')->on('people');
			$table->foreign('tenure_owner')->references('person_id')->on('people');
			
        });
		
		//regions
        Schema::table('regions', function (Blueprint $table) {
            $table->foreign('culture')->references('culture_id')->on('cultures');
			$table->foreign('lord_paramount')->references('person_id')->on('people');
			$table->foreign('tenant_in_chief')->references('person_id')->on('people');
			$table->foreign('mesne_lord')->references('person_id')->on('people');
			$table->foreign('tenant_paravail')->references('person_id')->on('people');
			$table->foreign('allodial_owner')->references('person_id')->on('people');
			$table->foreign('tenure_owner')->references('person_id')->on('people');		
        });  
		
		//dynasties
		Schema::table('dynasties', function (Blueprint $table) {
			$table->foreign('ruler')->references('person_id')->on('people');
			$table->foreign('heir')->references('person_id')->on('people');
            $table->foreign('culture')->references('culture_id')->on('cultures');
			$table->foreign('dynasty_owner')->references('id')->on('users');
        }); 
		
		//threads
		Schema::table('threads', function (Blueprint $table) {
            $table->foreign('region')->references('region_id')->on('regions');
			$table->foreign('creator')->references('id')->on('users');
        }); 
		
		//posts
		Schema::table('posts', function (Blueprint $table) {
            $table->foreign('thread')->references('thread_id')->on('threads');
			$table->foreign('creator')->references('id')->on('users');
			$table->foreign('editor')->references('id')->on('users');
        }); 

		//realms
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

		//person
		Schema::table('people', function (Blueprint $table) {
			$table->foreign('nickname')->references('nickname_id')->on('nicknames');
			$table->foreign('owner')->references('id')->on('users');
            $table->foreign('dynasty')->references('dynasty_id')->on('dynasties');		
			$table->foreign('culture')->references('culture_id')->on('cultures');
			$table->foreign('place')->references('place_id')->on('places');
			$table->foreign('spouse')->references('person_id')->on('people');
			$table->foreign('married')->references('dynasty_id')->on('dynasties');	
			$table->foreign('father')->references('person_id')->on('people');
			$table->foreign('mother')->references('person_id')->on('people');
        }); 

		//skills
		Schema::table('skills', function (Blueprint $table) {
			$table->foreign('person')->references('person_id')->on('people');
			$table->foreign('skill')->references('skill_id')->on('skill_categories');
        }); 	

		//armies
		Schema::table('armies', function (Blueprint $table) {
			$table->foreign('marshall')->references('person_id')->on('people');
			$table->foreign('general')->references('person_id')->on('people');
			$table->foreign('lieutenant')->references('person_id')->on('people');
			$table->foreign('owner')->references('dynasty_id')->on('dynasties');
			$table->foreign('location')->references('place_id')->on('places');
        }); 
		
		//brigades
		Schema::table('brigades', function (Blueprint $table) {
			$table->foreign('army')->references('army_id')->on('armies');
			$table->foreign('captain')->references('person_id')->on('people');
        });

		//titles
		Schema::table('titles', function (Blueprint $table) {
			$table->foreign('owner')->references('person_id')->on('people');
			$table->foreign('holder')->references('person_id')->on('people');
			$table->foreign('region')->references('region_id')->on('regions');
			$table->foreign('place')->references('place_id')->on('places');
        }); 

		//equipment
		Schema::table('equipment', function (Blueprint $table) {
			$table->foreign('owner')->references('person_id')->on('people');
			$table->foreign('category')->references('equipment_id')->on('equipment_categories');
        }); 

		//building
		Schema::table('buildings', function (Blueprint $table) {
			$table->foreign('building_type')->references('building_id')->on('building_categories');
			$table->foreign('owner')->references('person_id')->on('people');
			$table->foreign('master')->references('person_id')->on('people');
			$table->foreign('place')->references('place_id')->on('places');
			$table->foreign('region')->references('region_id')->on('regions');		
        }); 

		//estates
		Schema::table('estates', function (Blueprint $table) {
			$table->foreign('building_type')->references('building_id')->on('building_categories');
			$table->foreign('owner')->references('person_id')->on('people');
			$table->foreign('master')->references('person_id')->on('people');
			$table->foreign('dynasty')->references('dynasty_id')->on('dynasties');	
			$table->foreign('place')->references('place_id')->on('places');
			$table->foreign('region')->references('region_id')->on('regions');		
        }); 

		//caravans
		Schema::table('caravans', function (Blueprint $table) {
			$table->foreign('owner')->references('person_id')->on('people');
			$table->foreign('master')->references('person_id')->on('people');
			$table->foreign('dynasty')->references('dynasty_id')->on('dynasties');	
			$table->foreign('place')->references('place_id')->on('places');
        }); 
		
		//fleets
		Schema::table('fleets', function (Blueprint $table) {
			$table->foreign('owner')->references('person_id')->on('people');
			$table->foreign('master')->references('person_id')->on('people');
			$table->foreign('dynasty')->references('dynasty_id')->on('dynasties');	
			$table->foreign('place')->references('place_id')->on('places');
        }); 
		
		//cargo
		Schema::table('cargos', function (Blueprint $table) {
			$table->foreign('owner')->references('person_id')->on('people');
			$table->foreign('dynasty')->references('dynasty_id')->on('dynasties');	
			$table->foreign('fleet')->references('fleet_id')->on('fleets');
			$table->foreign('caravan')->references('caravan_id')->on('caravans');		
			$table->foreign('place')->references('place_id')->on('places');
			$table->foreign('resource')->references('resource_id')->on('resource_types');
        }); 
		
		//produces
		Schema::table('produces', function (Blueprint $table) {
			$table->foreign('dynasty')->references('dynasty_id')->on('dynasties');	
        }); 
		
		//construction materials
		Schema::table('construction_materials', function (Blueprint $table) {
			$table->foreign('dynasty')->references('dynasty_id')->on('dynasties');	
        }); 
		
		//ores
		Schema::table('ores', function (Blueprint $table) {
			$table->foreign('dynasty')->references('dynasty_id')->on('dynasties');	
        }); 
		
		//products
		Schema::table('products', function (Blueprint $table) {
			$table->foreign('dynasty')->references('dynasty_id')->on('dynasties');	
        }); 
		
		//goods
		Schema::table('goods', function (Blueprint $table) {
			$table->foreign('dynasty')->references('dynasty_id')->on('dynasties');	
        }); 
		
		//shops
		Schema::table('shops', function (Blueprint $table) {
			$table->foreign('owner')->references('person_id')->on('people');
			$table->foreign('master')->references('person_id')->on('people');
			$table->foreign('dynasty')->references('dynasty_id')->on('dynasties');
			$table->foreign('place')->references('place_id')->on('places');
			$table->foreign('resource')->references('resource_id')->on('resource_types');			
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
			'audio' => '0',
			'admin' => '1'
	]);
	
	}
	
}
