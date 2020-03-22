<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titles', function (Blueprint $table) {
            $table->bigIncrements('title_id');
			$table->string('title_name');
			$table->unsignedBigInteger('owner')->nullable();
			$table->unsignedBigInteger('holder')->nullable();
			$table->unsignedBigInteger('region')->nullable();
			$table->unsignedBigInteger('place')->nullable();
			$table->string('religion')->default('Catholic');
			$table->integer('rank')->default(1);
			$table->string('career')->default('gentry');
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
        Schema::dropIfExists('titles');
    }
}
