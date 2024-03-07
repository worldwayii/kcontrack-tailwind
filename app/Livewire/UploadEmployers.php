<?php

namespace App\Livewire;

use App\Events\EmployeeCreated;
use App\Models\Company;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Exists;
use League\Csv\Reader;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;
use League\Csv\Exception;

class UploadEmployers extends Component
{
    use WithFileUploads;

    #[Rule('required|file|mimes:csv')]
    public $file;

    #[Rule( 'required', new Exists('companies', 'id'))]
    public $company_id;

    public function mount()
    {
//        dd('mounted');
    }

    public function saveFile()
    {
        $this->authorize('store',Company::class);
        dd($this->file);

        $this->validate();
        dd('$validated');

        try {
            $csv = Reader::createFromPath($this->file->getRealPath())->setHeaderOffset(0);

            foreach ($csv->getRecords() as $record) {
                if (!isset($record['email'])) {
                    continue;
                }

                $user = $this->getEmployer($record);

                event(new EmployeeCreated($user));
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }


        // Emit a Livewire event to notify the front-end
        $this->emit('handleFileUpload');
    }

    public function render()
    {
        return view('livewire.upload-employers');
    }
}
