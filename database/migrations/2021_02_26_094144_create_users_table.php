<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 12)->unique();
            $table->string('name', 50);
            $table->string('email', 50)->unique();
            $table->string('password', 70);
            $table->string('session_id', 50);
            $table->string('online_status', 15);
            $table->integer('role_id');
            $table->enum('is_active', ['Y','N']);
            $table->timestamps();
            $table->string('created_by', 12);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
