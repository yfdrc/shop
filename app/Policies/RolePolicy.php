<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    public function index(User $user)
    {
        return $user->hasPermission('index');
    }

    public function show(User $user)
    {
        return $user->hasPermission('show');
    }

    public function create(User $user)
    {
        return $user->hasPermission('create');
    }

    public function edit(User $user)
    {
        return $user->hasPermission('edit');
    }

    public function delete(User $user)
    {
        return $user->hasPermission('delete');
    }

    public function caiwu(User $user)
    {
        return $user->hasPermission('caiwu');
    }

    public function dianpu(User $user)
    {
        return $user->hasPermission('dianpu');
    }

    public function department(User $user)
    {
        return $user->hasPermission('department');
    }

    public function manage(User $user)
    {
        return $user->hasPermission('manage');
    }

    public function admin(User $user)
    {
        return $user->hasPermission('admin');
    }
}
