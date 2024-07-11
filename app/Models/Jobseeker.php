<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Jobseeker extends Authenticatable
{
    use HasFactory;
    protected $primaryKey = 'pwdID';
    protected $guard = 'jobseeker';

    protected $fillable = [
        'pwd-firstname',
        'pwd-lastname',
        'pwd-email',
        'pwd-age',
        'pwd-contact',
        'pwd-username',
        'pwd-password',
        'pwd-address',
        'pwd-education',
        'pwd-resume',
        'pwd-disabilities',
        'pwd-profile',
        'usertype'
    ];
}
