<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Team extends Model
{

    protected $table = "team";
    ///team member multiple json
    protected $fillable = ['team_name', 'team_member', 'team_leader', 'team_manager'];
    protected $primaryKey = 'id';
    public $timestamps = false;



    public function team_managers()
    {
        return $this->hasOne(Employee::class, 'id', 'team_manager');
    }


    public function team_leaders()
    {
        return $this->hasOne(Employee::class, 'id', 'team_leader');
    }


    public function getTeamMembersAttribute()
{
    return Employee::whereIn('id', $this->team_member)->get();
}

    public function team_members()
    {
        // return $this->hasOne(Employee::class,"id","team_member");
        
        // return Employee::whereIn('id', [1,2,3])->get();

        // return $this->belongsToMany(Employee::class,"team",'team_member');
    }


    protected $casts = [
        'team_member' => 'array',
    ];
}
