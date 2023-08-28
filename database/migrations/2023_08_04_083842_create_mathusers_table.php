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
        Schema::create('mathusers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('school_id')->nullable()->unsigned();
            $table->bigInteger('unit_id')->nullable()->unsigned();
            $table->bigInteger('test_id')->nullable()->unsigned();
            $table->string('name',10)->nullable();
            $table->string('email')->nullable();
            $table->string('password',15)->nullable();
            $table->string('main_text')->nullable();
            $table->string('grade')->nullable();
            $table->string('icon')->nullable();
            $table->string('schedule')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mathusers');
    }
};
