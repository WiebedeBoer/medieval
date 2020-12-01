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
			$table->unsignedBigInteger('lord_paramount')->nullable();
			$table->unsignedBigInteger('tenant_in_chief')->nullable();
			$table->unsignedBigInteger('mesne_lord')->nullable();
			$table->unsignedBigInteger('tenant_paravail')->nullable();
			$table->unsignedBigInteger('allodial_owner')->nullable();
			$table->unsignedBigInteger('tenure_owner')->nullable();	
			$table->unsignedBigInteger('realm')->nullable();			
			$table->string('place_name');
			$table->string('place_type');
			$table->integer('population')->default(1); //default = 1
			//fortification and court
			$table->string('fortification');
			//business commerce
			$table->string('commerce');
			//titles
			$table->string('feudal');
			$table->string('church');
			$table->string('civil');
			$table->string('monastic');
			//businesses
			$table->string('factory');
			$table->string('arms');
			$table->string('education');
			//stats
			$table->integer('agr')->default(1);
			$table->integer('com')->default(1);
			$table->integer('def')->default(1);
			$table->integer('jus')->default(900);
			$table->integer('mor')->default(99);
			$table->integer('tra')->default(50);
			$table->integer('sol')->default(1); //default = 1
			//description
			$table->text('place_description')->nullable();
			//timestamp
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
