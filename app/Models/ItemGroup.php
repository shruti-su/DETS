<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemGroup extends Model
{
    /** @use HasFactory<\Database\Factories\ItemGroupFactory> */
    use HasFactory,HasUlids;

    public function items()
    {
        return $this->hasMany(Item::class, 'item_group_id');
    }

    protected $fillable = [
        'Name',
        'Description',
    ];
}
