<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            // $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('family_status');
            $table->string('name');
            $table->string('sex');
            $table->string('birthplace');
            $table->date('birthdate');
            $table->string('education');
            $table->string('job');
            $table->string('status');
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
        Schema::dropIfExists('families');
    }
}
