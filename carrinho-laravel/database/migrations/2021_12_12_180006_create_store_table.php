<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store', function (Blueprint $table) {
            $table->id();
            $table->string('name_fantasy',100);
            $table->string('cnpj',25)->nulllable();
            $table->string('street',100)->nulllable();
            $table->string('number',10)->nulllable();
            $table->string('complement', 30)->nulllable();
            $table->string('city',20)->nulllable();
            $table->string('state', 10)->nulllable();
            $table->string('cellphone', 20)->nulllable();
            $table->string('site',20)->nulllable();
            $table->string('email', 30)->nulllable();
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
        Schema::dropIfExists('store');
    }
}
