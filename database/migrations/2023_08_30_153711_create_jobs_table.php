<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_title', 100);
            $table->date('fecha');
            $table->string('job_type', 100);
            $table->string('company_name', 100);
            $table->boolean('contingency');
            $table->text('location_full')->nullable();
            $table->string('url', 255); 
            $table->text('perks')->nullable();
            $table->string('seniority', 100);
            $table->string('seniority_slug', 100);
            $table->string('functional_area', 100);
            $table->string('functional_area_slug', 100);
            $table->softDeletes();
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
        Schema::dropIfExists('jobs');
    }
}
