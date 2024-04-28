<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\V1\StoreUserRequest;
use App\Http\Requests\V1\LoginUserRequest;


// use Auth;


class AuthController extends Controller
{
    public function register(Request $request) {
        $request->validate([
            'name' => ['required','string','unique:users'],
            'email' => ['required','email','unique:users'],
            'password' => ['required','min:8'],
            'telepon' => ['required','string'],
            'alamat' => ['required','string'],
            'foto' => ['string'],
            'jenis_kelamin' => ['required','string'],
            // 'created_at' => ['required','string'],
            // 'updated_at' => ['required','string'],
            
            // 'role' => [ 'string'],
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'foto' => $request->foto,
            'jenis_kelamin' => $request->jenis_kelamin,
            // 'created_at' => $request->created_at,
            // 'updated_at' => $request->updated_at,
            // 'role' => $request->role,
        ]);
        // $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' =>$user,
            // 'token' => $token
        ];

        return response($response);
        return response()->json([
            "message" => "Akun berhasil dibuat."
        ]);
        
        // $token = $user->createToken('myapptoken')->plainTextToken;
        // $response = [
        //     'user' => $user,
        //     'token' => $token,
        // ];
        // return response($response, 201);
    }
    
    public function login(Request $request) {
        // $request->validated($request->all());
        // $request->validate([
        //     'email' => ['required', 'email','string'],
        //     'password' => ['required', 'min:8']
        // ]);
        // $credentials = request(['email', 'password']);
        // if (!Auth::attempt($credentials)) {
        //     return $this->sendError('unauthorized, gagal lah',500);
        // }
        // $user = User::where('email',$request->email)->first();
        // if(!Hash::check($request->password, $user->password, [])) {
        //     throw new \Exception('invalid credentials');
        // }
        // //jika berhasil maka login
        // $tokenResult = $user->createToken('authToken')->plainTextToken;
        // return $this->sendResponse([
        //     'access_token' => $tokenResult,
        //     'token_type' => 'Bearer',
        //     'user' => $user
        // ], 'authenticated');
    // }
    // $request->validate([
    //     'email' => 'required', 'email',
    //     'password' => 'required', 'min:8',
    // ]);
    // $user = User::where('email',$request->email)->first();

    // if (! $user || ! Hash::check($request->password, $user->password)) {
    //     throw ValidationException::withMessages([
    //         'email' => ['gagal lah']
    //     ]);
    // }

    // if (! Auth::attempt($request->only('email', 'password'))) {
    //     return response()->json([
    //         'message' => 'gagal'
    //     ], 401);
    // }

    // $user = User::where('email', $request->email)->firstOrFail();

    // $token = $user->createToken('auth_token')->plainTextToken;

    // return response()->json([
    //     'message' => 'Login success',
    //     'access_token' => $token,
    //     'token_type' => 'Bearer'
    // ]);

        $fields = $request->validate([
            'email' => 'required','string',
            'password' => 'required','string',
        ]);
        // check email
        $user = User::where('email', $fields['email'])->first();
        // dd($user);
        // check password
        if(!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad Creds'
            ], 401);
        }
        $token = $user->createToken('myapptoken')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token,
        ];
        return response($response, 201);
        }

        public function me(){
            $user = Auth::user();
            
            $this->response['message'] = 'success';
            $this->response['data'] = $user;
            
            return response()->json($this->response, 200);
        }
        
    public function logout(Request $request) {
        auth()->user()->tokens()->delete();
        return[
            'message' => 'Logged out'
        ];
    }
}