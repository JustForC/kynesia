<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            //$table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('name');
            $table->string('nickname');
            $table->string('sex');
            $table->string('birthplace');
            $table->date('birthdate');
            $table->string('telephone');
            $table->string('id_type');
            $table->string('id_number');
            $table->string('address');
            $table->string('postal_code');
            $table->string('district');
            $table->string('city');
            $table->string('province');
            $table->string('living_address');
            $table->string('living_code');
            $table->string('living_district');
            $table->string('living_city');
            $table->string('living_province');
            $table->string('entrance_type');
            $table->string('test_id');
            $table->string('major1');
            $table->string('major2');
            $table->string('major3');
            $table->string('university1');
            $table->string('university2');
            $table->string('university3');
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
        Schema::dropIfExists('data');
    }
}
