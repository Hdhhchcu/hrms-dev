<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Department extends Model
{

    protected $table="department";

    protected $fillable = ['department','status'];
    protected $primaryKey = 'id';
    public $timestamps=false;

    public function employee()
    {
        return $this->hasMany(Employee::class,"department",'id');
    }


}
