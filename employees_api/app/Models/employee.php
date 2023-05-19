<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = [
        'user_id', 'name', 'dob', 'gender', 'phone', 'jd_id', 'qualification', 'marital_status_id', 'religion_id',
        'address', 'experience', 'email', 'password', 'employee_id', 'branch_id', 'department_id', 'subdepartment_id',
        'designation_id', 'category_id', 'company_doj', 'documents', 'account_holder_name', 'account_number',
        'bank_name', 'ifsc_code', 'branch_location', 'aadhaar_no', 'pan_no', 'voter_id_no', 'driving_licence_no',
        'uan_no', 'esi_no', 'tax_payer_id', 'salary_type', 'salary', 'is_da', 'is_pf', 'is_esi', 'staff_category_id',
        'holiday_eligible', 'is_active', 'cl_bal', 'sikl_bal', 'pl_bal', 'status', 'notice_prd', 'regn_date',
        'created_by', 'created_at', 'updated_at',
    ];
}
