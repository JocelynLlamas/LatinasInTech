<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'fecha',
        'job_type',
        'company_name',
        'contingency',
        'location_full',
        'url',
        'perks',
        'seniority',
        'seniority_slug',
        'functional_area',
        'functional_area_slug',
    ];
}
