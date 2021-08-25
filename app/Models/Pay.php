<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    use HasFactory;
    protected $table = 'pay';
    protected $fillable = [
        'price',
        'approval_num',
        'order_num',
        'order_name',
        'payment_date',
        'card_type',
        'installment_period',
        'user_id',
        'buy_id',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
