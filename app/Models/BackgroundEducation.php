<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class BackgroundEducation extends Model
{
    protected $table = "bg_education";
    ///team member multiple json
    protected $fillable = ['link_id', 'name', 'address', 'stay_from', 'stay_to', 'status'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
