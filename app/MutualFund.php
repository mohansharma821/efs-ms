<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class MutualFund extends Model
{
    protected $fillable=[
        'customer_id',
        'fund_name',
        'percentage_change',
        'week_high',
        'week_low',
        'purchase_price',
        'purchased',

    ];

    public function customer() {
        return $this->belongsTo('App\Customer');
    }
}