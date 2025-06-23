<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    protected $table = "event";
    protected $fillable = ['name', 'date', 'start','end','description'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
