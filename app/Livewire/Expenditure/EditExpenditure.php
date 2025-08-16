<?php

namespace App\Livewire\Expenditure;

use App\Models\Expenditure;
use Livewire\Component;

class EditExpenditure extends Component
{
    public $expenditure;

    public $amount;

    public function mount($expenditure)
    {
        $this->expenditure = Expenditure::findOrFail($expenditure);

        $this->amount = $this->expenditure->amount;
    }

    public function render()
    {
        return view('livewire.expenditure.edit-expenditure');
    }

    public function save()
    {
        $this->validate([
            'amount' => 'required|numeric|min:0',
        ]);

        $this->expenditure->amount = $this->amount;
        $this->expenditure->save();

        session()->flash('success', 'Amount updated successfully!');

        // Redirect back to list or stay on page
        return redirect()->route('expenditures.change_expenditure', ['id' => $this->expenditure->user_id]);
    }
}
