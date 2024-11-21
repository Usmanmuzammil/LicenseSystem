<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('punjab_licenses', function (Blueprint $table) {
            $table->id();
            $table->string('license_no');
            $table->string('name');
            $table->string('son_daughter_wife');
            $table->text('address');
            $table->date('issue_date');
            $table->date('valid_till');
            $table->string('cnic');
            $table->date('dob');
            $table->integer('category_id');
            $table->integer('emergency_contact');
            $table->string('blood_group');
            $table->bigInteger('previous_license_number');
            $table->bigInteger('passport_number');
            $table->string('nationality');
            $table->longText('image');
            $table->tinyInteger('status')->default(1); // 1Active 0 Un Active
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('punjab_licenses');
    }
};
