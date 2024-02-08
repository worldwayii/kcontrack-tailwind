<?php

namespace App\Livewire;

use App\Models\Scheduler;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Scheduler')]
class ShowScheduler extends Component
{
    public string $scheduler = '';

    public function mount()
    {
        $this->schedulers = Scheduler::all();
    }

    public function render()
    {
        return view('livewire.show-scheduler');
    }
}
