<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->bigIncrements('region_id');
			$table->string('region_name');
			$table->unsignedBigInteger('culture');					
			$table->unsignedBigInteger('lord_paramount')->nullable();
			$table->unsignedBigInteger('tenant_in_chief')->nullable();
			$table->unsignedBigInteger('mesne_lord')->nullable();
			$table->unsignedBigInteger('tenant_paravail')->nullable();
			$table->unsignedBigInteger('allodial_owner')->nullable();
			$table->unsignedBigInteger('tenure_owner')->nullable();					
			$table->string('rank');
			$table->string('climate');
			$table->string('herb');
			$table->string('style');
			$table->string('ride');
			$table->string('cycle');
			$table->string('goat')->default('none');
			$table->string('sheep')->default('none');
			$table->string('cattle')->default('none');
			$table->integer('region_x')->default(0); //default = 0
            $table->integer('region_y')->default(0); //default = 0
			$table->text('region_description')->nullable();
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
        Schema::dropIfExists('regions');
    }
}
