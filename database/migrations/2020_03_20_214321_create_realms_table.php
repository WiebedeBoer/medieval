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
			$table->unsignedBigInteger('owner');
			$table->unsignedBigInteger('dynasty');
			$table->unsignedBigInteger('culture');		
			$table->unsignedBigInteger('chancellor')->default(0);
			$table->unsignedBigInteger('chamberlain')->default(0);
			$table->unsignedBigInteger('marshall')->default(0);
			$table->unsignedBigInteger('admiral')->default(0);
			$table->unsignedBigInteger('steward')->default(0);
			$table->unsignedBigInteger('capital')->default(0);
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
