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
			$table->string('religion')->default('none');
			//construction
			$table->integer('stone')->default(0);
			$table->integer('wood')->default(0);		
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
