<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Attendance extends Model
{

    protected $table = "attendance";
    protected $fillable = ['emp_id', 'check_in', 'check_out', 'ip', 'location', 'user-agent'];
    protected $primaryKey = 'id';
    public $timestamps = false;


    public function employee()
    {
        return $this->hasOne(Employee::class, "id", "emp_id");
    }


    public function attendance($id)
    {

        // $today = self::select('attendance.*')
        //     ->selectRaw('(SELECT time FROM attendance a2 WHERE a2.emp_id = attendance.emp_id AND a2.date = attendance.date AND a2.check = "in" ORDER BY time DESC LIMIT 1) as first_check_in')
        //     ->selectRaw('(SELECT time FROM attendance a3 WHERE a3.emp_id = attendance.emp_id AND a3.date = attendance.date AND a3.check = "out" ORDER BY time DESC LIMIT 1) as last_check_out')->where("emp_id", $id)
        //     ->groupBy('date')
        //     ->get();

        // foreach($today as $t){
        // $checkInTime = $t->first_check_in;  // Example check-in time
        // $checkOutTime = $t->last_check_out; // Example check-out time

        // // Define a standard working time and lunch break (if applicable)
        // $standardWorkHours = 540; // 9 hours in minutes
        // $breakTime = 60; // Assume 1 hour break time (in minutes)

        // // Convert the check-in and check-out times to Carbon instances
        // $checkIn = Carbon::parse($checkInTime);
        // $checkOut = Carbon::parse($checkOutTime);

        // // Calculate total work time (in minutes)
        // $totalWorkMinutes = $checkIn->diffInMinutes($checkOut);

        // // Late time calculation (if check-in is after 11:00 AM)
        // $standardStartTime = Carbon::createFromTime(11, 0); // 11:00 AM is the standard start time for on-time arrival
        // $lateTimeMinutes = $checkIn->gt($standardStartTime) ? $checkIn->diffInMinutes($standardStartTime) : 0;

        // // Overtime calculation (if total work time exceeds 9 hours)
        // $overtimeMinutes = max(0, $totalWorkMinutes - $standardWorkHours);

        // // Production time calculation (work time - break time)
        // $productionTimeMinutes = max(0, $totalWorkMinutes - $breakTime);

        // // Convert minutes to hours and minutes for better display
        // $workHours = floor($totalWorkMinutes / 60) . 'h ' . ($totalWorkMinutes % 60) . 'm';
        // $lateTime = floor($lateTimeMinutes / 60) . 'h ' . ($lateTimeMinutes % 60) . 'm';
        // $overtime = floor($overtimeMinutes / 60) . 'h ' . ($overtimeMinutes % 60) . 'm';
        // $productionTime = floor($productionTimeMinutes / 60) . 'h ' . ($productionTimeMinutes % 60) . 'm';

        //     if(($totalWorkMinutes/60)<=4){
        //         $breakTime="0h 0m";
        //     }else{ $breakTime.="min"; }


        // $newAttendance[]=(object)array(
        // 'emp_id' => $id,
        // 'time' => $t->time,
        // 'date' => $t->date,
        // 'first_check_in'=>$t->first_check_in,
        // 'last_check_out'=>$t->last_check_out,
        // 'work_hours' => $workHours,
        // 'late_time' => $lateTime,
        // 'overtime' => $overtime,
        // 'break_time' => $breakTime,
        // 'production_hours' => $productionTime,
        // );

        // }


        // return (object)$newAttendance;



        $today = Attendance::select('attendance.*')
            ->selectRaw('(SELECT time FROM attendance a2 WHERE a2.emp_id = attendance.emp_id AND a2.date = attendance.date AND a2.check = "in" ORDER BY time DESC LIMIT 1) as first_check_in')
            ->selectRaw('(SELECT time FROM attendance a3 WHERE a3.emp_id = attendance.emp_id AND a3.date = attendance.date AND a3.check = "out" ORDER BY time DESC LIMIT 1) as last_check_out')
            ->where("emp_id", $id)->groupBy('date')->get();

        foreach ($today as $t) {
            $checkInTime = $t->first_check_in;  // Example check-in time
            $checkOutTime = $t->last_check_out; // Example check-out time

            // Define a standard working time and lunch break (if applicable)
            $standardWorkHours = 540; // 9 hours in minutes
            $breakTime = 60; // Assume 1 hour break time (in minutes)

            // Convert the check-in and check-out times to Carbon instances
            $checkIn = Carbon::parse($checkInTime);
            $checkOut = Carbon::parse($checkOutTime);

            // Calculate total work time (in minutes)
            $totalWorkMinutes = $checkIn->diffInMinutes($checkOut);

            // Late time calculation (if check-in is after 11:00 AM)
            $standardStartTime = Carbon::createFromTime(11, 0); // 11:00 AM is the standard start time for on-time arrival
            $lateTimeMinutes = abs($checkIn->gt($standardStartTime) ? $checkIn->diffInMinutes($standardStartTime) : 0);

            // Overtime calculation (if total work time exceeds 9 hours)
            $overtimeMinutes = max(0, $totalWorkMinutes - $standardWorkHours);

            // Production time calculation (work time - break time)
            $productionTimeMinutes = max(0, $totalWorkMinutes);

            // Calculate actual break time (the time between a check-out and the next check-in)
            $actualBreakTime = 0;
            $checkInOutRecords = Attendance::where('emp_id', $id)
                ->where('date', $t->date)
                ->get();

            $lastCheckOutTime = null;

            // Loop through the check-in/check-out records to calculate the break time between them

            foreach ($checkInOutRecords as $record) {
                if ($record->check == 'in' && $lastCheckOutTime) {
                    $checkInTime = Carbon::parse($record->time);
                    $breakTimeMinutes = $lastCheckOutTime->diffInMinutes($checkInTime);
                    $actualBreakTime += $breakTimeMinutes;
                }

                if ($record->check == 'out') {
                    $lastCheckOutTime = Carbon::parse($record->time);
                }
            }
            // echo "<br>".abs($actualBreakTime);
            if ((abs($actualBreakTime)) > 1) {
                $totalWorkMinutes = $totalWorkMinutes - abs($actualBreakTime);
                // Production time calculation (work time - break time)
                $productionTimeMinutes = max(0, $totalWorkMinutes)+60;
            }




            // Convert minutes to hours and minutes for better display
            $workHours = floor($totalWorkMinutes / 60) . 'h ' . ($totalWorkMinutes % 60) . 'm';
            $lateTime = floor($lateTimeMinutes / 60) . 'h ' . ($lateTimeMinutes % 60) . 'm';
            $overtime = floor($overtimeMinutes / 60) . 'h ' . ($overtimeMinutes % 60) . 'm';
            $productionTime = floor($productionTimeMinutes / 60) . 'h ' . ($productionTimeMinutes % 60) . 'm';
            $actualBreakTimeFormatted = floor($actualBreakTime / 60) . 'h ' . ($actualBreakTime % 60) . 'm';

            // Check if the work day is less than 4 hours, then consider no break
            if ((($actualBreakTimeFormatted) == "0h 0m")) {
                $actualBreakTimeFormatted = "-";
            }
            if (($overtime) == "0h 0m") {
                $overtime = "-";
            }
            if ($lateTime == "0h 0m") {
                $lateTime = "-";
            }
            // if (($lateTimeMinutes / 60) ==0) {
            //     $lateTime = "-";
            // }

            $newAttendance[] = (object) array(
                'emp_id' => $id,
                'time' => $t->time,
                'date' => $t->date,
                'first_check_in' => $t->first_check_in,
                'last_check_out' => $t->last_check_out,
                'work_minutes' => $totalWorkMinutes,
                'work_hours' => $workHours,
                'late_time' => $lateTime,
                'overtime' => $overtime,
                'break_time' => $actualBreakTimeFormatted,
                'production_hours' => $productionTime,
            );
        }

        return (object) $newAttendance;
    }










    
}
