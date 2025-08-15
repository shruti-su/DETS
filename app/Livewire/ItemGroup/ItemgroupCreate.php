<?php

namespace App\Livewire\ItemGroup;

use App\Models\ItemGroup;
use Livewire\Component;

class ItemgroupCreate extends Component
{
    public $name;

    public $description;

    public function save()
    {

        // Validation logic can be added here
        $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        // Logic to save the item group can be added here
        if (ItemGroup::where('name', $this->name)->exists()) {
            session()->flash('error', 'Item Group with this name already exists.');

            return;
        }
        // Create the item group
        ItemGroup::create([
            'Name' => $this->name,
            'Description' => $this->description,
        ]);

        session()->flash('message', 'Item Group created successfully!');

        return redirect()->route('itemgroups.index');
    }

    public function render()
    {
        return view('livewire.item-group.itemgroup-create');
    }
}
