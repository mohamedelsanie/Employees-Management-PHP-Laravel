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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('category')->nullable();
            $table->string('persional_num')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->string('job_pos')->nullable();
            $table->string('passport_num')->nullable();
            $table->string('nationality')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('passposrt_releasedate')->nullable();
            $table->string('passport_expirationdate')->nullable();
            $table->enum('pasport_type', ['normal', 'private', 'diplomatic'])->default('normal');
            $table->string('personal_picture')->nullable();
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->string('mobile_num')->nullable();
            $table->string('phone_num')->nullable();
            $table->string('sos_phone_num')->nullable();
            $table->string('kinship')->nullable();
            $table->string('email')->nullable();
            $table->string('apartment')->nullable();
            $table->string('building')->nullable();
            $table->string('streat')->nullable();
            $table->string('complex')->nullable();
            $table->string('region')->nullable();
            $table->enum('work_type', ['military', 'civilian'])->default('civilian');
            $table->string('work_place')->nullable();
            $table->string('job_number')->nullable();
            $table->string('job_title')->nullable();
            $table->string('work_section')->nullable();
            $table->string('line_manger_name')->nullable();
            $table->enum('tshirt_size', ['xs','s','m','l','xl','2xl','3xl','4xl','5xl'])->default('xl');
            $table->string('shoe_size')->nullable();
            $table->enum('mandate_type', ['mandate', 'not'])->default('not');
            $table->string('mandate_startdate')->nullable();
            $table->string('mandate_enddate')->nullable();
            $table->string('passport_file')->nullable();
            $table->string('smart_id_file')->nullable();
            $table->string('salary_print_file')->nullable();
            $table->string('bank_report_file')->nullable();
            $table->string('cv_file')->nullable();
            $table->string('other_file')->nullable();
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
        Schema::dropIfExists('employees');
    }
};
