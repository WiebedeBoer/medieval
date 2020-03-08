<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->bigIncrements('region_id');
			$table->string('region_name');
			$table->string('rank');
			$table->string('climate');
			$table->string('herb');
			$table->string('style');
			$table->string('ride');
			$table->unsignedBigInteger('culture');
			$table->string('cycle');
			$table->integer('region_x')->default(0); //default = 0
            $table->integer('region_y')->default(0); //default = 0
			$table->text('region_description')->nullable();
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
        Schema::dropIfExists('regions');
    }
}
