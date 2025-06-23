<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Policy extends Model
{

    protected $table = "policy";
    ///team member multiple json
    protected $fillable = ['name', 'description','file'];
    protected $primaryKey = 'id';
    public $timestamps = false;

}
