<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class BackgroundReference extends Model
{

    protected $table = "bg_reference";
    ///team member multiple json
    protected $fillable = ['link_id', 'name', 'mobile', 'reference_company', 'relation'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
