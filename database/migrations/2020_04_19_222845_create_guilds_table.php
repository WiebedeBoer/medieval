<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuildsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guilds', function (Blueprint $table) {
            $table->bigIncrements('guild_id');
			//custom
			$table->string('guild_name');			
			$table->string('guild_category')->default('merchant');	
			$table->integer('treasury')->default(0);
			$table->string('banner')->default('none');	
			//belonging
            $table->unsignedBigInteger('place');
            $table->unsignedBigInteger('quarter')->nullable();
			$table->unsignedBigInteger('realm')->default(1);	
			$table->unsignedBigInteger('master')->default(1);
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
        Schema::dropIfExists('guilds');
    }
}
