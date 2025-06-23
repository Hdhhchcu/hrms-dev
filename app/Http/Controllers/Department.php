<?php

namespace App\Http\Controllers;

use App\Models\Department as ModelsDepartment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Department extends Controller
{

    ///for list page of department
    public function index(){
        $department=ModelsDepartment::with('employee')->get();
        return view("department.departments")->with("page","Department")->with("department",$department);
    }

    
    ///for add page of department
    public function add(Request $request): RedirectResponse {

        $department = new ModelsDepartment;
        $department->department=$request->name;
        $department->status=$request->status;
        $department->save();

        return redirect('department');;
    }


    ///for update page of department
    public function update(Request $request,ModelsDepartment $id): RedirectResponse {
        $department=$id;
        $department->department=$request->name;
        $department->status=$request->status;
        $department->save();

        return redirect('department');;
    }


    //////edit department
    public function edit(ModelsDepartment $id){
        return response()->json($id);
    }


    //////delete department
    public function delete(ModelsDepartment $id):RedirectResponse{
        $id->delete();
        return redirect('department');;
    }






}