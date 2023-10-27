<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "student";
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'email', 'email_verified_at', 'password'

    ];
    use HasFactory;
}
