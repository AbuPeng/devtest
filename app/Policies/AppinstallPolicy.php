<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Appinstall;

class AppinstallPolicy extends Policy
{
    public function update(User $user, Appinstall $appinstall)
    {
        // return $appinstall->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Appinstall $appinstall)
    {
        return true;
    }
}
