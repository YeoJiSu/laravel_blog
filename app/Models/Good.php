<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;
    protected $fillable = [
        'is_glass',
        'name',
        'price',
        'is_custom',
        'is_new',
        'is_best',
        'is_public',
        'like_id',
        'bag_id',
        'buy_id',
        'owner_id',
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
