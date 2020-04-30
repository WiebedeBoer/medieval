<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ores', function (Blueprint $table) {
            $table->bigIncrements('produce_id');
			//belonging
			$table->unsignedBigInteger('dynasty')->default(1);
			//resources
			$table->integer('lead')->default(0);
			$table->integer('iron')->default(0);
			$table->integer('tin')->default(0);
			$table->integer('gold')->default(0);	
			$table->integer('silver')->default(0);
			$table->integer('emerald')->default(0);
			$table->integer('ruby')->default(0);
			$table->integer('salt')->default(0);
			$table->integer('clay')->default(0);		
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
        Schema::dropIfExists('ores');
    }
}
