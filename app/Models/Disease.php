<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'nama', 'kualifikasi', 'tingkat_bahaya', 'pengertian', 'penyebab', 'obat', 'hospital_id'
    ];
}
