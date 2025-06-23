<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Employee extends Model
{

    protected $table="employee";

    protected $fillable = ['designation','department','status'];
    protected $primaryKey = 'id';

    public $timestamps=false;


    public function departments():HasOne
    {
        return $this->hasOne(Department::class,"id",'department');
    }
    
    public function designations():HasOne
    {
        return $this->hasOne(Designation::class,"id",'designation');
    }

    public function report():HasOne
    {
        return $this->hasOne(Employee::class,"id",'emp_report');
    }




}
