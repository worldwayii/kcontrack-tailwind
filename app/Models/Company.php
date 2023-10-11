<?php

namespace App\Models;

use App\Enums\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'category',
        'staff_size',
        'first_name',
        'last_name',
        'phone_number',
        'zip_code',
        'user_id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'category' => Category::class,
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($company) {
            $company->uuid = Str::uuid();
        });
    }

    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }
}
