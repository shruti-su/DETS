<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    /** @use HasFactory<\Database\Factories\ExpenditureFactory> */
    use HasFactory,HasUlids;

    protected $fillable = [
        'item_id',
        'user_id',
        'amount',
    ];

    public function items()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
