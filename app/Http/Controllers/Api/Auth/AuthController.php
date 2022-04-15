<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginValidationRequest;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Auth Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * @param LoginValidationRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginValidationRequest $request)
    {
        try {
            $credentials = $request->only('email', 'password');

            if ($token = auth('api')->attempt($credentials)) {
                return $this->respondWithToken($token);
            }
            return response()->json(['error'=>'Unauthorized'], 401);
        }
        catch (\Exception $e) {
            return response()->json($e->getMessage(), 404);
        }

    }

    /**
     * @param $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth('api')->factory()->getTTL()
        ]);
    }

    /**
     * @return mixed
     */
    public function guard()
    {
        return Auth::guard();
    }

    public function logout() {
        auth( 'api' )->logout();
        $json = [
            'message' => 'You are Logged out.',
        ];

        return response()->json( $json, '200' );
    }

}