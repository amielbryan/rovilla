<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;
    protected $table = 'personnel';
    protected $fillable = [
        'name',
        'position',
        'rate',
        'status',
        'dtr_id',
        'site_id',
    ];
}
