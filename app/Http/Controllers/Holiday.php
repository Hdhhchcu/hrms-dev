<?php

namespace App\Http\Controllers;

use App\Models\Holiday As ModelHoliday;
use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Holiday extends Controller
{

    ///for list page of employee
    public function index(){
        $holiday=ModelHoliday::all();
        return view("holiday.holiday")->with("page","Holiday List")->with("holidays",$holiday);
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

        $document = new ModelHoliday;
        $document->title=$request->title;
        $document->date=$request->date;
        $document->description=$request->description;
        $document->status=$request->status;
        $document->save();

        return redirect()->back();
    }


    ///for update page of employee
    public function update(Request $request,ModelHoliday $id): RedirectResponse {
        $document=$id;

        $document->title=$request->title;
        $document->date=$request->date;
        $document->description=$request->description;
        $document->status=$request->status;
        $document->save();

        return redirect()->back();
    }


    //////edit employee
    public function edit(ModelHoliday $id){
        return $id;
    }


    //////delete employee
    public function delete(ModelHoliday $id):RedirectResponse{
        $id->delete();
        return redirect()->back();
    }






}