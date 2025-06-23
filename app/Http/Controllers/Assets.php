<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Assets extends Controller
{

    ///for list page
    public function index()
    {
        $assets = Asset::all();
        $employee = Employee::all();
        return view("assets.asset")->with("page", "Assets List")->with("asset", $assets)->with('employee',$employee);
    }



    ///for add page
    public function add(Request $request): RedirectResponse
    {

        $document = new Asset;
        $path="";
        if ($request->has('file')) {
            $path = $request->file->store('images/assets/', 'public');
        }

        $document->image = $path;

        $document->name = $request->name;
        $document->serial_no = $request->serial_no;
        $document->assigned_by = $request->assiged;
        $document->emp_id = $request->emp_id;
        $document->assignedtime = $request->assignedtime;
        $document->cost = $request->cost;
        $document->warranty = $request->warranty;
        $document->remarks = $request->remarks;
        $document->save();

        return redirect()->back();
    }


    ///for update page 
    public function update(Request $request, Asset $id): RedirectResponse
    {
        $document = $id;

        if ($request->has('file')) {
            $path = $request->file->store('images/policy/', 'public');
            $document->file = $path;
        }

        $document->name = $request->title;
        $document->description = $request->description;
        $document->save();

        return redirect()->back();
    }


    //////edit 
    public function edit(Asset $id)
    {
        return $id;
    }


    //////delete 
    public function delete(Asset $id): RedirectResponse
    {
        $id->delete();
        return redirect()->back();
    }
}
