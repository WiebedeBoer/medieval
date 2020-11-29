<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRulersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rulers', function (Blueprint $table) {
            $table->bigIncrements('cabinet_id');
            //belonging
            $table->unsignedBigInteger('realm');
            $table->unsignedBigInteger('ruler');
            $table->unsignedBigInteger('heir')->default(1);
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
        Schema::dropIfExists('rulers');
    }
}
