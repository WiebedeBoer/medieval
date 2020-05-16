<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDungeonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dungeons', function (Blueprint $table) {
            $table->bigIncrements('dungeon_id');
			//belonging
			$table->unsignedBigInteger('dungeon_master')->default(1);
			$table->unsignedBigInteger('place')->default(1);
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
        Schema::dropIfExists('dungeons');
    }
}
