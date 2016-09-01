<?php 

namespace App\Repositories;

use App\User;
use App\Pencil;

class PencilRepository
{

    public function forUser(User $user){
        return $user->pencils()
                    ->orderBy('create_at', 'asc')
                    ->get();
    }
}