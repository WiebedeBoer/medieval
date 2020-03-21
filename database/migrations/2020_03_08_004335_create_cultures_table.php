<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCulturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cultures', function (Blueprint $table) {
            $table->bigIncrements('culture_id');
			$table->string('culture_name');
			$table->string('warrior_culture');
			$table->string('chivalry_culture');
			$table->string('manorial_culture');
			$table->string('commercial_culture');
			$table->string('troubadour');
			$table->text('culture_description')->nullable();
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
        Schema::dropIfExists('cultures');
    }
}
