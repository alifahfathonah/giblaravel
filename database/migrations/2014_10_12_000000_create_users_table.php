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
            $table->string('fullname')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['ADMIN', 'MEMBER'])->default('MEMBER');
            $table->enum('gender', ['L', 'P'])->nullable();
            $table->string('photo')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('marital_status', ['Kawin', 'Belum Kawin', 'Cerai Hidup', 'Cerai Mati'])->nullable();
            $table->enum('blood_type', ['A', 'B', 'AB', 'O'])->nullable();
            $table->foreignId('province_id')->nullable();
            $table->foreignId('regency_id')->nullable();
            $table->text('address')->nullable();
            $table->foreignId('graduate_id')->nullable();
            $table->foreignId('major_id')->nullable();
            $table->foreignId('job_id')->nullable();
            $table->string('hobby')->nullable();
            $table->foreignId('specialization_id')->nullable();
            $table->foreignId('division_id')->nullable();
            $table->enum('member_status', ['Calon', 'Junior', 'Senior'])->default('Calon');

            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
