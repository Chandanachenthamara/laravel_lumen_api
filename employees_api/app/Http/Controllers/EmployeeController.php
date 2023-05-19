<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Illuminate\Validation\ValidationException;

class EmployeeController extends Controller
{
    public function index()
    {
        //Get All data from Database
        $employees = employee::all();

    return response()->json([
        'success' => true,
        'data' => $employees,
    ]);
    }

    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'phone' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
    
        $employees = new Employee([
            'user_id' => $request->input('user_id'),
            'name' => $request->input('name'),
            'dob' => $request->input('dob'),
            'gender' => $request->input('gender'),
            'phone' => $request->input('phone'),
            'jd_id' => $request->input('jd_id'),
            'qualification' => $request->input('qualification'),
            'marital_status_id' => $request->input('marital_status_id'),
            'religion_id' => $request->input('religion_id'),
            'address' => $request->input('address'),
            'experience' => $request->input('experience'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'employee_id' => $request->input('employee_id'),
            'branch_id' => $request->input('branch_id'),
            'department_id' => $request->input('department_id'),
            'subdepartment_id' => $request->input('subdepartment_id'),
            'designation_id' => $request->input('designation_id'),
            'category_id' => $request->input('category_id'),
            'company_doj' => $request->input('company_doj'),
            'documents' => $request->input('documents'),
            'account_holder_name' => $request->input('account_holder_name'),
            'account_number' => $request->input('account_number'),
            'bank_name' => $request->input('bank_name'),
            'ifsc_code' => $request->input('ifsc_code'),
            'branch_location' => $request->input('branch_location'),
            'aadhaar_no' => $request->input('aadhaar_no'),
            'pan_no' => $request->input('pan_no'),
            'voter_id_no' => $request->input('voter_id_no'),
            'driving_licence_no' => $request->input('driving_licence_no'),
            'uan_no' => $request->input('uan_no'),
            'esi_no' => $request->input('esi_no'),
            'tax_payer_id' => $request->input('tax_payer_id'),
            'salary_type' => $request->input('salary_type'),
            'salary' => $request->input('salary'),
            'is_da' => $request->input('is_da'),
            'is_pf' => $request->input('is_pf'),
            'is_esi' => $request->input('is_esi'),
            'staff_category_id' => $request->input('staff_category_id'),
            'holiday_eligible' => $request->input('holiday_eligible'),
            'is_active' => $request->input('is_active'),
            'cl_bal' => $request->input('cl_bal'),
            'sikl_bal' => $request->input('sikl_bal'),
            'pl_bal' => $request->input('pl_bal'),
        ]);
            
        // $employees = employee::find($employees->id);
        $employees->save();

        return response()->json(['message' => 'Employee created successfully', 'data' => $employees], 201);
        
        // // create new employee
        // $employee = Employee::create($validator);

        // // return response with success message and created employee data
        // return response()->json(['message' => 'Employee created successfully', 'data' => $employee], 201);
    }

    // public function show($id)
    // {
    //     //
    //     $employees = employee::find($id);

    //     if (!$employees) {
    //         return response()->json(['message' => 'Employee not found'], 404);
    //     }
    
    //     return response()->json($employees);
    
       
    // }
    public function show($id)
{
    // Find the employee with the given ID in the database
    $employees = employee::find($id);

    // If the employee doesn't exist, return a 404 response
    if (!$employees) {
        return response()->json(['message' => 'Employee not found'], 404);
    }

    // If the employee exists, return a JSON response with the employee's details
    return response()->json($employees);
}
    

    public function update(Request $request, $id)
    {
        //
        $employees = employee::find($id);

    if (!$employees) {
        return response()->json(['error' => 'Employee not found'], 404);
    }

    $validator = Validator::make($request->all(), [
        'user_id' => 'required|integer',
        'name' => 'required|string|max:191',
        'dob' => 'nullable|date',
        'gender' => 'nullable|string|max:191',
        'phone' => 'nullable|string|max:191',
        // add validation rules for other fields here
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 400);
    }

    $employees->update($request->all());

    return response()->json(['success' => 'Employee updated successfully', 'data' => $employees], 200);
        
        

    }
    public function destroy(Request $request, $id)
    {
        $employees = employee::find($id);
    if (!$employees) {
        return response()->json(['error' => 'Employee not found'], 404);
    }
    $employees->delete();
    return response()->json(['message' => 'Employee deleted successfully'], 200);

    }
    
}
