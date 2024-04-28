<?php

namespace App\Http\Controllers\Api\V1;
use App\Filters\V1\UserFilter;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UserCollection;
use App\Http\Resources\V1\UserResource;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function index(Request $request)
    {
        $filter = new UserFilter();
        $filterItems = $filter->transform($request);
        
        $includeTransaksis = $request->query('includeTransaksi');

        $users = User::where($filterItems);
        if ($includeTransaksis) {
            $users = $users->with('transaksi');
        }
    
        return new UserCollection($users->paginate()->appends($request->query()));

    }

    public function show(User $user)
    {
        $includeTransaksis = request()->query('includeTransaksi');
        if ($includeTransaksis){
            return new UserResource($user->loadMissing('transaksi'));
        }
        return new UserResource($user);
    }   

    // public function store(StoreUserRequest $request)
    // {
    //     return new UserResource(User::create($request->all()));
    // }

    public function create()
    {
        return view('users.createuser');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
            'telepon' => ['required', 'string'],
            'alamat' => ['required', 'string'],
            'jenis_kelamin' => ['required', 'string'],
            'role' => ['string'],
        ]);
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'role' => $request->role,
        ]);
        return redirect('users')->with('success','User baru berhasil ditambahkan');
    }

    // public function edit($id)
    // {
    //     $user = DB::table('users')->where('id', $id)->first();
    //     return view('users.edituser', ['user' => $user]);
    // }

    public function update(Request $request, $id)
    {
        // return response($id);
        // return response($request);
        // $validated = $request->validate([
        //     'name' => ['required','string','unique:users'],
        //     'email' => ['required','email','unique:users'],
        //     'password' => ['required','min:8'],
        //     'telepon' => ['required','string'],
        //     'alamat' => ['required','string'],
        //     'foto' => ['string'],
        //     'jenis_kelamin' => ['required','string'],
        // ]);
        
        // return response($validated);
        $users = User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            // 'role' => $request->role,
        ]);
        return response($users);
    }

    public function updateProfile(Request $request, $id){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
        ]);
        
        $userUpdated = User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        
        return response()->json(['message'=> 'berhasil bang']);
    }

    public function updateFotoProfile(Request $request, $id)
    {
        if(!isset($request->nama)){
            $nama = null;
        } else {
            $nama = $request->nama;
        }

        $file = $request->file("foto");
        if ($file){
            $name = $file->hashName();
            Storage::put("public/images/foto_user/", $file);
        } else {
            $name = null;
        }
        User::where('id',$id)->update([
                'foto'=>$name,
            ]);  
        return response(['message'=>'berhasil bng']);
        
        // $user = auth()->user();
        // $validated = $request->validate([
        //     'foto' => 'required',
        // ]);

        // $userId = $user->id;
        // $userFoto = $id->foto;
        // return response($userFoto);
        // $file = $request->file("foto");
        // $name = $file->hashName();
        // Storage::put("public/images/foto_user", $file);

        // if ($userFoto != 'default.jpg') {
        //     if (Storage::exists('public/images/foto_users/'.$userFoto)) {
        //         Storage::delete(['public/images/foto_users', $userFoto]);
        //     }
        // }      
        // User::where('id',$userId)->update([
        //     'foto'=>$name,
        // ]);  
        // return response()->json(['message'=>'berhasil']);
        
    }

    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return back();
    }
}