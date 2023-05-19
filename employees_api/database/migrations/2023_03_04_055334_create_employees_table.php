<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('user_id');
            $table->string('name', 191);
            $table->date('dob')->nullable();
            $table->string('gender', 191)->nullable();
            $table->string('phone', 191)->nullable();
            $table->integer('jd_id')->nullable();
            $table->string('qualification', 100)->nullable();
            $table->integer('marital_status_id')->nullable();
            $table->integer('religion_id')->nullable();
            $table->text('address');
            $table->text('experience');
            $table->string('email', 191)->nullable();
            $table->string('password', 191)->nullable();
            $table->string('employee_id', 191);
            $table->integer('branch_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('subdepartment_id')->nullable();
            $table->integer('designation_id')->nullable();
            $table->integer('category_id');
            $table->string('company_doj', 191)->nullable();
            $table->string('documents', 191)->nullable();
            $table->string('account_holder_name', 191)->nullable();
            $table->string('account_number', 191)->nullable();
            $table->string('bank_name', 191)->nullable();
            $table->string('ifsc_code', 191)->nullable();
            $table->string('branch_location', 191)->nullable();
            $table->string('aadhaar_no', 50)->nullable();
            $table->string('pan_no', 50)->nullable();
            $table->string('voter_id_no', 50)->nullable();
            $table->string('driving_licence_no', 50)->nullable();
            $table->string('uan_no', 50)->nullable();
            $table->string('esi_no', 50)->nullable();
            $table->string('tax_payer_id', 191)->nullable();
            $table->integer('salary_type')->nullable();
            $table->float('salary')->default(0);
            $table->string('is_da', 191)->nullable();
            $table->string('is_pf', 191)->nullable();
            $table->string('is_esi', 191)->nullable();
            $table->integer('staff_category_id')->nullable();
            $table->string('holiday_eligible', 191)->nullable();
            $table->integer('is_active')->default(1);
            $table->integer('cl_bal')->default(0);
            $table->integer('sikl_bal')->default(0);
            $table->integer('pl_bal')->default(0);
            $table->string('status', 191)->default('Active');
            $table->integer('notice_prd')->nullable();
            $table->date('regn_date')->nullable();
            $table->integer('created_by');
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
