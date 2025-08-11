<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    /** @use HasFactory<\Database\Factories\ExpenditureFactory> */
    use HasFactory;

    public function items()
    {
        return $this->belongsToMany(Item::class, 'expenditure_item');
    }
}
