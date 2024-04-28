<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('mobileview.profile', ['user' => $user]);
    }
}