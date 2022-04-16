<?php

namespace App\Http\Controllers\Api;

use App\Actions\UserEditAction;
use App\Actions\UserListAction;
use App\Actions\UserStoreAction;
use App\Actions\UserUpdateAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserListCollection;

/**
 * Class UserController
 * @package App\Http\Controllers\Api
 */
class UserController extends Controller
{
    /**
     * @return UserListCollection|\Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            return new UserListCollection(UserListAction::execute());
        }
        catch (\Exception $e) {
            return response()->json($e->getMessage(), 404);
        }
    }

    /**
     * @param UserStoreRequest $request
     * @return UserListCollection|\Illuminate\Http\JsonResponse
     */
    public function store(UserStoreRequest $request)
    {
        try {
            return new UserListCollection(UserStoreAction::execute($request->validated()));
        }
        catch (\Exception $e) {
            return response()->json($e->getMessage(), 404);
        }
    }

    /**
     * @param $id
     * @return UserListCollection|\Illuminate\Http\JsonResponse
     */
    public function edit($id)
    {
        try {
            return new UserListCollection(UserEditAction::execute($id));
        }
        catch (\Exception $e) {
            return response()->json($e->getMessage(), 404);
        }
    }

    /**
     * @param UserUpdateRequest $request
     * @param $id
     * @return UserListCollection|\Illuminate\Http\JsonResponse
     */
    public function update(UserUpdateRequest $request, $id)
    {
        try {
            return new UserListCollection(UserUpdateAction::execute($request->validated(), $id));
        }
        catch (\Exception $e) {
            return response()->json($e->getMessage(), 404);
        }
    }
}
