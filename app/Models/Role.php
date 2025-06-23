<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Role extends Model
{

    protected $table = "user_roles";
    ///team member multiple json
    protected $fillable = ['name'];
    protected $primaryKey = 'id';
    public $timestamps = false;



    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }




    // public function users()
    // {
    //     return $this->belongsTo(User::class, 'role_id', 'id');
    // }
}
