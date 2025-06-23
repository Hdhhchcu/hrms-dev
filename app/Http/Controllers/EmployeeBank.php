<?php

namespace App\Http\Controllers;

use App\Models\EmployeeBank As ModelEmployeeBank;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmployeeBank extends Controller
{

    ///for list page of employee
    public function index(){
        // $department=Department::all();
        // $designation=Designation::all();
        // $employee=ModelsEmpoyee::all();
        // return view("employee.employees")->with("page","Employee List")->with("departments",$department)->with("designation",$designation)->with("employees",$employee);
    }


    // public function view(ModelsEmpoyee $id){
    //     return view("employee.employee-details")->with("page","Employee Details")->with("emp",$id);
    // }

    
    // ///for list-grid page of employee
    // public function grid(){
    //     return view("employee.employees-grid")->with("page","Employee List Grid");
    // }

    
    
    ///for add page of employee
    public function add(Request $request): RedirectResponse {

        $passbook=$cheque="";
        $bank = new ModelEmployeeBank;
        if($request->hasFile('passbook')){
            $passbook = $request->passbook->store('images/employeebank/', 'public');
        }
        if($request->hasFile('cheque')){
            $cheque = $request->cheque->store('images/employeebank/', 'public');
        }
        $bank->emp_id=$request->emp_id;
        $bank->bank_passbook=$passbook;
        $bank->bank_cheque=$cheque;
        $bank->bank_name=$request->bank_name;
        $bank->branch=$request->branch;
        $bank->bank_account_no=$request->bankaccount;
        $bank->bank_ifsc=$request->ifsc;
        $bank->bank_micr=$request->micr;
        $bank->status=$request->status;


        $bank->save();

        return redirect()->back();
    }


    ///for update page of employee
    public function update(Request $request,ModelEmployeeBank $id): RedirectResponse {
        $bank=$id;
        if($request->hasFile('passbook')){
            $passbook = $request->passbook->store('images/employeebank/', 'public');
            $bank->bank_passbook=$passbook;
        }
        if($request->hasFile('cheque')){
            $cheque = $request->cheque->store('images/employeebank/', 'public');
            $bank->bank_cheque=$cheque;
        }
        $bank->emp_id=$request->emp_id;
        $bank->bank_name=$request->bank_name;
        $bank->branch=$request->branch;
        $bank->bank_account_no=$request->bankaccount;
        $bank->bank_ifsc=$request->ifsc;
        $bank->bank_micr=$request->micr;
        $bank->status=$request->status;

        $bank->save();

        return redirect()->back();
    }


    //////edit employee
    public function edit(ModelEmployeeBank $id){
        return $id;
    }


    //////delete employee
    public function delete(ModelsEmpoyee $id):RedirectResponse{
        $id->delete();
        return redirect('employee');;
    }






}