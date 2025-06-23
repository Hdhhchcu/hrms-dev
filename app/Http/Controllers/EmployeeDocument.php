<?php

namespace App\Http\Controllers;

use App\Models\EmployeeDocument As ModelEmployeeDocuments;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmployeeDocument extends Controller
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

        $path="";
        $document = new ModelEmployeeDocuments;
        if($request->hasFile('file')){
            $path = $request->file->store('images/employeedocument/', 'public');
        }
    
        $document->emp_id=$request->emp_id;
        $document->document_name=$request->name;
        $document->file=$path;
        $document->status=$request->status;
        $document->remarks=$request->remarks;
        $document->save();

        return redirect()->back();
    }


    ///for update page of employee
    public function update(Request $request,ModelEmployeeDocuments $id): RedirectResponse {
        $document=$id;
        if($request->hasFile('file')){
            $path = $request->file->store('images/employeedocument/', 'public');
            $document->file=$path;
        }
    
        $document->emp_id=$request->emp_id;
        $document->document_name=$request->name;
        $document->status=$request->status;
        $document->remarks=$request->remarks;
        $document->save();

        return redirect()->back();
    }


    //////edit employee
    public function edit(ModelEmployeeDocuments $id){
        return $id;
    }


    //////delete employee
    public function delete(ModelsEmpoyee $id):RedirectResponse{
        $id->delete();
        return redirect()->back();
    }






}