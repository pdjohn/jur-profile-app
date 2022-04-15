<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            // Company Information
            $table->string('company_name');
            $table->string('role');
            $table->date('job_start_date');
            $table->date('job_end_date')->nullable();
            $table->text('company_description');
            // Organization Information
            $table->string('organization_name');
            $table->string('associated_as');
            $table->date('organization_start_date');
            $table->date('organization_end_date')->nullable();
            $table->text('organization_description');

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
        Schema::dropIfExists('experiences');
    }
}
