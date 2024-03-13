<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class login extends Controller
{
    public function register()
    {
        return view('drvreg');
    }
    public function customerreg()
    {
        return view('cusreg');
    }

    public function registerstore(Request $request)
    {
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
        $usertype = $request->input('usertype', 'driver');
        $image = $request->image;

        //image upload

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default.jpg'; // You can set a default image if no image is uploaded
        }

        $confirm_password = $request->password_confirm;


        if ($password != $confirm_password) {
            return redirect()->back()->with('err', 'Password Mismatch');
        } else {
            DB::table('user')->insert([
                'name' => $name,
                'nid' => $nid,
                'dob' => $dob,
                'email' => $email,
                'license' => $license,
                'address' => $address,
                'qualification' => $qualification,
                'experience' => $experience,
                'image' => $image,
                'password' => $password,
                'drivertype' => $drivertype,
                'usertype' => $usertype,
                'is_verified' => '0'

            ]);

            return redirect()->back()->with('success', 'Registration Complete. Waiting for admin approval.');
        }
    }

    public function customerstore(Request $request)
    {
        $name = $request->name;
        $nid = $request->nid;
        $dob = $request->dob;
        $password = $request->password;
        $email = $request->email;
        $address = $request->address;
        $usertype = $request->input('usertype', 'customer');
        $image = $request->image;

        //image upload

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default.jpg'; // You can set a default image if no image is uploaded
        }

        $confirm_password = $request->password_confirm;


        if ($password != $confirm_password) {
            return redirect()->back()->with('err', 'Password Mismatch');
        } else {
            DB::table('user')->insert([
                'name' => $name,
                'nid' => $nid,
                'dob' => $dob,
                'email' => $email,
                'address' => $address,
                'image' => $image,
                'password' => $password,
                'usertype' => $usertype,
                'is_verified' => '0'

            ]);

            return redirect()->back()->with('success', 'Registration Complete. Waiting for admin approval.');
        }
    }


    public function login()
    {
        return view('login');
    }

    public function loginstore(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $usertype = $request->usertype;
        $user = DB::table('user')
            ->where('email', '=', $email)
            ->where('password', '=', ($password))
            ->where('usertype', '=', ($usertype))
            ->first();
        if ($user) {
            if ($user->is_verified == 0) {
                return redirect()->back()->with('err', 'Wait for admin approvel, Not Approved Yet');
            } else {

                $request->session()->put('username', $user->name);
                $request->session()->put('usertype', $user->usertype);
                $request->session()->put('userid', $user->id);
                return redirect('dashboard');
            }
        }
    }

    public function logout(Request $request)
    {
        // Clear the user's session
        $request->session()->flush();

        // Invalidate the session cookie
        $request->session()->regenerate(true);

        // Redirect the user to the login page (you can change the path)
        return redirect('login');
    }

    public function dashboard()
    {
        if (Session::has('usertype') && Session::get('usertype') == 'admin') {
            return view('admin.dashboard');
        } else if (Session::has('usertype') && Session::get('usertype') == 'customer') {
            return view('customer.dashboard');
        } else if (Session::has('usertype') && Session::get('usertype') == 'driver') {
            return view('driver.dashboard');
        } else {
            return redirect('');
        }
    }



    public function customerpanel()
    {
        return view('customer.dashboard');
    }

    public function driverpanel()
    {
        return view('driver.dashboard');
    }


    public function home()
    {
        return view('home');
    }
}
