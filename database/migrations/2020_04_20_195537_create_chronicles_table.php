<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChroniclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chronicles', function (Blueprint $table) {
            $table->bigIncrements('event_id');
			$table->string('event_title');
			$table->string('event_category')->default('common');
			$table->integer('year')->default(793);
			//fk
			$table->unsignedBigInteger('dynasty')->default(1); //dynasty fk
			$table->unsignedBigInteger('region')->nullable(); //region fk
			$table->unsignedBigInteger('place')->nullable(); //place fk
			$table->unsignedBigInteger('realm')->nullable(); //realm fk
			$table->unsignedBigInteger('belligerent')->nullable(); //war realm fk
			$table->unsignedBigInteger('guild')->nullable(); //guild fk
			//description
			$table->text('event_description')->nullable();
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
        Schema::dropIfExists('chronicles');
    }
}
