<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class edit extends Controller
{
    public function updateUser(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $nid = $request->nid;
        $dob = $request->dob;
        $password = $request->password;
        $drivertype = $request->drivertype;
        $email = $request->email;
        $license = $request->license;
        $address = $request->address;
        $qualification = $request->qualification;
        $experience = $request->experience;
        $usertype = $request->usertype;
        $picture = $request->picture;
        $is_verified = $request->is_verified;

        DB::table('user')
            ->where('id', '=', $id)
            ->update([
                'name' => $name,
                'nid' => $nid,
                'dob' => $dob,
                'password' => $password,
                'drivertype' => $drivertype,
                'email' => $email,
                'license' => $license,
                'address' => $address,
                'qualification' => $qualification,
                'experience' => $experience,
                'usertype' => $usertype,
                'picture' => $picture,
                'is_verified' => $is_verified,
            ]);

        return redirect()->back();
    }


    public function user($status)
    {
        $user = DB::table('user');
        if ($status == 'all') {
            $user = DB::table('user')
                ->get();
        } else if ($status == 'pending') {
            $user = DB::table('user')
                ->where('is_verified', '=', 0)
                ->get();
        }

        $user = $user->get();
        return view('admin.user', ['user' => $user]);
    }

    public function approve($id)
    {
        $affected = DB::table('user')
            ->where('id', $id)
            ->update(['is_verified' => 1]);
        return redirect()->back();
    }


    public function deny($id)
    {
        $affected = DB::table('user')
            ->where('id', $id)
            ->update(['is_verified' => 0]);
        return redirect()->back();
    }
}
