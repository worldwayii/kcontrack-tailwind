<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Notifications\Notifiable;

class Employee extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
            'user_id',
            'company_id',
            'first_name',
            'last_name',
            'email',
            'role',
            'staff_number',
            'pay_rate',
            'phone_number',
            'address',
            'zip_code',
    ];

    public static function booted() {
        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }

    public static function search($search){
        return empty($search) ? static::query()
            : static::query()
            ->where('first_name', 'like', "%{$search}%")
            ->orWhere('last_name', 'like', "%{$search}%")
            ->orWhere('email', 'like', "%{$search}%")
            ->orWhere('staff_number', 'like', "%{$search}%")
            ->orWhere('role', 'like', "%{$search}%")
            ->orWhere('phone_number', 'like', "%{$search}%")
            ->orWhereHas('schedulers', function ($query) use ($search) {
                $query->where('role', 'like', "%{$search}%");
            });
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    //Relationships

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function schedulers(){
        return $this->hasMany(Scheduler::class);
    }
}
