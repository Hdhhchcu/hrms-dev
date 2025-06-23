<?php

namespace App\Http\Controllers;

use App\Models\Event As ModelEvent;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Event extends Controller
{

    ///for list page
    public function index(){
        $holiday=ModelEvent::all();
        return view("calender.calendar")->with("page","Holiday List")->with("holidays",$holiday);
    }

    public function all(){
        $events=ModelEvent::all();
        return $events;
    }


    
    ///for add page 
    public function add(Request $request): RedirectResponse {

        $document = new ModelEvent;

        $document->name=$request->name;
        $document->date=$request->date;
        $document->start=$request->start;
        $document->end=$request->end;
        $document->description=$request->description;
        $document->save();

        return redirect()->back();
    }


    ///for update 
    public function update(Request $request,ModelEvent $id): RedirectResponse {
        $document=$id;

        $document->title=$request->title;
        $document->date=$request->date;
        $document->description=$request->description;
        $document->status=$request->status;
        $document->save();

        return redirect()->back();
    }


    //////edit 
    public function edit(ModelEvent $id){
        return $id;
    }


    //////delete 
    public function delete(ModelEvent $id):RedirectResponse{
        $id->delete();
        return redirect()->back();
    }






}