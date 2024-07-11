<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Employer extends Authenticatable
{
    use HasFactory;
    protected $primaryKey = 'employerID';
    protected $guard = 'employers';

    protected $fillable = [
        'company',
        'company-logo',
        'company-industry',
        'company-address',
        'company-email',
        'company-contact',
        'company-description',
        'company-username',
        'company-password',
        'business-registration-certificate',
        'tax-identification-number',
        'proof-of-physical-address',
        'official-company-letterhead',
        'usertype',
        'verify',
    ];
}
