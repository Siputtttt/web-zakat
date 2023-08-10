<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kontakModels extends Model
{
    use HasFactory;
    protected $table = 'saran';
    protected $fillable = ['nama', 'subjek', 'saran'];
}
