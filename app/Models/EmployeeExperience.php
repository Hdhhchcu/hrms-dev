<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class EmployeeExperience extends Model
{

    protected $table="employee_experience";

    protected $fillable = ['emp_id','company','designation','start_date','end_date','remarks'];
    protected $primaryKey = 'id';

    public $timestamps=false;


}
