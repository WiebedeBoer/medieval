<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->bigIncrements('product_id');
			//belonging
			$table->unsignedBigInteger('dynasty')->default(0);
			//foodstuff
			$table->integer('meat')->default(0);
			$table->integer('bread')->default(0);
			$table->integer('cake')->default(0);
			$table->integer('cheese')->default(0);
			$table->integer('fish')->default(0);
			//beverages
			$table->integer('beer')->default(0);
			$table->integer('wine')->default(0);
			$table->integer('cider')->default(0);
			$table->integer('mead')->default(0);				
			//household
			$table->integer('furniture')->default(0);
			$table->integer('perfume')->default(0);
			$table->integer('paintings')->default(0);
			$table->integer('clothing')->default(0);
			$table->integer('carpet')->default(0);
			$table->integer('jewelry')->default(0);
			$table->integer('silverwork')->default(0);
			$table->integer('tableware')->default(0);
			//equipment
			$table->integer('books')->default(0);
			$table->integer('armor')->default(0);
			$table->integer('weapons')->default(0);
			//trading
			$table->integer('horse')->default(0);
			$table->integer('camel')->default(0);
			$table->integer('oxen')->default(0);
			//containers
			$table->integer('pottery')->default(0);
			$table->integer('barrel')->default(0);
			$table->integer('basket')->default(0);
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
        Schema::dropIfExists('goods');
    }
}
