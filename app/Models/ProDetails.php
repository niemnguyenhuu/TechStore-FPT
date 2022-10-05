<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProDetails extends Model
{
    use HasFactory;
    protected $table = 'pro_details';
    public $timestamps = false;
    // protected $attributes = [
    //     'image'=>''
    // ];
    protected $fillable = [
        'pro_id','hight','width','weight'
    ];

    public function Products()
    {
        return $this->belongsTo('App\Models\Products','pro_id','id');
    }
}
