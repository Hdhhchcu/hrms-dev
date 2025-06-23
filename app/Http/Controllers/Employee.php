<?php

namespace App\Http\Controllers;

use App\Models\Employee As ModelsEmpoyee;
use App\Models\Department;
use App\Models\Designation;
use App\Models\EmployeeAddress;
use App\Models\EmployeeBank;
use App\Models\EmployeeDocument;
use App\Models\EmployeeEducation;
use App\Models\EmployeeExperience;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Employee extends Controller
{

    ///for list page of employee
    public function index(){
        $department=Department::all();
        $designation=Designation::all();
        $employee=ModelsEmpoyee::all();
        return view("employee.employees")->with("page","Employee List")->with("departments",$department)->with("designation",$designation)->with("employees",$employee);
    }


    public function view(ModelsEmpoyee $id){
        $banks=EmployeeBank::where("emp_id",$id->id)->get();
        $documents=EmployeeDocument::where("emp_id",$id->id)->get();
        $education=EmployeeEducation::where("emp_id",$id->id)->get();
        $address=EmployeeAddress::where("emp_id",$id->id)->get();
        $experience=EmployeeExperience::where("emp_id",$id->id)->get();
        return view("employee.employee-details")->with("page","Employee Details")->with("emp",$id)->with("banks",$banks)->with("documents",$documents)->with("address",$address)->with('education',$education)->with("experience",$experience);
    }

    
    ///for list-grid page of employee
    public function grid(){
        return view("employee.employees-grid")->with("page","Employee List Grid");
    }

    
    
    ///for add page of employee
    public function add(Request $request): RedirectResponse {

        $path="";
        $employee = new ModelsEmpoyee;
        if($request->hasFile('emp_image')){
            $path = $request->emp_image->store('images/employee/', 'public');
        }
        $employee->image=$path;
        $employee->fname=$request->fname;
        $employee->lname=$request->lname;
        $employee->emp_id=$request->emp_id;
        $employee->emp_joining=$request->emp_joining;
        $employee->confirm_date=$request->cnfdate;
        $employee->emp_leave_credit=$request->emp_leave_credit;
        $employee->onboarding_status=$request->onboarding_status;
        $employee->onboarding_close=$request->onboarding_close;
        $employee->emp_dob=$request->emp_dob;
        $employee->emp_office_email=$request->emp_office_email;
        $employee->emp_office_mobile=$request->emp_office_mobile;

        $employee->email=$request->email;
        $employee->mobile=$request->mobile;
        $employee->company=$request->company;
        $employee->emp_nation=$request->nationality;
        $employee->emp_work_days=$request->work_days;
        $employee->gender=$request->gender;

        $employee->marital_status=$request->marital_status;
        $employee->religion=$request->religion;
   
        $employee->department=$request->department;
        $employee->designation=$request->designation;
        $employee->emp_report=$request->emp_report;

        $employee->category=$request->category;
        $employee->employment_type=$request->employment_type;
        $employee->resource_type=$request->resources_type;



        $employee->status=$request->status;
        $employee->about=$request->about;


        $employee->save();

        return redirect('employee');;
    }


    ///for update page of employee
    public function update(Request $request,ModelsEmpoyee $id): RedirectResponse {
        $employee=$id;
        if($request->hasFile('emp_image')){
            $path = $request->emp_image->store('images/employee/', 'public');
            $employee->image=$path;
        }
       
        $employee->fname=$request->fname;
        $employee->lname=$request->lname;
        $employee->emp_id=$request->emp_id;
        $employee->emp_joining=$request->emp_joining;
        $employee->confirm_date=$request->cnfdate;
        $employee->emp_leave_credit=$request->emp_leave_credit;
        $employee->onboarding_status=$request->onboarding_status;
        $employee->onboarding_close=$request->onboarding_close;
        $employee->emp_dob=$request->emp_dob;
        $employee->emp_office_email=$request->emp_office_email;
        $employee->emp_office_mobile=$request->emp_office_mobile;

        $employee->email=$request->email;
        $employee->mobile=$request->mobile;
        $employee->company=$request->company;
        $employee->emp_nation=$request->nationality;
        $employee->emp_work_days=$request->work_days;
        $employee->gender=$request->gender;

        $employee->marital_status=$request->marital_status;
        $employee->religion=$request->religion;
   
        $employee->department=$request->department;
        $employee->designation=$request->designation;
        $employee->emp_report=$request->emp_report;

        $employee->category=$request->category;
        $employee->employment_type=$request->employment_type;
        $employee->resource_type=$request->resources_type;



        $employee->status=$request->status;
        $employee->about=$request->about;



        $employee->save();

        return redirect('employee');;
    }


    //////edit employee
    public function edit(ModelsEmpoyee $id){
        return $id;
    }


    //////delete employee
    public function delete(ModelsEmpoyee $id):RedirectResponse{
        $id->delete();
        return redirect('employee');;
    }






}