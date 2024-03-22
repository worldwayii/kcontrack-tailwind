<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateScheduleBulk;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateScheduleBulkTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreateScheduleBulk::class)
            ->assertStatus(200);
    }


    /** @test */
    public function create_schedule_bulk_component_mounts_correctly()
    {
        Livewire::test(CreateScheduleBulk::class)
            ->assertSet('employeeArr', [])
            ->assertSet('date', [])
            ->assertSet('role_colour', null)
            ->assertSet('border_colour', null);
    }

    /** @test */
    public function can_update_date_in_create_schedule_bulk_component()
    {
        Livewire::test(CreateScheduleBulk::class)
            ->call('updateDate', ['12/03/2024'])
            ->assertSet('date', ['12/03/2024']);
    }

    /** @test */
    public function can_change_role_color_in_create_schedule_bulk_component()
    {
        Livewire::test(CreateScheduleBulk::class)
            ->dispatch('roleColorChanged', '#FF0000', '#0000FF')
            ->assertSet('role_colour', '#FF0000')
            ->assertSet('border_colour', '#0000FF');
    }


    /** @test */
    public function schedule_creation_fails_when_required_fields_are_missing()
    {
        Livewire::test(CreateScheduleBulk::class)
            ->call('create')
            ->assertHasErrors(['employeeArr', 'start_at', 'end_at', 'role', 'frequency', 'date', 'break', 'shift_note']);
    }

}



