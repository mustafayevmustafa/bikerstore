<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bikers', function (Blueprint $table) {
            $table->id();
            $table->integer('advert_no')->nullable();
            $table->string('brand')->nullable();
            $table->string('series')->nullable();
            $table->string('model')->nullable();
            $table->date('year')->nullable();
            $table->date('listing_date')->nullable();
            $table->string('fuel_id')->nullable();
            $table->integer('km')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('credit')->nullable();
            $table->boolean('barter')->nullable();
            $table->boolean('hit')->nullable();
            $table->string('image')->nullable();
            $table->float('price', 8, 2)->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('vehicle_id')->nullable();
            $table->integer('marka_id')->nullable();
            $table->integer('pattern_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('color_id')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('bikers');
    }
}
