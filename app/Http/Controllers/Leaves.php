<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Leaves extends Controller
{

    ///for list page of employee
    public function index(){
        $team=Leave::with('employee')->get();
        $employee=Employee::all();
        return view("leaves.leave")->with("page","Leaves List")->with("teams",$team)->with("employees",$employee);
    }


    // public function view(ModelsEmpoyee $id){
    //     return view("employee.employee-details")->with("page","Employee Details")->with("emp",$id);
    // }

    
    // ///for list-grid page of employee
    // public function grid(){
    //     return view("employee.employees-grid")->with("page","Employee List Grid");
    // }

    
    
    ///for add page of team
    public function add(Request $request): RedirectResponse {

        // $path="";
        $document = new Leave;
        // if($request->hasFile('file')){
        //     $path = $request->file->store('images/employeedocument/', 'public');
        // }

        $document->emp_id=$request->emp_id;
        $document->leave_type=$request->leave_type;
        $document->no_of_days=$request->days;
        $document->from=$request->from;
        $document->to=$request->to;
        $document->manager_id=$request->manager;
        $document->hr_id=1;
        $document->subject=$request->subject;
        $document->message=$request->message;
        $document->remarks=$request->remarks;
        $document->save();

        return redirect()->back();
    }


    ///for update page of employee
    public function update(Request $request,Leave $id): RedirectResponse {
        $document=$id;


        // $document->emp_id=$request->emp_id;
        // $document->leave_type=$request->leave_type;
        $document->no_of_days=$request->days;
        $document->from=$request->from;
        $document->to=$request->to;
        // $document->manager_id=$request->manager;
        $document->hr_id=1;
        // $document->subject=$request->subject;
        // $document->message=$request->message;
        $document->remarks=$request->remarks;
        $document->status=$request->status;
        $document->save();

        return redirect()->back();
    }


    //////edit employee
    public function edit(Leave $id){
        return $id;
    }


    //////delete employee
    public function delete(Leave $id):RedirectResponse{
        $id->delete();
        return redirect()->back();
    }






}