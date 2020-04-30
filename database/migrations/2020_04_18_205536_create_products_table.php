<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
			//belonging
			$table->unsignedBigInteger('dynasty')->default(1);
			//ingredients
			$table->integer('flour')->default(0);
			$table->integer('butter')->default(0);
			$table->integer('oil')->default(0);
			$table->integer('sugar')->default(0);
			//products
			$table->integer('soap')->default(0);
			$table->integer('leather')->default(0);
			$table->integer('tools')->default(0);
			$table->integer('dyes')->default(0);
			$table->integer('candles')->default(0);
			$table->integer('yarn')->default(0);
			$table->integer('dyed_yarn')->default(0);
			$table->integer('ropes')->default(0);
			$table->integer('cloth')->default(0);
			$table->integer('fur')->default(0);
			$table->integer('paper')->default(0);
			$table->integer('parchment')->default(0);
			//metals
			$table->integer('lead')->default(0);
			$table->integer('iron')->default(0);
			$table->integer('tin')->default(0);
			$table->integer('gold')->default(0);	
			$table->integer('silver')->default(0);	
			//imports
			$table->integer('spices')->default(0);
			$table->integer('silk')->default(0);
			$table->integer('ivory')->default(0);
			$table->integer('incense')->default(0);
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
        Schema::dropIfExists('products');
    }
}
