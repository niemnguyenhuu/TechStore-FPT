<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discounts_code extends Model
{
    use HasFactory;
    protected $table = 'discount_code';
    protected $primary = 'id';
    public $timestamps = true;
    protected $attributes = [
        
    ];
    protected $fillable = [
        'code','dicount','quantity','start_time','end_time','pro_id','type'
    ];
    public function Products()
    {
        return $this->belongsTo('App\Models\Products','pro_id','id');
    }
}
