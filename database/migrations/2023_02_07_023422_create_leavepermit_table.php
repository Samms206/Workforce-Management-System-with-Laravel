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
        Schema::create('leavepermits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id')->required();
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('restrict');
            $table->string('description')->require();
            $table->date('date_start')->require();
            $table->date('date_end')->require();
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
        Schema::dropIfExists('leavepermits');
    }
};
