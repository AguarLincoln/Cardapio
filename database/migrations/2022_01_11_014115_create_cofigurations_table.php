<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCofigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cofigurations', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('type')->nullable();
            $table->string('delivery')->nullable();
            $table->double('delivery_fee')->nullable();
            
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
        Schema::dropIfExists('cofigurations');
    }
}
