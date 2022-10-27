<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProVariants extends Model
{
    use HasFactory;
    protected $table = 'pro_variants';
    public $timestamps = false;
    protected $attributes = [
        'color'=>'',
        'memory'=>'',
        'image'=>'',
        'price'=>''
    ];
    protected $fillable = [
        'pro_id','color','memory','image','price','hight','width','depth','weight'
    ];
    public function Products()
    {
        return $this->belongsTo('App\Models\Products','pro_id','id');
    }
}
