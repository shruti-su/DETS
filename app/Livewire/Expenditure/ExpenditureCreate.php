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
                ->leftJoin('expenditures', 'expenditures.item_id', '=', 'items.id')
                // ->where('expenditures.user_id', auth()->user()->id)
                ->select('items.*', 'expenditures.amount as expenditure_amount')
                ->get(),
        ]);
    }

    // for submit the amount

    public function submitAmount($itemId)
    {
        $this->validate([
            "amounts.$itemId" => 'required|numeric|min:0',
        ]);

        Expenditure::create([
            'item_id' => $itemId,
            'user_id' => auth()->id(),
            'amount' => $this->amounts[$itemId],
        ]);

        session()->flash('message', 'Expenditure submitted successfully!');
        $this->amounts[$itemId] = null; // Clear input after submit
    }
}
