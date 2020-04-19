<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDynastiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dynasties', function (Blueprint $table) {
            $table->bigIncrements('dynasty_id');
			//belonging
			$table->unsignedBigInteger('dynasty_owner');
			$table->unsignedBigInteger('culture')->default(0);
			$table->unsignedBigInteger('ruler')->default(0);
			$table->unsignedBigInteger('heir')->default(0);
			//custom
			$table->string('dynasty_name');
			$table->string('crest_back')->default('black');
			$table->string('crest_emblem')->default('greylight_vh');
			$table->string('crest_shape')->default('shield');
			//home
			$table->unsignedBigInteger('home')->default(0);
			//tutorial
			$table->integer('turorial')->default(0);
			//prestige
			$table->integer('prestige')->default(0);
			$table->integer('prosperity')->default(0);
			//description
			$table->text('dynasty_description')->nullable();
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
        Schema::dropIfExists('dynasties');
    }
}
