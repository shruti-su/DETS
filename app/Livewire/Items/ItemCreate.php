<?php

namespace App\Livewire\Items;

use App\Models\Item;
use App\Models\ItemGroup;
use Livewire\Component;

class ItemCreate extends Component
{
    public $name;

    public $description;

    public $item_group_id;

    public function save()
    {

        $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'item_group_id' => 'nullable|exists:item_groups,id',
        ]);

        Item::create([
            'Name' => $this->name,
            'Description' => $this->description,
            'item_group_id' => $this->item_group_id,
        ]);

        session()->flash('message', 'Item created successfully!');

        return redirect()->route('items.index'); // adjust as needed
    }

    public function render()
    {
        return view('livewire.items.item-create', [
            'itemGroups' => ItemGroup::get(),
        ]);
    }
}
