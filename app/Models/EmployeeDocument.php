<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class EmployeeDocument extends Model
{

    protected $table="employee_document";

    protected $fillable = ['emp_id','document_name','file','status','remarks'];
    protected $primaryKey = 'id';

    public $timestamps=false;


}
