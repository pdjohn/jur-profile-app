<?php

namespace App\Http\Controllers;

use App\Actions\UserEditAction;
use App\Actions\UserListAction;
use App\Actions\UserStoreAction;
use App\Actions\UserUpdateAction;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use http\Env\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $contentData = UserListAction::execute();

        return view('user.index', compact('contentData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserStoreRequest $request
     * @return Response
     */
    public function store(UserStoreRequest $request)
    {
        $response = UserStoreAction::execute($request->validated());

        return redirect()->route('user.index')->with('success', 'Successfully User Created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data = UserEditAction::execute($id);

        return view('user.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $response = UserUpdateAction::execute($request->validated(), $id);

        return redirect()->route('user.index')->with('success', 'Successfully User Updated');
    }
}
