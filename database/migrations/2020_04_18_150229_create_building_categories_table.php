<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_categories', function (Blueprint $table) {
            $table->bigIncrements('building_id');
			//name
			$table->string('building_name');
			//types
			$table->string('building_type');
			$table->string('culture')->default('none');
			$table->unsignedBigInteger('religion')->default(9);
			//construction
			$table->integer('stones')->default(0);
			$table->integer('tiles')->default(0);
			$table->integer('timber')->default(0);	
			$table->integer('tatch')->default(0);	
			$table->integer('hardware')->default(0);
			$table->integer('stained_glass')->default(0);
			//cost
			$table->integer('cost')->default(0);
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
        Schema::dropIfExists('building_categories');
    }
}
