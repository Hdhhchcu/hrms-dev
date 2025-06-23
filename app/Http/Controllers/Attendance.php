<?php

namespace App\Http\Controllers;

use App\Models\Attendance as ModelAttendance;
use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Attendance extends Controller
{

    public function chat(){
        // $message=
        return view('chat.chat')->with('messages',$message);
    }



    ///for list page
    public function index()
    {
        $id=3;
        $today =new ModelAttendance;
        $assets = ModelAttendance::all();
        $employee = Employee::all();
        // $today = ModelAttendance::where('emp_id', $id)->where('time', '<', date('Y-m-d h:i:s'))->get();
        // $today = ModelAttendance::where('emp_id', $id)->groupBy('date')->get();
        // $today = ModelAttendance::attendance(4);
        
        // $today->attendance(4);
        // $today = ModelAttendance::select('attendance.*')
        // ->selectRaw('(SELECT time FROM attendance a2 WHERE a2.emp_id = attendance.emp_id AND a2.date = attendance.date AND a2.check = "in" ORDER BY time ASC LIMIT 1) as first_check_in')
        // ->selectRaw('(SELECT time FROM attendance a3 WHERE a3.emp_id = attendance.emp_id AND a3.date = attendance.date AND a3.check = "out" ORDER BY time DESC LIMIT 1) as last_check_out')->where("emp_id",$id)
        // ->groupBy('date')
        // ->get();
        // dd($today->attendance($id));
        $today=        $today->attendance($id);
        $check_in = ModelAttendance::where('emp_id', $id)->where('date', date('Y-m-d'))->oldest()->first();
        $check_out = ModelAttendance::where('emp_id', $id)->where('date',date('Y-m-d'))->latest()->first();
        return view("attendance.attendance-employee")->with("page", "Attendance List")->with("asset", $assets)->with('employee', $employee)->with("check_in",$check_in)->with("check_out",$check_out)->with("attendance",$today)->with("emp_id",$id);
    }



    ///for add page
    public function add(Request $request): RedirectResponse
    {

        $check = ModelAttendance::where('emp_id', $request->emp_id)->where('time', '<', date('Y-m-d h:i:s'))->latest()->first();

        $document = new ModelAttendance;
            $document->emp_id = $request->emp_id;
            $document->time = date('Y-m-d h:i:s a');
            if($check){
            if($check->check=="in")
            $checkStatus = "out";

            if($check->check=="out")
            $checkStatus = "in";
            }else{
                $checkStatus="in";
            }



            $document->check = $checkStatus;
            $document->ip = $request->ip();
            $document->location = "location";
            $document->user_agent = $request->userAgent();

            $document->save();

        return redirect()->back();
    }


    ///for update page 
    public function allatt()
    {
        $id=3;
        $attendance = ModelAttendance::where('emp_id', $id)->groupBy("date")->get();
       
        $all=array();$i=0;
        foreach($attendance  as $a){
            $checkInTime = ModelAttendance::where('emp_id', $id)->where('date',$a->date)->oldest()->first()->time;
            $checkOutTime = ModelAttendance::where('emp_id', $id)->where('date',$a->date)->latest()->first()->time;
            $checkIn = Carbon::parse($checkInTime);
            $checkOut = Carbon::parse($checkOutTime);

            // Calculate total work time (in minutes)
            $totalWorkMinutes = $checkIn->diffInMinutes($checkOut);
            $atten=ModelAttendance::where('emp_id', $id)->where('date',$a->date)->get();
            
            $lastCheckOutTime = null;
            $actualBreakTime=0;
            foreach ($atten as $record) {
                if ($record->check == 'in' && $lastCheckOutTime) {
                    $checkInTime = Carbon::parse($record->time);
                    $breakTimeMinutes = $lastCheckOutTime->diffInMinutes($checkInTime);
                    $actualBreakTime += $breakTimeMinutes;
                }

                if ($record->check == 'out') {
                    $lastCheckOutTime = Carbon::parse($record->time);
                }
            }

            if ((abs($actualBreakTime)) > 1) {
                $totalWorkMinutes = $totalWorkMinutes - abs($actualBreakTime);
            }
            if($totalWorkMinutes>480){                
            $all[$i]=array(
                "title"=>"Present",
                "className"=> 'badge badge-success-transparent',
                "backgroundColor"=> '#D2F5E1',
                "textColor"=> "#111827",
                "start"=> $a->date,
                "startDate"=> $a->date,
                "description"=> $atten,
                "total"=> $totalWorkMinutes,
                "break"=> abs($actualBreakTime),
                );
            }elseif($totalWorkMinutes>240 || $totalWorkMinutes <480){
                $all[$i]=array(
                    "title"=>"Half Day",
                    "className"=> 'badge badge-success-transparent',
                    "backgroundColor"=> 'yellow',
                    "textColor"=> "black",
                    "start"=> $a->date,
                    "startDate"=> $a->date,
                    "description"=> $atten,
                    "total"=> $totalWorkMinutes,
                    "break"=> abs($actualBreakTime),
                    );
            }else{
                $all[$i]=array(
                    "title"=>"Absent",
                    "className"=> 'badge badge-success-transparent',
                    "backgroundColor"=> 'red',
                    "textColor"=> "white",
                    "start"=> $a->date,
                    "startDate"=> $a->date,
                    "description"=> $atten,
                    "total"=> $totalWorkMinutes,
                    "break"=> abs($actualBreakTime),
                    );
            }

            $i++;
        }

        return $all;
    }


    //////edit 
    public function edit(ModelAttendance $id)
    {
        return $id;
    }



    ///////calendar 
    public function calendar()
    {
        return view("attendance.attendance-calendar")->with('page',"Attendance Calendar");
    }


    //////delete 
    public function delete(ModelAttendance $id): RedirectResponse
    {
        $id->delete();
        return redirect()->back();
    }
}
