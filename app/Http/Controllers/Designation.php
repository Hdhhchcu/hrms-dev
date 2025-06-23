<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation as ModelsDesignation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Designation extends Controller
{

    ///for list page of employee
    public function index(){
        $designation=ModelsDesignation::with(['departments','employee'])->get();
        $department=Department::all();
        return view("designation.designations")->with("page","Dashboard")->with("designation",$designation)->with("departments",$department);
    }

    
    ///for add page of designation
    public function add(Request $request): RedirectResponse {

        $designation = new ModelsDesignation;
        $designation->designation=$request->name;
        $designation->department=$request->department;
        $designation->status=$request->status;
        $designation->save();

        return redirect('designation');;
    }


    ///for update page of designation
    public function update(Request $request,ModelsDesignation $id): RedirectResponse {
        $designation=$id;
        $designation->designation=$request->name;
        $designation->department=$request->department;
        $designation->status=$request->status;
        $designation->save();

        return redirect('designation');;
    }


    //////edit designation
    public function edit(ModelsDesignation $id){
        return $id;
    }


    //////delete designation
    public function delete(ModelsDesignation $id):RedirectResponse{
        $id->delete();
        return redirect('designation');;
    }







}