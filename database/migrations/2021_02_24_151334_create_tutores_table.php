<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company');
            $table->string('type_document');
            $table->string('document');
            $table->string('first_name');
            $table->string('last_name1');
            $table->string('last_name2');
            $table->string('country_document');
            $table->string('province');
            $table->string('municipe');
            $table->string('status');
            $table->integer('telephone');
            $table->string('email');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutores');
    }
}
