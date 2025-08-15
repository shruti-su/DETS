<?php

namespace App\Livewire\ItemGroup;

use App\Models\Item;
use App\Models\ItemGroup;
use Livewire\Component;

class ItemgroupList extends Component
{
    public function render()
    {
        $itemGroups = ItemGroup::withCount('items')->get();

        return view('livewire.item-group.itemgroup-list', [
            'itemGroups' => $itemGroups,
        ]);

    }

    public function deleteItemgroup($id)
    {
        // dd($id);
        try {
            // Item::find($id)->expenditures()->detach();
            ItemGroup::destroy($id);
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
