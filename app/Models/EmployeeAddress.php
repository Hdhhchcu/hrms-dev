<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class EmployeeAddress extends Model
{

    protected $table="employee_address";

    protected $fillable = ['emp_id','address_type','country','state','city','pincode','address','file'];
    protected $primaryKey = 'id';

    public $timestamps=false;


}
