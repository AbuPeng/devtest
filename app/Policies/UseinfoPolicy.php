<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Useinfo;

class UseinfoPolicy extends Policy
{
    public function update(User $user, Useinfo $useinfo)
    {
        // return $useinfo->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Useinfo $useinfo)
    {
        return true;
    }
}
