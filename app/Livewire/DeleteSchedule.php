<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Scheduler;
use Illuminate\Support\Facades\Log;

class DeleteSchedule extends Component
{
    public $id;

    protected $listeners = ['openDeleteModal'];

    public function openDeleteModal($id){
        $this->id = $id;
        Log::info(['open-delete-modal-id' => $id]);
    }

    public function delete(){
        try{
        Scheduler::where('id', $this->id)->delete();
        $this->dispatch('alert', type: 'success', title: 'Schedule Deleted Successfully', position: 'center', timer: '2000');
        }catch(\Exception $e){
            Log::info(['delete-schedule-error' => $e->getMessage()]);
            $this->dispatch('alert', type: 'error', title: 'Something Went wrong Please Try Again', position: 'center', timer: '2000');
        }
    }

    public function render()
    {
        return view('livewire.delete-schedule');
    }
}
