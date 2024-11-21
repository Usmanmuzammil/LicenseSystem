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
        Schema::create('licenses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_or_husband');
            $table->string('license_no');
            $table->string('category');
            $table->date('dob');
            $table->date('issue_date');
            $table->date('valid_upto');
            $table->string('cnic');
            $table->text('address');
            $table->string('blood_group');
            $table->string('identification_mark');
            $table->string('old_dl');
            $table->tinyInteger('status')->default(0);
            $table->text('remarks')->nullable();
            $table->text('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licenses');
    }
};
