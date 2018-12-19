<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrderDetail extends Model
{
    protected $guarded =[];
    
    public function purchase_order_details()
    {
        return $this->belongsTo('App\PurchaseOrder');
    }
}
