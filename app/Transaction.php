<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function trans_detail(){
        return $this->hasMany(TransactionDetail::class);
    }
}
