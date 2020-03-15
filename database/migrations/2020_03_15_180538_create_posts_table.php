<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('post_id');
			$table->string('post_title')->nullable();
			$table->unsignedBigInteger('creator')->default(0);
			$table->unsignedBigInteger('editor')->default(0);
			$table->unsignedBigInteger('thread')->default(0);			
			$table->integer('sticky')->default(0);
			$table->text('message')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
