<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedievalNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medieval_names', function (Blueprint $table) {
            $table->bigIncrements('name_id');
			//name
			$table->string('person_name');
			//data		
			$table->string('culture');			
			$table->string('gender');
			$table->string('portrait')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medieval_names');
    }
}
