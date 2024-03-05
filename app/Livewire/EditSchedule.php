<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Scheduler;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Log;

class EditSchedule extends Component
{
    public
    $id,
    $scheduler;

    protected $listeners = ['openDeleteModal'];

    public function openEditModal($id){
        $this->id = $id;
        $this->scheduler = Scheduler::findOrFail($id);
        Log::info(['open-edit-modal-id' => $id]);
    }

    public function update(){
        try{

        $this->dispatch('alert', type: 'success', title: 'Schedule Deleted Successfully', position: 'center', timer: '2000');
        }catch(\Exception $e){
            Log::info(['delete-schedule-error' => $e->getMessage()]);
            $this->dispatch('alert', type: 'error', title: 'Something Went wrong Please Try Again', position: 'center', timer: '2000');
        }
    }

    public function render()
    {
        return view('livewire.edit-schedule');
    }
}
