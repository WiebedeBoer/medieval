<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFurnishingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('furnishings', function (Blueprint $table) {
            $table->bigIncrements('furnishing_id');
			//custom
			$table->string('furnishing_name');			
			$table->string('furnishing_category')->default('furniture');	
			$table->integer('quality')->default(0);
			//belonging
			$table->unsignedBigInteger('room');	
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
        Schema::dropIfExists('furnishings');
    }
}
