<?php

namespace App\Policies;

use App\Models\Module;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ModulePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $this->isAdmin($user);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Module $module)
    {
        return $this->isAdmin($user) || $user->modules()->find($module->id) ? true : false;
        //or
        // return $user->modules()->find($module)
        //     ? \Illuminate\Auth\Access\Response::allow()
        //     : \Illuminate\Auth\Access\Response::deny();
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $this->isAdmin($user);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Module $module)
    {
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Module $module)
    {
        
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Module $module)
    {
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Module $module)
    {
    }

    private function isAdmin(User $user): bool
    {
        return $user->role->role === 'admin';
    }
}
