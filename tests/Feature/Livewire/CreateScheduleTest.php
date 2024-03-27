<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateSchedule;
use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Validator;
use Livewire\Livewire;
use Tests\TestCase;

class CreateScheduleTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreateSchedule::class)
            ->assertStatus(200);
    }

    public function testValidationRules()
    {
        $employee = Employee::factory()->create();
        $uuid = Employee::find($employee->id)->uuid;

        $component = new CreateSchedule();
        $component->employee = $uuid;
        $component->start_at = '08:00';
        $component->end_at = '17:00';
        $component->role = 'chef';
        $component->role_colour = 'rgb(255, 0, 0)';
        $component->border_colour = 'rgb(0, 255, 0)';
        $component->date = ['23/03/2024'];
        $component->pay_rate = 'monthly';
        $component->break = '20 mins';
        $component->shift_note = 'Morning shift';
        $component->frequency = 'daily';

        $validator = Validator::make([
            'employee' => $component->employee,
            'start_at' => $component->start_at,
            'end_at' => $component->end_at,
            'role' => $component->role,
            'role_colour' => $component->role_colour,
            'border_colour' => $component->border_colour,
            'date' => $component->date,
            'pay_rate' => $component->pay_rate,
            'break' => $component->break,
            'shift_note' => $component->shift_note,
            'frequency' => $component->frequency,
        ], $component->myRules());


        $this->assertTrue($validator->passes());

        // Test missing required fields
        $validator = Validator::make([], $component->myRules());
        $this->assertFalse($validator->passes());
        $this->assertArrayHasKey('employee', $validator->errors()->toArray());
        $this->assertArrayHasKey('start_at', $validator->errors()->toArray());

        // Test invalid input data
        $component->role = '';
        $component->break = '';
        $component->shift_note = '';

        $validator = Validator::make([
            'employee' => $component->employee,
            'start_at' => $component->start_at,
            'end_at' => $component->end_at,
            'role' => $component->role,
            'role_colour' => $component->role_colour,
            'border_colour' => $component->border_colour,
            'date' => $component->date,
            'pay_rate' => $component->pay_rate,
            'break' => $component->break,
            'shift_note' => $component->shift_note,
            'frequency' => $component->frequency,
        ], $component->myRules());

        $this->assertFalse($validator->passes());
        $this->assertArrayHasKey('role', $validator->errors()->toArray());
        $this->assertArrayHasKey('break', $validator->errors()->toArray());
        $this->assertArrayHasKey('shift_note', $validator->errors()->toArray());

    }

    public function testRgbToHex()
    {
        $component = new CreateSchedule();

        $this->assertEquals('#ff0000', $component->rgbToHex('rgb(255, 0, 0)'));
        $this->assertEquals('#00ff00', $component->rgbToHex('rgb(0, 255, 0)'));
        $this->assertEquals('#0000ff', $component->rgbToHex('rgb(0, 0, 255)'));
        $this->assertEquals('#b37bb3', $component->rgbToHex('rgb(179, 123, 179)'));
    }
}


