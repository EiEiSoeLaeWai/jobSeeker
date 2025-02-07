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
        Schema::create('company_jobs', function (Blueprint $table) {
         
  $table->id('companyjob_id');
  $table->unsignedBigInteger('company_id');
  $table->foreign('company_id')->references('company_id')->on('companies');
  $table->unsignedBigInteger('job_id');
  $table->foreign('job_id')->references('job_id')->on('jobs');
  $table->timestamps();
  $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_jobs');
    }
};
