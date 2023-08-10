<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saranModels extends Model
{
    use HasFactory;
    protected $table = 'saran';
    protected $fillable = ['nama', 'subjek', 'saran'];
}
