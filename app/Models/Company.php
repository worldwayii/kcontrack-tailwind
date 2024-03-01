<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
    'user_id',
    'name',
    'first_name',
    'last_name',
    'staff_size',
    'description',
    'category',
    'phone_number',
    'address',
    'zip_code',
    'logo'
];

public static function booted() {
    static::creating(function ($model) {
        $model->uuid = Str::uuid();
    });
}

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function employees(){
        return $this->hasMany(Employee::class);
    }
    public function schedulers(){
        return $this->hasMany(Scheduler::class);
    }
}
