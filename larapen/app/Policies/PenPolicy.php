<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class PenPolicy
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
     * @param  \App\Pen  $pen
     * @return bool
     */
    public function destroy(User $user, Pen $pen){
        return $user->id === $pen->user_id;
    }
}
