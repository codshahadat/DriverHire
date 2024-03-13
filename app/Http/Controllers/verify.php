<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use App\Models\User;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class verify extends Controller
{

    // public function user($status)
    // {
    //     $user = DB::table('user');
    //     if ($status == 'all') {
    //         $user = DB::table('user')
    //             ->get();
    //     } else if ($status == 'pending') {
    //         $user = DB::table('user')
    //             ->where('is_verified', '=', 0)
    //             ->get();
    //     }

    //     $user = $user->get();
    //     return view('admin.user', ['user' => $user]);
    // }

    public function document($status)
    {
        if (Session::has('usertype') && Session::get('usertype') == 'admin') {

            $user = DB::table('user');
            if ($status == 'all') {
                $user = DB::table('user')
                    ->get();
            } else if ($status == 'pending') {
                $user = DB::table('user')
                    ->where('verified', '=', 0)
                    ->get();
            }

            $user = $user->get();
            return view('admin.verifyuser', ['user' => $user]);
        }

        return redirect()->back()->with('error', 'You do not have permission to access this page.');
    }

    public function verified($id)
    {
        $affected = DB::table('user')
            ->where('id', $id)
            ->update(['verified' => 1]);
        return redirect()->back();
    }


    public function unverified($id)
    {
        $affected = DB::table('user')
            ->where('id', $id)
            ->update(['verified' => 0]);
        return redirect()->back();
    }
}
