<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Leave extends Model
{

    protected $table = "leaves";
    protected $fillable = ['emp_id', 'leave_type', 'from','to','no_of_days', 'remarks' ,'manager_id','hr_id'];
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function employee()
    {
        return $this->hasOne(Employee::class, 'id', 'emp_id');
    }

    public function manager()
    {
        return $this->hasOne(Employee::class, 'id', 'manager_id');
    }


}
