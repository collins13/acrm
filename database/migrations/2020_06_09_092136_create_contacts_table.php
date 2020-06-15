<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name1', 255)->nallable();
            $table->char('name2', 255)->nallable();
            $table->char('name3', 255)->nallable();
            $table->char('phone1', 255)->nallable();
            $table->char('phone2', 255)->nallable();
            $table->char('phone3', 255)->nallable();
            $table->char('email1', 255)->nallable();
            $table->char('email2', 255)->nallable();
            $table->char('email3', 255)->nallable();
            // $table->bigIncrements('id');
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
        Schema::dropIfExists('contacts');
    }
}
