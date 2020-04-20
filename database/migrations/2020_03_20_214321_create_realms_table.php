<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realms', function (Blueprint $table) {
            $table->bigIncrements('realm_id');
			$table->string('realm_name');
			$table->string('realm_type')->default('kingdom');
			$table->unsignedBigInteger('ruler');
			$table->unsignedBigInteger('dynasty');
			$table->unsignedBigInteger('culture');	
			$table->unsignedBigInteger('capital')->default(497);
			$table->unsignedBigInteger('chancellor')->default(1);
			$table->unsignedBigInteger('chamberlain')->default(1);
			$table->unsignedBigInteger('marshall')->default(1);
			$table->unsignedBigInteger('admiral')->default(1);
			$table->unsignedBigInteger('steward')->default(1);
			
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
        Schema::dropIfExists('realms');
    }
}
