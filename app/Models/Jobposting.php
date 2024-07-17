<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobposting extends Model
{
    use HasFactory;
    protected $primaryKey = 'jobID';
    protected $keyType = 'string';
    protected $fillable = [
        'jobID',
        'company-logo',
        'company-name',
        'company-industry',
        'company-address',
        'job-title',
        'job-description',
        'salary-range-start',
        'salary-range-end',
        'salary-frequency',
        'employment-type',
        'education-level',
        'experience-level',
        'skills',
        'disablities'
    ];
}
