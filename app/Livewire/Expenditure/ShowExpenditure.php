<?php

namespace App\Livewire\Expenditure;

use App\Models\User;
use Livewire\Component;

class ShowExpenditure extends Component
{
    public function render()
    {
        // dd( User::where('role', 'user')
        //         ->get(),);
        return view('livewire.expenditure.show-expenditure', [

            'User' => User::where('role', 'user')
                ->get(),
        ]);
    }
}
