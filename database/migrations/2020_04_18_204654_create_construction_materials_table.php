<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstructionMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('construction_materials', function (Blueprint $table) {
            $table->bigIncrements('produce_id');
			//belonging
			$table->unsignedBigInteger('dynasty')->default(1);
			//resources
			$table->integer('tatch')->default(0);
			$table->integer('stones')->default(0);
			$table->integer('tiles')->default(0);
			$table->integer('timber')->default(0);	
			$table->integer('hardware')->default(0);
			$table->integer('glass')->default(0);	
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
        Schema::dropIfExists('construction_materials');
    }
}
