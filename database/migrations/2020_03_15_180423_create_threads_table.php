<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->bigIncrements('thread_id');
			$table->string('subforum');
			$table->string('thread_name');
			$table->unsignedBigInteger('creator')->default(0);
			$table->unsignedBigInteger('region')->default(0);
			$table->unsignedBigInteger('realm')->default(0);
			$table->unsignedBigInteger('belligerent')->default(0);
			$table->integer('sticky')->default(0);
			$table->text('thread_description')->nullable();
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
        Schema::dropIfExists('threads');
    }
}
