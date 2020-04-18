<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFleetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fleets', function (Blueprint $table) {
			$table->bigIncrements('fleet_id');
			//name
			$table->string('fleet_name');
			//belonging
			$table->unsignedBigInteger('owner')->default(0);
			$table->unsignedBigInteger('master')->default(0);
			$table->unsignedBigInteger('dynasty');
			$table->unsignedBigInteger('place');
			//pack animals
			$table->integer('karve')->default(0);
			$table->integer('knarr')->default(0);
			$table->integer('dhow')->default(0);
			$table->integer('khelandion')->default(0);
			$table->integer('cog')->default(0);
			$table->integer('hulk')->default(0);
			$table->integer('dromon')->default(0);
			$table->integer('picard')->default(0);
			$table->integer('crayer')->default(0);
			$table->integer('hoy')->default(0);
			$table->integer('ballinger')->default(0);
			$table->integer('caravel')->default(0);
			$table->integer('carrack')->default(0);
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
        Schema::dropIfExists('fleets');
    }
}
