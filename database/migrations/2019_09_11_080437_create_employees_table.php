<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('company_id')->unsigned()->nullable();
            $table->bigInteger('department_id')->unsigned()->nullable();
            $table->bigInteger('current_salary_id')->unsigned()->nullable();
            $table->foreign('company_id')
                ->references('id')
                ->on('companies')
                ->onDelete('set null');
            $table->foreign('department_id')
                ->references('id')
                ->on('departments')
                ->onDelete('set null');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->date('birth_date');
            $table->integer('age')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('avatar')->default('default.jpg')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
