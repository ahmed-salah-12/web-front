<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() {
      Schema::create('patients', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->integer('age');
          $table->enum('gender', ['Male', 'Female', 'Other']);
          $table->string('blood_type', 5);
          $table->string('medical_condition');
          $table->date('date_of_admission');
          $table->foreignId('doctor_id')->constrained('doctors');
          $table->string('hospital');
          $table->string('insurance_provider');
          $table->decimal('billing_amount', 10, 2);
          $table->string('room_number');
          $table->enum('admission_type', ['Emergency', 'Elective', 'Urgent']);
          $table->date('discharge_date')->nullable();
          $table->text('medication')->nullable();
          $table->text('test_results')->nullable();
          $table->timestamps();
      });
  }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
