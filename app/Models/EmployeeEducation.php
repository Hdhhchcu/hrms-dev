<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class EmployeeEducation extends Model
{

    protected $table="employee_education";

    protected $fillable = ['emp_id','institute_name','course','start_date','end_date'];
    protected $primaryKey = 'id';

    public $timestamps=false;


}
