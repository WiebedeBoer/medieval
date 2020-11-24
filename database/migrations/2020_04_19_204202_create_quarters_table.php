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
            //location
            $table->integer('x');
            $table->integer('y');
			//category
			$table->unsignedBigInteger('quarter_category');
			//place
			$table->unsignedBigInteger('place')->nullable();
			//region
			$table->unsignedBigInteger('region');
			//farmstead
			$table->unsignedBigInteger('farmstead')->nullable();
			//belonging
			$table->unsignedBigInteger('owner')->default(1);
			$table->unsignedBigInteger('master')->default(1);
			$table->unsignedBigInteger('dynasty')->default(1);
			//time
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
