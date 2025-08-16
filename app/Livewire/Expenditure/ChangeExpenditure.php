<?php

namespace App\Livewire\Expenditure;

use App\Models\Expenditure;
use App\Models\Item;
use App\Models\User;
use Livewire\Component;

class ChangeExpenditure extends Component
{
    public $search = '';

    public $user;

    public function render()
    {
        return view('livewire.expenditure.change-expenditure', [
            'items' => Item::where('items.Name', 'like', '%'.$this->search.'%')
                ->join('expenditures', function ($join) {
                    $join->on('expenditures.item_id', '=', 'items.id')
                        ->where('expenditures.user_id', $this->user->id); // Only show current user's expenditures
                })
                ->select('items.*', 'expenditures.amount as expenditure_amount')
                ->get(),
        ]);
    }

    public function deleteAmount($id)
    {

        try {
            // Item::find($id)->expenditures()->detach();
            Expenditure::where('item_id', $id)
                ->where('user_id', $this->user->id)
                ->delete();

        } catch (\Exception $e) {
            dd($e);
        }
    }
}
