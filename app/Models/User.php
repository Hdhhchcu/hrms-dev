<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;


class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;


    protected $table = "users";
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */



    // public function hasPermission($module, $action)
    // {
    //     // Example logic
    //     // $role = $this->role()->first();

    //     // return DB::table('permissions')
    //     //     ->where('role_id', $role->id)
    //     //     ->where('module', $module)
    //     //     ->where($action, true) // assuming columns like create/read/edit/delete = boolean
    //     //     ->exists();
    // }


    // public function hasPermission($moduleName, $actionSlug)
    // {
    //     return $this->role()->whereHas('permissions', function ($query) use ($moduleName, $actionSlug) {
    //         $query->where('slug', $actionSlug)
    //             ->whereHas('module', function ($q) use ($moduleName) {
    //                 $q->where('name', $moduleName);
    //             });
    //     })->exists();
    // }




    // public function hasPermission($role, $moduleName, $actionSlug)
    // {
    //     return $this->role()
    //         ->whereIn('user_roles.id', function($query) use ($role, $moduleName, $actionSlug) {
    //             $query->select('user_permission_role.role_id')
    //                 ->from('user_permission_role')
    //                 ->join('user_permission', 'user_permission_role.permission_id', '=', 'user_permission.id')
    //                 ->join('user_modules', 'user_permission.module_id', '=', 'user_modules.id')
    //                 ->where('user_roles.id',"user_permission_role.role_id")
    //                 ->where('user_roles.name', $role)
    //                 ->where('user_permission.slug', $actionSlug)
    //                 ->where('user_modules.name', $moduleName);
    //         })->exists();
    // }


    public function check($moduleName="Team",$actionSlug="read"){
        return $this->hasOne(RoleUser::class,'user_id','id');
        // return $this->role()
        // ->whereHas('permission', function ($q) use ($moduleName, $actionSlug) {
        //     $q->where('slug', $actionSlug)
        //       ->whereHas('module', function ($mq) use ($moduleName) {
        //           $mq->where('name', $moduleName);
        //       });
        // });
        
    }



    public function hasPermission($role, $moduleName, $actionSlug)
    {
        // return DB::table('user_role_user')
        //     ->where('user_role_user.user_id', $this->id)
        //     ->join('user_permission_role', 'user_role_user.role_id', '=', 'user_permission_role.role_id')
        //     ->join('user_permission', 'user_permission_role.permission_id', '=', 'user_permission.id')
        //     ->join('user_modules', 'user_permission.module_id', '=', 'user_modules.id')
        //     ->where('user_modules.name', $moduleName)
        //     ->where('user_permission.slug', $actionSlug)
        //     ->exists();
    }





    public function role()
    {
        ////doing
        return $this->hasManyThrough(Role::class, RoleUser::class,'role_id','id');

        ///working
        //  return $this->belongsToMany(Role::class, 'user_role_user', 'user_id', 'role_id');
    }







    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
