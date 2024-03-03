<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PushNotificationLog extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id','title','body','read_status',];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

    public static function booted() {
        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }
}
