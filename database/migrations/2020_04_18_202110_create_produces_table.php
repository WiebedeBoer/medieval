<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produces', function (Blueprint $table) {
            $table->bigIncrements('produce_id');
			//belonging
			$table->unsignedBigInteger('dynasty')->default(1);
			//raw resources
			$table->integer('eggs')->default(0);
			$table->integer('wool')->default(0);
			$table->integer('sugarcane')->default(0);
			$table->integer('dates')->default(0);
			$table->integer('fruit')->default(0);
			$table->integer('wax')->default(0);
			$table->integer('honey')->default(0);
			$table->integer('wood')->default(0);
			$table->integer('cedar')->default(0);
			$table->integer('mushrooms')->default(0);
			$table->integer('pelts')->default(0);
			$table->integer('grain')->default(0);
			$table->integer('flax')->default(0);
			$table->integer('lavender')->default(0);
			$table->integer('woad')->default(0);
			$table->integer('madder')->default(0);
			$table->integer('herbs')->default(0);
			$table->integer('scents')->default(0);
			//meat
			$table->integer('poultry')->default(0);
			$table->integer('duck')->default(0);
			$table->integer('mutton')->default(0);
			$table->integer('chevon')->default(0);
			$table->integer('pork')->default(0);
			$table->integer('beef')->default(0);
			$table->integer('rabbit')->default(0);
			$table->integer('venison')->default(0);
			$table->integer('fowl')->default(0);
			//hides
			$table->integer('hides')->default(0);
			//dairy
			$table->integer('dairy')->default(0);
			//fish catch
			$table->integer('catch')->default(0);
			//gruit
			$table->integer('olives')->default(0);
			$table->integer('grapes')->default(0);
			$table->integer('linseed')->default(0);
			$table->integer('elderberry')->default(0);
			$table->integer('hops')->default(0);
			$table->integer('heather')->default(0);				
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
        Schema::dropIfExists('produces');
    }
}
