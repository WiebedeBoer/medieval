<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmsteadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmsteads', function (Blueprint $table) {
            $table->bigIncrements('farmstead_id');
			$table->unsignedBigInteger('farmstead_name');
			$table->unsignedBigInteger('owner');
			$table->unsignedBigInteger('master');
			$table->unsignedBigInteger('dynasty');
			$table->unsignedBigInteger('region');
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
        Schema::dropIfExists('farmsteads');
    }
}
