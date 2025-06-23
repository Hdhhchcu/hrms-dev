<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class BackgroundCompany extends Model
{

    protected $table = "bg_company";
    ///team member multiple json
    protected $fillable = ['link_id', 'employee_company', 'employee_id', 'employee_from','employee_to','employee_address','employee_landline','employee_city','employee_state','employee_country','employee_postal_code','employee_designation','reason_for_leave','employee_status','outsourcing_name','outsourcing_address','outsource_landline','supervisor_name','supervisor_designation','supervisor_landline','supervisor_email','hr_name','hr_designation','hr_landline','hr_email'];
    protected $primaryKey = 'id';
    public $timestamps = false;


}