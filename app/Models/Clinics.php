<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clinics extends Model
{
    use SoftDeletes;
    protected $table="clinics";
    protected $fillable=['clinic_name','clinic_site'];
}
