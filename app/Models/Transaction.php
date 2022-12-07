<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'travel_package_id',
        'user_id',
        'additional_visa',
        'transaction_total',
        'transaction_status'
    ];

    protected $hidden = [

    ];

    public function travel_package()
    {
        return $this->belongsTo(TravelPackage::class,'travel_package_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function transaction_detail()
    {
        return $this->hasMany(TransactionDetail::class);
    }
}
