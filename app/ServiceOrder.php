<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
    
    protected $guarded = [];
   // protected $primaryKey = 'Id';
    
    //
    public function details() {
        return $this->hasMany('App\ServiceOrderDetail','SO_Id', 'Id');
    }

    public function serviceOrderType() {
        return $this->hasOne('App\ServiceOrderType','Type', 'ServiceOrder_Type');
    }
    
    public function getServiceTypeAttribute() {
        if ($r = \App\ServiceOrderType::find($this->ServiceOrder_Type)) {
            return $r->first()['Description'];
        }
    }
}
