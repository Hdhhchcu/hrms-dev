<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class BackgroundVerification extends Model
{

    protected $table = "bg_verification";
    ///team member multiple json
    protected $fillable = ['name', 'surname', 'father_name', 'present_address','residance_status','landline','mobile','city','state','landmark','postcode','police_station_name','stay_from','stay_to','dob','aadhar','sign_name','sign_image'];
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function company(){
        return $this->hasMany(BackgroundCompany::class,'link_id',"id");
    }

    public function education(){
        return "person_reference";
    }

    public function reference(){
        return "company_reference";
    }



//     public function team_managers()
//     {
//         return $this->hasOne(Employee::class, 'id', 'team_manager');
//     }


//     public function team_leaders()
//     {
//         return $this->hasOne(Employee::class, 'id', 'team_leader');
//     }


//     public function getTeamMembersAttribute()
// {
//     return Employee::whereIn('id', $this->team_member)->get();
// }

//     public function team_members()
//     {
//         // return $this->hasOne(Employee::class,"id","team_member");
        
//         // return Employee::whereIn('id', [1,2,3])->get();

//         // return $this->belongsToMany(Employee::class,"team",'team_member');
//     }



    // protected $casts = [
    //     'team_member' => 'array',
    // ];
}
