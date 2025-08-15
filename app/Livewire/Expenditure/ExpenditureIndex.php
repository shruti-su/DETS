<?php

namespace App\Livewire\Expenditure;

use App\Models\Item;
use Livewire\Component;

class ExpenditureIndex extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.expenditure.expenditure-index', [
            'items' => Item::where('items.Name', 'like', '%'.$this->search.'%')
                ->join('expenditures', function ($join) {
                    $join->on('expenditures.item_id', '=', 'items.id')
                        ->where('expenditures.user_id', auth()->id()); // Only show current user's expenditures
                })
                ->select('items.*', 'expenditures.amount as expenditure_amount')
                ->get(),
        ]);
    }
}
