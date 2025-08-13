<?php

namespace App\Livewire\Items;

use App\Models\Item;
use Livewire\Component;

class ItemList extends Component
{
    // public function mount()
    // {
    //     dd(Item::get());
    // }
    public $search = '';

    public function render()
    {
        return view('livewire.items.item-list', [
            'items' => Item::where('items.Name', 'like', '%'.$this->search.'%')
                ->leftJoin('item_groups', 'item_groups.id', '=', 'items.item_group_id')
                ->select('items.*', 'item_groups.name as item_group_name')
                ->get(),
        ]);
    }
}
