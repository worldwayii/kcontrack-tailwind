<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmployeePolicy
{
    use HandlesAuthorization;

    public function index(User $user): bool
    {
        return $user->hasRole('company');
    }

    public function read(User $user): bool
    {
        return $user->hasRole('company');
    }

    public function store(User $user): bool
    {
        return $user->hasRole('company');
    }

    public function update(User $user): bool
    {
        return $user->hasRole('company');
    }
    public function delete(User $user): bool
    {
        return $user->hasRole('company');
    }
}
