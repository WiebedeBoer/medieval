<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSteadNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stead_names', function (Blueprint $table) {
            $table->bigIncrements('stead_id');
			$table->string('stead_name');
			$table->string('stead_category');
			$table->unsignedBigInteger('stead_culture');
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
        Schema::dropIfExists('stead_names');
    }
}
