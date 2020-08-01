<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Processes extends Component
{
    use WithPagination;
    public $search = '';


    public function render()
    {
        $processes = \App\Process::with(
            'user',
            'contract',
            'contract.customer',
            'cooperation',
            'actiondescription',
            'action'
        )->paginate(5);
        return view('livewire.processes', ['processes' => $processes]);
    }
}
