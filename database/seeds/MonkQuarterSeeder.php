<?php

use Illuminate\Database\Seeder;

class MonkQuarterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //crusaders
        //Marienburg
        DB::table('quarters')->insert([
            'quarter_rank' => 'commandery',
            'x' => '3',
            'y' => '4',
            'quarter_name' => 'commandery of ',
            'quarter_category' => '20',
            'place' => '277',
            'region' => '70'
        ]);
        //Jerusalem
        DB::table('quarters')->insert([
            'quarter_rank' => 'commandery',
            'x' => '3',
            'y' => '4',
            'quarter_name' => 'commandery of ',
            'quarter_category' => '20',
            'place' => '993',
            'region' => '249'
        ]);
        //Jerusalem
        DB::table('quarters')->insert([
            'quarter_rank' => 'commandery',
            'x' => '6',
            'y' => '4',
            'quarter_name' => 'commandery of ',
            'quarter_category' => '20',
            'place' => '993',
            'region' => '249'
        ]);       
        //five catholic abbey
        //rome
        DB::table('quarters')->insert([
            'quarter_rank' => 'abbacy',
            'x' => '4',
            'y' => '2',
            'quarter_name' => 'abbey of ',
            'quarter_category' => '21',
            'place' => '497',
            'region' => '125'
        ]);
        /*
        //subiaco
        DB::table('quarters')->insert([
            'quarter_rank' => 'abbacy',
            'x' => '4',
            'y' => '2',
            'quarter_name' => 'abbey of ',
            'quarter_category' => '21',
            'place' => '500',
            'region' => '125'
        ]);
        */        
        //maidstone
        DB::table('quarters')->insert([
            'quarter_rank' => 'abbacy',
            'x' => '4',
            'y' => '2',
            'quarter_name' => 'abbey of ',
            'quarter_category' => '21',
            'place' => '192',
            'region' => '48'
        ]); 
        /*       
        //Clairvaux
        DB::table('quarters')->insert([
            'quarter_rank' => 'abbacy',
            'x' => '4',
            'y' => '2',
            'quarter_name' => 'abbey of ',
            'quarter_category' => '21',
            'place' => '132',
            'region' => '33'
        ]);
        */
        /*
        //Assissi
        DB::table('quarters')->insert([
            'quarter_rank' => 'abbacy',
            'x' => '4',
            'y' => '2',
            'quarter_name' => 'abbey of ',
            'quarter_category' => '21',
            'place' => '496',
            'region' => '124'
        ]);
        */
        //3 orthodox abbey
        //Constantinople
        DB::table('quarters')->insert([
            'quarter_rank' => 'abbacy',
            'x' => '4',
            'y' => '2',
            'quarter_name' => 'monastery of ',
            'quarter_category' => '21',
            'place' => '825',
            'region' => '207'
        ]);
        /*
        //Bukovo
        DB::table('quarters')->insert([
            'quarter_rank' => 'abbacy',
            'x' => '4',
            'y' => '2',
            'quarter_name' => 'monastery of ',
            'quarter_category' => '21',
            'place' => '736',
            'region' => '184'
        ]);
        */
        /*
        //Monastyrski
        DB::table('quarters')->insert([
            'quarter_rank' => 'abbacy',
            'x' => '4',
            'y' => '2',
            'quarter_name' => 'monastery of ',
            'quarter_category' => '21',
            'place' => '749',
            'region' => '188'
        ]);
        */
        //muslim quarter
        //Medina
        DB::table('quarters')->insert([
            'quarter_rank' => 'abbacy',
            'x' => '4',
            'y' => '2',
            'quarter_name' => 'tariq of ',
            'quarter_category' => '21',
            'place' => '988',
            'region' => '247'
        ]);


    }
}
