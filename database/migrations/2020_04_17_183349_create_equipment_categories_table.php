<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_categories', function (Blueprint $table) {
            $table->bigIncrements('equipment_id');
			$table->string('equipment');
			$table->string('type');
			//stats
			$table->integer('armor');
			$table->integer('melee');
			$table->integer('range');
			$table->integer('cargo');
			$table->integer('draught');
			$table->integer('riding');
			$table->integer('agility');
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
        Schema::dropIfExists('equipment_categories');
    }
}
