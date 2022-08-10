<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstCallReport extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_first_call_report';
    protected $dates = ['date_first_call_report', 'date_death_first_call_report'];
    protected $guarded = [];

}
