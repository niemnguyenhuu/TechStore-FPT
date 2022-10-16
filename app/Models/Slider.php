<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $table = 'slider';
    protected $primary = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'image',
        'slide_number',
        'pro_id',
    ];
}
