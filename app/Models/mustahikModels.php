<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mustahikModels extends Model
{
    use HasFactory;
    protected $table = 'mustahik';
    protected $fillable = ['namamustahik', 'alamatmustahik', 'notelmustahik', 'kategorimustahik', 'statusmustahik'];
}
