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
		
		//admin user
		$this->call('userSeeder');	

		//stead cultures
		$this->call('SteadCultureSeeder');
		//cultures
		$this->call('CultureSeeder');
		//regions
		$this->call('RegionSeeder');
		//places
		$this->call('PlaceSeeder');	
		//character nick names
		$this->call('NicknameSeeder');
		
		//defaults seeder
		$this->call('defaultsSeeder');
		//default realms seeder
		$this->call('RealmSeeder');
		//default guilds seeder
		$this->call('GuildSeeder');
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
		$this->call('TitleSeeder');
		//player character names
		$this->call('NamesSeeder');
		//equipment types
		$this->call('EquipTypeSeeder');
		//skill types
		$this->call('SkillCategorySeeder');
		//resource types
		$this->call('ResourceTypeSeeder');
		//homestead names
		$this->call('SteadNameSeeder');
		//quarter categories
		$this->call('QuarterCategorySeeder');
		
    }
}

class fkeySeeder extends Seeder
{
	//foreign keys
    public function run()
    {
		//chronicles
		//chronicles
		Schema::table('chronicles', function (Blueprint $table) {
			$table->foreign('dynasty')->references('dynasty_id')->on('dynasties');		
			$table->foreign('region')->references('region_id')->on('regions');
			$table->foreign('place')->references('place_id')->on('places');
			$table->foreign('realm')->references('realm_id')->on('realms');
			$table->foreign('belligerent')->references('realm_id')->on('realms');
			$table->foreign('guild')->references('guild_id')->on('guilds');
        });
		
		//gameplay socials and hierearchy		
		//dynasties
		Schema::table('dynasties', function (Blueprint $table) {
            $table->foreign('culture')->references('culture_id')->on('cultures');
			$table->foreign('dynasty_owner')->references('id')->on('users');
			$table->foreign('home')->references('place_id')->on('places');
        }); 
		
		//cultures
        Schema::table('cultures', function (Blueprint $table) {
            $table->foreign('stead_culture')->references('culture_id')->on('stead_cultures');	
        }); 

		//realms
		Schema::table('realms', function (Blueprint $table) {
			$table->foreign('ruler')->references('person_id')->on('people');
            $table->foreign('dynasty')->references('dynasty_id')->on('dynasties');		
			$table->foreign('culture')->references('culture_id')->on('cultures');
			$table->foreign('capital')->references('place_id')->on('places');
			$table->foreign('chancellor')->references('person_id')->on('people');
			$table->foreign('chamberlain')->references('person_id')->on('people');
			$table->foreign('marshall')->references('person_id')->on('people');
			$table->foreign('admiral')->references('person_id')->on('people');
			$table->foreign('steward')->references('person_id')->on('people');		
        });
		
		//guilds
        Schema::table('guilds', function (Blueprint $table) {
            $table->foreign('realm')->references('realm_id')->on('realms');	
			$table->foreign('place')->references('place_id')->on('places');
			$table->foreign('master')->references('person_id')->on('people');
        }); 

		//titles
		Schema::table('titles', function (Blueprint $table) {
			$table->foreign('owner')->references('person_id')->on('people');
			$table->foreign('holder')->references('person_id')->on('people');
			$table->foreign('region')->references('region_id')->on('regions');
			$table->foreign('place')->references('place_id')->on('places');
        });

		//citizens
        Schema::table('citizens', function (Blueprint $table) {
			$table->foreign('citizen')->references('person_id')->on('people');
            $table->foreign('realm')->references('realm_id')->on('realms');			
        }); 
		
		//guild members
        Schema::table('guild_members', function (Blueprint $table) {
			$table->foreign('member')->references('person_id')->on('people');
            $table->foreign('guild')->references('guild_id')->on('guilds');			
        }); 
		
		//spouses
        Schema::table('spouses', function (Blueprint $table) {
			$table->foreign('husband')->references('person_id')->on('people');
            $table->foreign('wife')->references('person_id')->on('people');			
        }); 
		
		//parents
        Schema::table('parents', function (Blueprint $table) {
			$table->foreign('father')->references('person_id')->on('people');
            $table->foreign('mother')->references('person_id')->on('people');
			$table->foreign('child')->references('person_id')->on('people');				
        }); 

		//gameplay characters
		//person
		Schema::table('people', function (Blueprint $table) {
			$table->foreign('nickname')->references('nickname_id')->on('nicknames');
			$table->foreign('owner')->references('id')->on('users');
            $table->foreign('dynasty')->references('dynasty_id')->on('dynasties');		
			$table->foreign('culture')->references('culture_id')->on('cultures');
			$table->foreign('place')->references('place_id')->on('places');
			$table->foreign('married')->references('dynasty_id')->on('dynasties');	
        }); 
		
		//skills
		Schema::table('skills', function (Blueprint $table) {
			$table->foreign('person')->references('person_id')->on('people');
			$table->foreign('skill')->references('skill_id')->on('skill_categories');
        }); 

		//equipment
		Schema::table('equipment', function (Blueprint $table) {
			$table->foreign('owner')->references('person_id')->on('people');
			$table->foreign('category')->references('equipment_id')->on('equipment_categories');
        }); 		
		
		//forum
		//threads
		Schema::table('threads', function (Blueprint $table) {        
			$table->foreign('creator')->references('id')->on('users');
			$table->foreign('region')->references('region_id')->on('regions');
			$table->foreign('realm')->references('realm_id')->on('realms');
			$table->foreign('belligerent')->references('realm_id')->on('realms');
			$table->foreign('guild')->references('guild_id')->on('guilds');
        }); 
		
		//posts
		Schema::table('posts', function (Blueprint $table) {
            $table->foreign('thread')->references('thread_id')->on('threads');
			$table->foreign('creator')->references('id')->on('users');
			$table->foreign('editor')->references('id')->on('users');
        }); 
		
		//military
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

		//economy and trade
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

		//geography and locations
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

		//stead names
        Schema::table('stead_names', function (Blueprint $table) {
            $table->foreign('stead_culture')->references('culture_id')->on('stead_cultures');	
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

		//farmsteads
		Schema::table('farmsteads', function (Blueprint $table) {
			$table->foreign('farmstead_name')->references('stead_id')->on('stead_names');	
			$table->foreign('owner')->references('person_id')->on('people');
			$table->foreign('master')->references('person_id')->on('people');
			$table->foreign('dynasty')->references('dynasty_id')->on('dynasties');
			$table->foreign('region')->references('region_id')->on('regions');		
        });	
		
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

		//quarters
		Schema::table('quarters', function (Blueprint $table) {
			$table->foreign('place')->references('place_id')->on('places');	
			$table->foreign('owner')->references('person_id')->on('people');
			$table->foreign('master')->references('person_id')->on('people');
			$table->foreign('dynasty')->references('dynasty_id')->on('dynasties');
			$table->foreign('region')->references('region_id')->on('regions');	
			$table->foreign('quarter_category')->references('quarter_id')->on('quarter_categories');	
        }); 		
		
		//building
		Schema::table('buildings', function (Blueprint $table) {
			$table->foreign('building_type')->references('building_id')->on('building_categories');
			$table->foreign('owner')->references('person_id')->on('people');
			$table->foreign('master')->references('person_id')->on('people');
			$table->foreign('place')->references('place_id')->on('places');
			$table->foreign('region')->references('region_id')->on('regions');
			$table->foreign('quarter')->references('quarter_id')->on('quarters');				
        });

		//rooms
        Schema::table('rooms', function (Blueprint $table) {
            $table->foreign('building')->references('building_id')->on('buildings');	
        }); 

		//furnishings
        Schema::table('furnishings', function (Blueprint $table) {
            $table->foreign('room')->references('room_id')->on('rooms');	
        });  		
		
		
    }
}

class defaultsSeeder extends Seeder
{
	//admin
    public function run()
    {
		//default dynasties
		//dynasty 1 game moderator
		DB::table('dynasties')->insert([
			'dynasty_name' => 'Wanderers',
			'dynasty_owner' => '1',
			'culture' => '13',
			'home' => '497'
		]);	
		//default persons
		//person 1 adam
		DB::table('people')->insert([
			'person_name' => 'Adam',
			'portrait' => 'black',
			'nickname' => '1',
			'owner' => '1',
			'dynasty' => '1',
			'culture' => '13',
			'place' => '497',
			'married' => '1',
			'gender' => '1',
			'birth' => '0',
			'alive' => '0',
		]);
		//person 2 eve
		DB::table('people')->insert([
			'person_name' => 'Eve',
			'portrait' => 'black',
			'nickname' => '2',
			'owner' => '1',
			'dynasty' => '1',
			'culture' => '13',
			'place' => '497',
			'married' => '1',
			'gender' => '0',
			'birth' => '0',
			'alive' => '0',
		]);		
		
	}
	
}

class userSeeder extends Seeder
{
	
	//admins game moderator
    public function run()
    {
		//1 default admin game master
		DB::table('users')->insert([
			'name' => 'GameMaster',
			'email' => 'info@romegames.nl',
			'password' => '$2y$10$cGxbdYZ84Jd1iBerxc4YcOSSUmu6JeIFc5JhrPe5Fh9MRTQcl3xwO',
			'audio' => '0',
			'admin' => '1'
		]);
	
		//2 admin player
		DB::table('users')->insert([
			'name' => 'Wiebe',
			'email' => 'wiebe81@gmail.com',
			'password' => '$2y$10$cGxbdYZ84Jd1iBerxc4YcOSSUmu6JeIFc5JhrPe5Fh9MRTQcl3xwO',
			'audio' => '0',
			'admin' => '1'
		]);
	
	}
	
}
