<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class EmployeeBank extends Model
{

    protected $table="employee_bank";

    protected $fillable = ['emp_id','bank_name','bank_account_no','bank_ifsc','bank_micr','bank_passbook','bank_cheque','status'];
    protected $primaryKey = 'id';

    public $timestamps=false;


}
