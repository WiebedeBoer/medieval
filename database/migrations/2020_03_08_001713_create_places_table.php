<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->bigIncrements('place_id');
			$table->unsignedBigInteger('region');
			$table->unsignedBigInteger('lord_paramount')->default(0);
			$table->unsignedBigInteger('tenant_in_chief')->default(0);
			$table->unsignedBigInteger('mesne_lord')->default(0);
			$table->unsignedBigInteger('tenant_paravail')->default(0);
			$table->unsignedBigInteger('allodial_owner')->default(0);
			$table->unsignedBigInteger('tenure_owner')->default(0);				
			$table->string('place_name');
			$table->string('place_type');
			$table->integer('population')->default(0); //default = 0
			$table->string('fortification');
			$table->string('commerce');
			$table->string('feudal');
			$table->string('church');
			$table->string('civil');
			$table->string('monastic');
			$table->string('factory');
			$table->string('arms');
			$table->string('education');
			$table->text('place_description')->nullable();
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
        Schema::dropIfExists('places');
    }
}
