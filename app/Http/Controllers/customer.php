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

class customer extends Controller
{
    public function customerreg()
    {
        // You might want to pass an empty image path initially or handle it as needed
        $imagePath = 'images/';

        // Check if the image path exists in the session (set during registration)
        if (session()->has('uploadedImagePath')) {
            $imagePath = session('uploadedImagePath');
        }

        return view('cusreg', ['imagePath' => $imagePath]);
    }

    public function customerstore(Request $request)
    {
        $name = $request->name;
        $nid = $request->nid;
        $dob = $request->dob;
        $password = $request->password;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;
        $usertype = $request->input('usertype', 'customer');

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
            return redirect()->back()->with('err', 'Password not Matched');
        } else {
            DB::table('user')->insert([
                'name' => $name,
                'nid' => $nid,
                'dob' => $dob,
                'email' => $email,
                'phone' => $phone,
                'address' => $address,
                'imageName' => $imageName,
                'password' => $password,
                'usertype' => $usertype,
                'is_verified' => '0'
            ]);


            return redirect()->back()->with('success', 'Registration Complete. Waiting for admin approval.');
        }
    }
    public function cusprofile()
    {
        $userId = session('userid');

        if (!$userId) {
            // Redirect to login if user is not logged in
            return redirect('login')->with('err', 'You need to log in first.');
        }

        // Fetch the user details based on the user ID from the session
        $user = DB::table('user')->where('id', $userId)->first();

        return view('customer.cusprofile', compact('user'));
    }



    public function editinfo()
    {
        // Fetch the user ID from the session
        $userId = session('userid');

        if (!$userId) {
            // Redirect to login if user is not logged in
            return redirect('login')->with('err', 'You need to log in first.');
        }

        // Fetch the user details based on the user ID from the session
        $user = DB::table('user')->where('id', $userId)->first();

        return view('driver.editinfo', compact('user'));
    }

    public function editprofile()
    {
        // Fetch the user ID from the session
        $userId = session('userid');

        if (!$userId) {
            // Redirect to login if user is not logged in
            return redirect('login')->with('err', 'You need to log in first.');
        }

        // Fetch the user details based on the user ID from the session
        $user = DB::table('user')->where('id', $userId)->first();

        return view('customer.editprof', compact('user'));
    }

    public function verified()
    {
        $userId = session('userid');

        if (!$userId) {
            // Redirect to login if user is not logged in
            return redirect('login')->with('err', 'You need to log in first.');
        }

        // Fetch the user details based on the user ID from the session
        $user = DB::table('user')->where('id', $userId)->first();

        return view('customer.verify', compact('user'));
    }
}
