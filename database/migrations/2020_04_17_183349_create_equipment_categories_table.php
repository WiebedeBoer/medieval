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
			//armor stats
			$table->integer('armor')->default(0);
			//melee stats
			$table->integer('swing')->default(0);
			$table->integer('thrust')->default(0);
			//range stats
			$table->integer('range')->default(0);
			$table->integer('accuracy')->default(0);
			//packing stats
			$table->integer('cargo')->default(0);
			$table->integer('riding')->default(0);
			//warhorse stats
			$table->integer('charge')->default(0);
			$table->integer('manouver')->default(0);
			//ploughing stats
			$table->integer('draught')->default(0);
			//literatur stats
			$table->integer('literature')->default(0);
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
