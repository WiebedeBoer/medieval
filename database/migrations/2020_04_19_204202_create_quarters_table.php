<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuartersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quarters', function (Blueprint $table) {
            $table->bigIncrements('quarter_id');
			//name
			$table->string('quarter_name');
			$table->string('quarter_rank');
			//category
			$table->unsignedBigInteger('quarter_category');
			//place
			$table->unsignedBigInteger('place')->default(0);					
			//belonging
			$table->unsignedBigInteger('owner')->default(0);
			$table->unsignedBigInteger('master')->default(0);
			$table->unsignedBigInteger('dynasty')->default(0);
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
        Schema::dropIfExists('quarters');
    }
}
