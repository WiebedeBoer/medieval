<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estates', function (Blueprint $table) {
            $table->bigIncrements('estate_id');
			//name
			$table->string('estate_name');
			//types
			$table->string('estate_type');
			$table->string('culture')->default('none');
			$table->string('religion')->default('none');
			//type
			$table->unsignedBigInteger('building_type');
			//belonging
			$table->unsignedBigInteger('owner')->default(0);
			$table->unsignedBigInteger('master')->default(0);
			$table->unsignedBigInteger('dynasty')->default(0);
			//place
			$table->unsignedBigInteger('place')->default(0);
			//region
			$table->unsignedBigInteger('region')->default(0);					
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estates');
    }
}
