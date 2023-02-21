<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidCase extends Model
{
    use HasFactory;

    protected $table = 'cases';

    protected $fillable = ['report_date', 'cases'];

//    protected $dates = ['report_date'];
    protected $hidden = ['created_at', 'updated_at'];
}
