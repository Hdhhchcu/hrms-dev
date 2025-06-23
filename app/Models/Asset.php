<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Asset extends Model
{

    protected $table = "assets";
    protected $fillable = ['name', 'serial_no','assigned_by','emp_id','assignedtime','cost','warranty','image','remarks'];
    protected $primaryKey = 'id';
    public $timestamps = false;


    public function employee(){
        return $this->hasOne(Employee::class,"id","emp_id");
    }

    public function assignee(){
        return $this->hasOne(Employee::class,"id","assigned_by");
    }




}
