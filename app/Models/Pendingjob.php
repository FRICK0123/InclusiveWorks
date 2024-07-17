<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendingjob extends Model
{
    use HasFactory;
    protected $fillable = [
        'jobID',
        'pwdID',
        'cover_letter',
        'pwd_resume',
    ];
}
