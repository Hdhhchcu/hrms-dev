<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class RoleUser extends Model
{

    protected $table = "user_role_user";
    ///team member multiple json
    protected $fillable = ['user_id',"role_id"];
    protected $primaryKey = 'user_id';
    public $timestamps = false;




    // public function users()
    // {
    //     return $this->belongsTo(User::class, 'role_id', 'id');
    // }
}
