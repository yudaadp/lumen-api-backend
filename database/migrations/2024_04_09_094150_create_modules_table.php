<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('module_name', 30)->unique();
            $table->string('module_desc', 50);
            $table->enum('module_type', ['app','menu']);
            $table->string('module_path', 50);
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
        Schema::dropIfExists('modules');
    }
}
