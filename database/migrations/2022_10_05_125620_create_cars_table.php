<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('reg_number', 64);
            $table->string('brand', 64);
            $table->string('model', 64);
            $table->foreignId('owner_id')->constrained('owners');
        });
    }
//Cars - id, reg_number, brand, model, owner_id (unisgned big int)
//Owners - id, name, surname
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
