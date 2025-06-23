<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Holiday extends Model
{

    protected $table = "holiday";
    ///team member multiple json
    protected $fillable = ['title', 'date', 'description', 'status'];
    protected $primaryKey = 'id';
    public $timestamps = false;

}
