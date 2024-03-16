<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Calendar;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;
use Carbon\Carbon;
use App\Models\Employee;

class CalendarTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Calendar::class)
            ->assertStatus(200);
    }

     /** @test */
     public function it_mounts_with_default_values()
     {
         Livewire::test(Calendar::class)
             ->assertSet('dragAndDropEnabled', true)
             ->assertSet('dayClickEnabled', true)
             ->assertSet('eventClickEnabled', true)
             ->assertSet('showModifyEventButtons', false)
             ->assertSet('showCreateModal', false)
             ->assertSet('search', null)
             ->assertSet('filter', '');

     }

     /** @test */
     public function it_loads_employees()
     {
         $employee = Employee::factory()->create();
         Livewire::test(Calendar::class)
             ->set('search', $employee->first_name)
             ->assertSee($employee->first_name);
     }

}
