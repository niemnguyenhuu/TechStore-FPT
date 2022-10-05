<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primary = 'id';
    protected $dates = 'date';
    public $timestamps = false;
    protected $attributes = [
        'status'=>0,
        'note'=>''
    ];
    protected $fillable = [
        'user_id ','phone','address','date','total','status','note'
    ];

    public function OrderDetails()
    {
        return $this->hasMany('App\Models\OrderDetails','order_id', 'id');
    }
    public function Products()
    {
        return $this->hasMany('App\Models\Products','pro_id', 'id');
    }
    public function Users()
    {
        return $this->belongsTo('App\Models\Users','user_id','id');
    }
}
