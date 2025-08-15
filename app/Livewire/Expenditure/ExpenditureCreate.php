<?php

namespace App\Livewire\Expenditure;

use App\Models\Expenditure;
use App\Models\Item;
use Livewire\Component;

class ExpenditureCreate extends Component
{
    public $search = '';

    public $amounts = [];

    public function render()
    {
        return view('livewire.expenditure.expenditure-create', [
            'items' => Item::where('items.Name', 'like', '%'.$this->search.'%')
                ->leftJoin('expenditures', function ($join) {
                    $join->on('expenditures.item_id', '=', 'items.id')
                        ->where('expenditures.user_id', auth()->id()); // Only show current user's expenditures
                })
                ->select('items.*', 'expenditures.amount as expenditure_amount')
                ->get(),
        ]);
    }

    public function submitAmount($itemId)
    {
        $this->validate([
            "amounts.$itemId" => 'required|numeric|min:0',
        ]);

        // Check if an expenditure already exists for this user & item
        $existing = Expenditure::where('item_id', $itemId)
            ->where('user_id', auth()->id())
            ->first();

        if ($existing) {
            // Update the existing record
            $existing->update([
                'amount' => $this->amounts[$itemId],
            ]);
        } else {
            // Create a new record
            Expenditure::create([
                'item_id' => $itemId,
                'user_id' => auth()->id(),
                'amount' => $this->amounts[$itemId],
            ]);
        }

        session()->flash('message', 'Expenditure saved successfully!');
        $this->amounts[$itemId] = null; // Clear input after submit
    }
}
