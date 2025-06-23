<?php

namespace App\Http\Controllers;

use App\Models\Team As ModelTeam;
use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Team extends Controller
{

    ///for list page of employee
    public function index(){
        $team=ModelTeam::with(['team_managers','team_leaders'])->get();
        $employee=Employee::all();
        return view("team.team")->with("page","Team List")->with("teams",$team)->with("employees",$employee);
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
        $document = new ModelTeam;
        // if($request->hasFile('file')){
        //     $path = $request->file->store('images/employeedocument/', 'public');
        // }
        $document->team_name=$request->name;
        $document->team_leader=$request->leader;
        $document->team_manager=$request->manager;
        $document->team_member=($request->members);
        $document->save();

        return redirect()->back();
    }


    ///for update page of employee
    public function update(Request $request,ModelTeam $id): RedirectResponse {
        $document=$id;

        $document->team_name=$request->name;
        $document->team_leader=$request->leader;
        $document->team_manager=$request->manager;
        $document->team_member=($request->members);
        $document->save();

        return redirect()->back();
    }


    //////edit employee
    public function edit(ModelTeam $id){
        return $id;
    }


    //////delete employee
    public function delete(ModelTeam $id):RedirectResponse{
        $id->delete();
        return redirect()->back();
    }






}