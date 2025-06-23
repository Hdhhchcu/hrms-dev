<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Designation extends Model
{

    protected $table="designation";

    protected $fillable = ['designation','department','status'];
    protected $primaryKey = 'id';

    public $timestamps=false;


    public function departments()
    {
        return $this->hasOne(Department::class,"id",'department');
    }

    public function employee()
    {
        return $this->hasMany(Employee::class,"designation",'id');
    }






}
