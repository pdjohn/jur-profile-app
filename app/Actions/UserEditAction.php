<?php

namespace App\Actions;


use App\Models\User;

class UserEditAction
{
    public static function execute($id)
    {
        return User::with('experience')->findOrFail($id);
    }
}