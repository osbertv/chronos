<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceOrderDetail extends Model
{
    protected $guarded =[];
    
    public function purchase_order()
    {
        return $this->belongsTo('App\PurchaseOrder');
    }
}
