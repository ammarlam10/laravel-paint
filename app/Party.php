<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    protected $fillable = [
        'name', 'area', 'address','salesmen_id', 'balance', 'credit_limit' ,'day' , 'fax','mobile'
    ];


    public function salesmen(){

        return $this->belongsTo('App\Salesmen');
    }
}
