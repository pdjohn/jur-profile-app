<?php

namespace App\Actions;


use App\Models\User;

class UserListAction
{
    public static function execute()
    {
        return User::all();
    }
}