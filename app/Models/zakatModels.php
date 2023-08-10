<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zakatModels extends Model
{
    use HasFactory;
    protected $table = 'zakat_masuk';
    protected $fillable = ['idzakat', 'nominal', 'namadonatur', 'noteldonatur', 'emaildonatur', 'kelamin', 'foto', 'status'];
}
