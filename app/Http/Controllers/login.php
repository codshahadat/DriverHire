<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;







class login extends Controller
{
    // public function register()
    // {
    //     return view('drvreg');
    // }

    public function register()
    {
        // You might want to pass an empty image path initially or handle it as needed
        $imagePath = 'images/';

        // Check if the image path exists in the session (set during registration)
        if (session()->has('uploadedImagePath')) {
            $imagePath = session('uploadedImagePath');
        }

        return view('drvreg', ['imagePath' => $imagePath]);
    }





    public function registerstore(Request $request)
    {
        $name = $request->name;
        $nid = $request->nid;
        $dob = $request->dob;
        $password = $request->password;
        $drivertype = $request->drivertype;
        $email = $request->email;
        $phone = $request->phone;
        $license = $request->license;
        $address = $request->address;
        $qualification = $request->qualification;
        $experience = $request->experience;
        $usertype = $request->input('usertype', 'driver');
        $confirm_password = $request->password_confirm;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Save the image using Image Intervention
            $path = public_path('images/' . $imageName);
            Image::make($image->getRealPath())->resize(200, 200)->save($path);

            // Set the session key to the uploaded image path
            session(['uploadedImagePath' => 'images/' . $imageName]);
        } else {
            // Handle the case when no image is uploaded
            session(['uploadedImagePath' => null]);
        }

        if ($password != $confirm_password) {
            return redirect()->back()->with('err', 'Password Mismatch');
        } else {
            DB::table('user')->insert([
                'name' => $name,
                'nid' => $nid,
                'dob' => $dob,
                'email' => $email,
                'phone' => $phone,
                'license' => $license,
                'address' => $address,
                'qualification' => $qualification,
                'experience' => $experience,
                'imageName' => $imageName,
                'password' => $password,
                'drivertype' => $drivertype,
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
            ->where('password', '=', $password)
            ->where('usertype', '=', $usertype)
            ->first();

        if ($user) {
            if ($user->is_verified == 0) {
                return redirect()->back()->with('err', 'Wait for admin approval, Not Approved Yet');
            } else {
                $request->session()->put('username', $user->name);
                $request->session()->put('usertype', $user->usertype);
                $request->session()->put('userid', $user->id);
                $request->session()->put('nid', $user->nid);
                $request->session()->put('dob', $user->dob);
                $request->session()->put('drivertype', $user->drivertype);
                $request->session()->put('email', $user->email);
                $request->session()->put('phone', $user->phone);
                $request->session()->put('license', $user->license);
                $request->session()->put('address', $user->address);
                $request->session()->put('qualification', $user->qualification);
                $request->session()->put('experience', $user->experience);
                $request->session()->put('imagename', $user->imagename);
                $request->session()->put('is_verified', $user->is_verified);
                $request->session()->put('verified', $user->verified);
                return redirect('dashboard');
            }
        } else {
            // User not found or incorrect credentials
            return redirect()->back()->with('err', 'Incorrect email, password, or user type.');
        }
    }


    public function logout(Request $request)
    {
        // Clear the user's session
        $request->session()->flush();

        // Invalidate the session cookie
        $request->session()->regenerate(true);

        // Clear the cache
        Cache::flush();

        // Redirect the user to the login page (you can change the path)
        return redirect('login');
    }

    // public function dashboard()
    // {
    //     if (Session::has('usertype') && Session::get('usertype') == 'admin') {
    //         return view('admin.dashboard');
    //     } else if (Session::has('usertype') && Session::get('usertype') == 'customer') {
    //         return view('customer.dashboard');
    //     } else if (Session::has('usertype') && Session::get('usertype') == 'driver') {
    //         return view('driver.dashboard');
    //     } else {
    //         return redirect('');
    //     }
    // }


    public function dashboard()
    {
        if (Session::has('usertype') && Session::get('usertype') == 'admin') {
            return response()->view('admin.dashboard')
                ->header('Cache-Control', 'no-cache, no-store, must-revalidate')
                ->header('Pragma', 'no-cache')
                ->header('Expires', '0');
        } else if (Session::has('usertype') && Session::get('usertype') == 'customer') {
            return response()->view('customer.dashboard')
                ->header('Cache-Control', 'no-cache, no-store, must-revalidate')
                ->header('Pragma', 'no-cache')
                ->header('Expires', '0');
        } else if (Session::has('usertype') && Session::get('usertype') == 'driver') {
            return response()->view('driver.dashboard')
                ->header('Cache-Control', 'no-cache, no-store, must-revalidate')
                ->header('Pragma', 'no-cache')
                ->header('Expires', '0');
        } else {
            return redirect('/login');
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




    public function signup()
    {
        return view('signup');
    }

    public function home()
    {
        $driver = DB::table('user')->where('usertype', 'driver')->get();
        return view('welcome', ['driver' => $driver]);
    }


    public function book()
    {
        if (Session::has('usertype') && Session::get('usertype') == 'admin') {


            // Retrieve bookings for the logged-in user
            $book = DB::table('booking')->get();



            // Pass the bookings to the view
            return response()->view('admin.book', ['book' => $book])
                ->header('Cache-Control', 'no-cache, no-store, must-revalidate')
                ->header('Pragma', 'no-cache')
                ->header('Expires', '0');
        }

        return redirect()->back()->with('error', 'You do not have permission to access this page.');
    }


    public function deleteuser($id)
    {
        $affected = DB::table('user') // Replace 'your_table_name' with the actual name of your table
            ->where('id', $id)->delete();


        return redirect()->back()->with('success', 'User Deleted Successfully');
    }
}
