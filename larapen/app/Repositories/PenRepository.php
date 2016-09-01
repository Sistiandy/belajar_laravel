<?php 

namespace App\Repositories;

use App\User;
use App\Pen;

class PenRepository
{

    public function forUser(User $user){
        return $user->pens()
                    ->orderBy('create_at', 'asc')
                    ->get();
    }
}