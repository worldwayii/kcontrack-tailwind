<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Employee;

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
        $schedules = self::all();

        $totalTime = 0;

        foreach ($schedules as $schedule) {

            $startAt = Carbon::parse($schedule->start_at);
            $endAt = Carbon::parse($schedule->end_at);

            $duration = $endAt->diffInMinutes($startAt);

            $totalTime += $duration;
        }

        $totalHours = floor($totalTime / 60);
        $totalMinutes = $totalTime % 60;

        return $totalTime;
    }

    public function getUnpublishedSchedulersForEmployee(Employee $employee){

        $unpublishedSchedulers = $this->where('employee_id', $employee->id)
            ->where('published', false)
            ->get();

        $daysOfWeek = [];

        foreach ($unpublishedSchedulers as $scheduler) {

            $startAt = Carbon::parse($scheduler->start_at);

            $dayIdentifier = $startAt->format('D') . $startAt->format('Ymd');
            $daysOfWeek[$dayIdentifier] = $startAt->format('D');
            $startAt->addDay();
        }

        $daysOfWeek = array_values($daysOfWeek);

        $order = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat','Sun'];

        usort($daysOfWeek, function ($a, $b) use ($order) {
        return array_search($a, $order) - array_search($b, $order);
        });

        $shortendDaysOfWeek = array_map(function($day) {
        return substr($day, 0, 1);
        }, $daysOfWeek);

        $result = implode(' ', $shortendDaysOfWeek);

        return $result;
    }


}
