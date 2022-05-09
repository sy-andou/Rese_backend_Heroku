<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Policies\UserPolicy;

use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function register(RegisterRequest $request)
    {
        if ($request->permission_id === 3 && $request->routeName === "administrator") {
            User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => Hash::make($request->password),
                "permission_id" => 2,
            ]);
        } else {
            User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => Hash::make($request->password),
                "permission_id" => 1,
                "email_verify_token" => base64_encode($request->email),
            ]);
            Mail::send('pre_register', ['name' => $request->name, 'token' => base64_encode($request->email)], function ($message) use ($request) {
                $message->bcc($request->email)
                    ->subject('【Rese】仮登録が完了しました。');
            });
        }
    }

    public function checkRegisterEmail($email_token)
    {
        // 使用可能なトークンか
        if (!User::where('email_verify_token', $email_token)->exists()) {
            redirect('https://rese-syand.netlify.app/thanks/invalid');
        } else {
            $user = User::where('email_verify_token', $email_token)->first();
            // 本登録済みユーザーか
            if ($user->email_verified_at) {
                // logger("status". $user->email_verified );
                return redirect('https://rese-syand.netlify.app/thanks/exist');
            }
            // ユーザーステータス更新
            $user->email_verified_at = Carbon::now();
            if ($user->save()) {
                return redirect('https://rese-syand.netlify.app/thanks/success');
            } else {
                return redirect('https://rese-syand.netlify.app/thanks/fail');
            }
        }
    }

    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!empty($user['email_verified_at'])) {
            $credentials = request(['email', 'password']);
            if (!$token = auth()->attempt($credentials)) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }
            return $this->respondWithToken($token);
        } else {
            return response()->json(
                [
                    'message' => "本登録されたアカウントが見つかりません",
                ],
                404
            );
        }
    }
    public function me()
    {
        return response()->json(auth()->user());
    }

    public function logout()
    {
        auth()->logout();
        return response()->json(
            [
                'message' => 'ログアウトしました。'
            ],
            200
        );
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
