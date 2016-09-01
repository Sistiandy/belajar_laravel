<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class PencilPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the given post can be updated by the user.
     *
     * @param  \App\User  $user
     * @param  \App\Pencil  $pencil
     * @return bool
     */
    public function destroy(User $user, Pencil $pencil){
        return $user->id === $pencil->user_id;
    }
}
