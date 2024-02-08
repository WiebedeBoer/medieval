<?php

use Illuminate\Database\Seeder;

class LiteratureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		/*
		//																					matter_genre:
		//																					Scriptures
		//																					Hagiography
		//																					Gospel
		//																					Epic
		//																					Satire
		//																					Chronicle
		//																					Treatise
		//
		//																					matter_religion:
		//(Catholic) | (Orthodox_Serbian) | (Orthodox_Greek) | (Orthodox_Bulgarian):		Christian
		//(Muslim_Sunni) | (Muslim_Shia):													Muslim
		*/
				
		//Matter_High_German
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Lorsch Gospels',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Echternach Gospels',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Saint Gall',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Mainz',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Bern',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Ada Gospels',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Song of Hildebrand',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Song of Ludwig',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Song of Ezzo',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Song of Anno',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Song of Alexander',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Song of Roland',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Song of the Nibelungs',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Muspili',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Manesse',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Jena Song',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Weingarten Song',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Battle of Ravenna',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Rose Garden at Worms',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Ambras Book of Heroes',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'William Tell',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Reynard the Fox',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Nuremberg Chronicle',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Imperial Chronicle',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Aachen Chronicle',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Royal Chronicle of Cologne',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Worms Chronicle',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Jungfrauenspiegel',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_High_German'
		]);
		//Matter_Low_German
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Low_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Life of Saint Servatius',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Low_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Egmond Gospels',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Low_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Wurzburg',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Low_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Fulda',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Low_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Utrecht Psalter',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Low_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Karel and Elegast',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Low_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Floris and Blancefloer',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Low_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Song of Roland',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Low_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Knight with the White Shield',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Low_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Four Brethren',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Low_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Children of Limburg',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Low_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Pied Piper of Hamelin',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Low_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Reynard the Fox',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Low_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Saxon World Chronicle',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Low_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Annals of Quedlinburg',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Low_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Deeds of the Bishops of Hamburg',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Low_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Deeds of the Bishops of Halberstadt',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Low_German'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Sachsenspiegel',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Low_German'
		]);
		//Matter_Lombard
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Lombard'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Life of Saint Anastasius',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Lombard'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Verona Gospels',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Lombard'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Brescia Gospels',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Lombard'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Milan',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Lombard'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Entry to Spain',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Lombard'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Lombard'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Lombard'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Lombard'
		]);
		//Matter_Venice
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Venice'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Venice'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Venice'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Venice'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Divine Comedy',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Venice'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Venice'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Venice'
		]);
		//Matter_Tuscan
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Tuscan'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Tuscan'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Florence',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Tuscan'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Tuscan'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Divine Comedy',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Tuscan'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Tuscan'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Tuscan'
		]);
		//Matter_Rome
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Rome'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Rome'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Rome'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Rome'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Divine Comedy',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Rome'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Rome'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Rome'
		]);
		//Matter_France
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Paris Gospels',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Autun Gospels',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Tours',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Rouen',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Ebbo Gospels',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Song of Roland',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Floire and Blanceflor',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Knight with the White Shield',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Four Brethren',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Song of Garin',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Song of Doolin',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Song of Guillaume',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Voyage of Charlemagne',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Houn of Bordeaux',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Houn of Auvergne',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Raoul of Cambrai',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Song of Antioch',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Song of Jerusalem',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Reynard the Fox',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'History of the Franks',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'On Gentle and Wild Beasts',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'On the Nature and Care of Dogs',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'On Instructions for Hunting with Dogs',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_France'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'On Hunting with Traps, Snares, and Crossbow',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_France'
		]);
		//Matter_Britain
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Life of Saint Cuthbert',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Cambridge',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Exeter',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Oxford',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Durham Gospels',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Lindisfarne Gospels',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Harley Psalter',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Eadwine Psalter',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Canterbury Psalter',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Legend of King Arthur',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Lancelot or the Knight and the Cart',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Yvain or the Knight of the Lion',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Parcival and the Story of the Grail',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Life of Merlin',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Gawain and the Green Knight',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Beowulf',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Gest of Robyn Hood',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Piers Plowman',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Canterbury Tales',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Madness of Tristan',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Reynard the Fox',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Annals of Wales',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'History of the Kings of Britain',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Hawking, Hunting, and Blasing of Arms',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Britain'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Master of Game',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Britain'
		]);
		//Matter_Fenian
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Fenian'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Life of Saint Patrick',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Fenian'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Life of Saint Columba',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Fenian'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Armagh',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Fenian'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Kells',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Fenian'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Pursuit of Diarmuid and Grainne',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Fenian'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Triads of Ireland',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Fenian'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Boyhood Deeds of Finn',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Fenian'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Piers Plowman',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Fenian'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Annals of the Four Masters',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Fenian'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Leinster',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Fenian'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Hawking, Hunting, and Blasing of Arms',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Fenian'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Master of Game',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Fenian'
		]);	
		//Matter_Aragon
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Aragon'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Aragon'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Aragon'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Aragon'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Aragon'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Aragon'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Aragon'
		]);
		//Matter_Castile
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Castile'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Castile'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Leon',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Castile'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Song of the Cid',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Castile'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Song of Fernan',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Castile'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Youths of Rodrigo',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Castile'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Song of the Seven Lara Princes',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Castile'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Castile'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'History of Spain',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Castile'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Knowledge',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Castile'
		]);
		//Matter_Portugal
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Portugal'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Portugal'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Portugal'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Portugal'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Portugal'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Portugal'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Portugal'
		]);
		//Matter_Norse
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Norse'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Norse'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Norse'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Song of Hamoir',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Norse'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Song of Gudrun',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Norse'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Lay of Atli',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Norse'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Norse'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Norse'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Norse'
		]);
		//Matter_Byzantine
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Byzantine'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Miracles of Saint Demetrius',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Byzantine'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Chludov Psalter',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Byzantine'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Joshua Roll',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Byzantine'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Digenes Akritas',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Byzantine'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Lay of Amouris',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Byzantine'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Timarion',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Byzantine'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Tale of Quadrupeds',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Byzantine'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Souda',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Byzantine'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Life of Basil',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Byzantine'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'History of the Wars',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Byzantine'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Reign of Justinian',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Byzantine'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Madrid Skylitzes',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Byzantine'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Chronicon Paschale',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Byzantine'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Table of Nations',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Byzantine'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Tactica',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Byzantine'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Hippiatrica',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Byzantine'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Strategikon',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Byzantine'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'On Ceremony',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Byzantine'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'On Military Expeditions',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Byzantine'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Geoponica',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Byzantine'
		]);
		//Matter_Sicily
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Sicily'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Sicily'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Sicily'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Sicily'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Sicily'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Sicily'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Sicily'
		]);
		//Matter_Napels
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Napels'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Life of Saint Felix',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Napels'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Naples',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Napels'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Napels'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Napels'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Napels'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Napels'
		]);
		//Matter_Sardinia
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Sardinia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Sardinia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Sardinia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Sardinia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Sardinia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Sardinia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Sardinia'
		]);
		//Matter_Georgia
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Georgia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Georgia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Georgia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Georgia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Georgia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Conversion of Kartli',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Georgia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Divan of the Abkhazian Kings',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Georgia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Georgian Chronicles',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Georgia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Georgia'
		]);
		//Matter_Armenia
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Armenia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Armenia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Armenia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Armenia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Armenia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Armenia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Armenia'
		]);
		//Matter_Bulgaria
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Bulgaria'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Bulgaria'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Bulgaria'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Bulgaria'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Bulgaria'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Bulgaria'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Bulgaria'
		]);
		//Matter_Vlach
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Vlach'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Vlach'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Vlach'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Vlach'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Vlach'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Vlach'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Vlach'
		]);
		//Matter_Serbia
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Serbia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Serbia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Serbia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Serbia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Serbia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Serbia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Serbia'
		]);
		//Matter_Kiev
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Kiev'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Kiev'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Kiev'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Ilya of Murom',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Kiev'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Sadko the Merchant',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Kiev'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Nikita the Tanner',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Kiev'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Nightingale the Robber',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Kiev'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Kiev'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Kiev'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Kiev'
		]);
		//Matter_Magyar
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Magyar'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Magyar'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Magyar'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Magyar'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Magyar'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'History of Hungary',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Magyar'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Magyar'
		]);
		//Matter_Croat
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Croat'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Croat'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Croat'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Croat'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Croat'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Croat'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Croat'
		]);
		//Matter_Bohemia
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Bohemia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Bohemia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Prague',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Bohemia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Bohemia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Bohemia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Bohemia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Bohemia'
		]);
		//Matter_Sorbia
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Sorbia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Sorbia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Sorbia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Sorbia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Sorbia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Sorbia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Sorbia'
		]);
		//Matter_Baltic
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Baltic'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Baltic'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Baltic'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Baltic'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Baltic'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Baltic'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Baltic'
		]);
		//Matter_Polish
		DB::table('literatures')->insert([
			'literature_matter' => 'Bible',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Polish'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Polish'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Christian',
			'matter_culture' => 'Matter_Polish'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Polish'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Polish'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Polish'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => '',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Polish'
		]);
		//Matter_Andalus
		DB::table('literatures')->insert([
			'literature_matter' => 'Koran',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Andalus'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Virtues of Abi Talib',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Andalus'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Virtues of Saqib',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Andalus'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Companions of the Prophet',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Andalus'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Alive Son of Awake',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Andalus'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Saying on Mules',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Andalus'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'History of the Prophets and Kings',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Andalus'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Method of Medicine',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Andalus'
		]);	
		DB::table('literatures')->insert([
			'literature_matter' => 'Nabataean Agriculture',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Andalus'
		]);
		//Matter_Darija
		DB::table('literatures')->insert([
			'literature_matter' => 'Koran',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Darija'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Virtues of Abi Talib',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Darija'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Virtues of Saqib',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Darija'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Companions of the Prophet',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Darija'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Life of Iskander',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Darija'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Saying on Mules',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Darija'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'History of the Prophets and Kings',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Darija'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Wonders',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Darija'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Doubts about Galen',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Darija'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book on Medicine',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Darija'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Secrets',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Darija'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'On Swords and Their Kinds',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Darija'
		]);
		//Matter_Ifriqiya
		DB::table('literatures')->insert([
			'literature_matter' => 'Koran',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Ifriqiya'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Virtues of Abi Talib',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Ifriqiya'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Virtues of Saqib',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Ifriqiya'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Companions of the Prophet',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Ifriqiya'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Strory of the Hilalis',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Ifriqiya'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Saying on Mules',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Ifriqiya'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'History of the Prophets and Kings',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Ifriqiya'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Wonders',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Ifriqiya'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Doubts about Galen',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Ifriqiya'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book on Medicine',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Ifriqiya'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Secrets',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Ifriqiya'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'On Swords and Their Kinds',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Ifriqiya'
		]);
		//Matter_Masri
		DB::table('literatures')->insert([
			'literature_matter' => 'Koran',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Masri'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Virtues of Abi Talib',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Masri'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Virtues of Saqib',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Masri'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Companions of the Prophet',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Masri'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Life of Baybars',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Masri'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Saying on Mules',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Masri'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'History of the Prophets and Kings',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Masri'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Wonders',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Masri'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Doubts about Galen',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Masri'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book on Medicine',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Masri'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Secrets',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Masri'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'On Swords and Their Kinds',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Masri'
		]);
		//Matter_Jazira
		DB::table('literatures')->insert([
			'literature_matter' => 'Koran',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Jazira'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Virtues of Abi Talib',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Jazira'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Virtues of Saqib',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Jazira'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Companions of the Prophet',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Jazira'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Tales from Baghdad',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Jazira'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Thousand Entertaining Tales',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Jazira'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Saying on Mules',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Jazira'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'History of the Prophets and Kings',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Jazira'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Wonders',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Jazira'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Doubts about Galen',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Jazira'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book on Medicine',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Jazira'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Secrets',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Jazira'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'On Swords and Their Kinds',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Jazira'
		]);
		//Matter_Levant
		DB::table('literatures')->insert([
			'literature_matter' => 'Koran',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Levant'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Virtues of Abi Talib',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Levant'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Virtues of Saqib',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Levant'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Companions of the Prophet',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Levant'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Tales from Aleppo',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Levant'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Fadil',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Levant'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Thousand Entertaining Tales',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Levant'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Saying on Mules',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Levant'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'History of the Prophets and Kings',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Levant'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Wonders',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Levant'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Doubts about Galen',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Levant'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book on Medicine',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Levant'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Secrets',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Levant'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'On Swords and Their Kinds',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Levant'
		]);
		//Matter_Hejaz
		DB::table('literatures')->insert([
			'literature_matter' => 'Koran',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Hejaz'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Virtues of Abi Talib',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Hejaz'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Virtues of Saqib',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Hejaz'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Companions of the Prophet',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Hejaz'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Life of Iskander',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Hejaz'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Thousand Entertaining Tales',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Hejaz'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Saying on Mules',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Hejaz'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'History of the Prophets and Kings',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Hejaz'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Wonders',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Hejaz'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Doubts about Galen',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Hejaz'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book on Medicine',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Hejaz'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Secrets',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Hejaz'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'On Swords and Their Kinds',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Hejaz'
		]);
		//Matter_Najd
		DB::table('literatures')->insert([
			'literature_matter' => 'Koran',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Najd'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Virtues of Abi Talib',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Najd'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Virtues of Saqib',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Najd'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Companions of the Prophet',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Najd'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Life of Iskander',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Najd'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Thousand Entertaining Tales',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Najd'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Saying on Mules',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Najd'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'History of the Prophets and Kings',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Najd'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Wonders',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Najd'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Doubts about Galen',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Najd'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book on Medicine',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Najd'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Secrets',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Najd'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'On Swords and Their Kinds',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Najd'
		]);
		//Matter_Turk
		DB::table('literatures')->insert([
			'literature_matter' => 'Koran',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Turk'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Virtues of Abi Talib',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Turk'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Virtues of Saqib',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Turk'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Companions of the Prophet',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Turk'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Epic of Koroghlu',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Turk'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Masnavi',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Turk'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Saying on Mules',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Turk'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'History of the House of Seljuk',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Turk'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'On Politics',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Turk'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Travels',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Turk'
		]);
		//Matter_Persia
		DB::table('literatures')->insert([
			'literature_matter' => 'Koran',
			'matter_genre' => 'Scriptures',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Persia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Revelation of the Veiled Realities',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Persia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Generations of the Sufis',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Persia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Virtues of the Gnostics',
			'matter_genre' => 'Hagiography',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Persia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Companions of the Prophet',
			'matter_genre' => 'Gospel',
			'matter_religion' => 'Muslim',
			'matter_culture' => 'Matter_Persia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Seven Wise Men',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Persia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Tales from Tabriz',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Persia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Tales of Timur',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Persia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Masnavi',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Persia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Seven Sessions',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Persia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Divan of Hafez',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Persia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Kings',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Persia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Thousand Entertaining Tales',
			'matter_genre' => 'Epic',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Persia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Mouse and Cat',
			'matter_genre' => 'Satire',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Persia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Compendium of Chronicles',
			'matter_genre' => 'Chronicle',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Persia'
		]);
		DB::table('literatures')->insert([
			'literature_matter' => 'Book of Healing',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Persia'
		]);	
		DB::table('literatures')->insert([
			'literature_matter' => 'Canon of Medicine',
			'matter_genre' => 'Treatise',
			'matter_religion' => null,
			'matter_culture' => 'Matter_Persia'
		]);	
    }
}