<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /** @use HasFactory<\Database\Factories\ItemFactory> */
    use HasFactory,HasUlids; // This will auto-generate the ULID;

    public function expenditures()
    {
        return $this->hasMany(Expenditure::class, 'item_id');
    }

    public function itemGroup()
    {
        return $this->belongsTo(ItemGroup::class, 'item_group_id');
    }

    protected $fillable = [
        'Name',
        'Description',
        'item_group_id',
    ];
}
