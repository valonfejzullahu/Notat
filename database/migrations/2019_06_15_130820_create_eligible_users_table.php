<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEligibleUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eligible_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string("first_name", 255);
            $table->string("last_name", 255);
            $table->string("secret_key", 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eligible_users');
    }
}
