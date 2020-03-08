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
			$table->unsignedBigInteger('dynasty_owner');
			$table->unsignedBigInteger('culture')->default(0);
			$table->string('dynasty_name');
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
