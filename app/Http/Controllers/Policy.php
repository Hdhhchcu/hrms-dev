<?php

namespace App\Http\Controllers;

use App\Models\Policy as ModelPolicy;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Policy extends Controller
{

    ///for list page
    public function index()
    {
        $policy = ModelPolicy::all();
        return view("policy.policy")->with("page", "Policy List")->with("policy", $policy);
    }



    ///for add page
    public function add(Request $request): RedirectResponse
    {

        $document = new ModelPolicy;
        $path="";
        if ($request->has('file')) {
            $path = $request->file->store('images/policy/', 'public');
        }

        $document->file = $path;
        $document->name = $request->title;
        $document->description = $request->description;
        $document->save();

        return redirect()->back();
    }


    ///for update page 
    public function update(Request $request, ModelPolicy $id): RedirectResponse
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
    public function edit(ModelPolicy $id)
    {
        return $id;
    }


    //////delete 
    public function delete(ModelPolicy $id): RedirectResponse
    {
        $id->delete();
        return redirect()->back();
    }
}
