<?php

namespace App\Livewire\ItemGroup;

use App\Models\Item;
use Livewire\Component;

class AddItem extends Component
{
    public $search = '';

    public $group; // bind the  data autometically because of public variable

    protected $rules = [
        'itemName' => 'required|string|max:255',
    ];

    public function addtoGroup(Item $item)
    {
        $item->item_group_id = $this->group->id;

        $item->save();

    }

    public function removefromGroup(Item $item)
    {
        $item->item_group_id = null;

        $item->save();
    }

    public function render()
    {
        return view('livewire.item-group.add-item', [
            'items' => Item::where('items.Name', 'like', '%'.$this->search.'%')
                ->where(function ($q) {
                    $q->whereNull('item_group_id')
                        ->orWhere('item_group_id', $this->group->id);
                })
                ->limit(10)
                ->get(),
        ]);
    }
}
