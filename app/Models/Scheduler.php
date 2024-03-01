<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Scheduler extends Model
{
    use HasFactory;

    protected $fillable = [
            'user_id',
            'company_id',
            'employee_id',
            'start_at',
            'end_at',
            'role',
            'pay_rate',
            'break',
            'shift_note',
            'role_colour',
            'frequency',
            'accepted',
            'published',
    ];

    public static function booted() {
        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }

    protected $casts = [
        'start_at' => 'datetime',
        'end_at' => 'datetime',
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public static function getTotalScheduledTime()
    {
        $schedules = self::all(); // Retrieve all records (consider pagination if there are many records)

        $totalTime = 0; // Initialize total time counter

        foreach ($schedules as $schedule) {
            // Convert start_at and end_at to Carbon instances for easy date manipulation
            $startAt = Carbon::parse($schedule->start_at);
            $endAt = Carbon::parse($schedule->end_at);

            // Calculate the difference in minutes between start_at and end_at
            $duration = $endAt->diffInMinutes($startAt);

            // Add the duration to total time
            $totalTime += $duration;
        }

        // Convert total minutes to hours and minutes for better readability
        $totalHours = floor($totalTime / 60);
        $totalMinutes = $totalTime % 60;

        return $totalTime;
    }
}
