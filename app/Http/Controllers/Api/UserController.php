<?php

namespace App\Http\Controllers\Api;

use App\Actions\UserListAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Resources\UserListCollection;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        try {
            return new UserListCollection(UserListAction::execute());
        }
        catch (\Exception $e) {
            return response()->json($e->getMessage(), 404);
        }
    }

    public function store(UserStoreRequest $request)
    {
        try {
            return new UserListCollection(UserListAction::execute($request->validated()));
        }
        catch (\Exception $e) {
            return response()->json($e->getMessage(), 404);
        }
    }
}
