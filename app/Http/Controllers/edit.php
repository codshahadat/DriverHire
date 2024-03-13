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

class edit extends Controller
{
    public function editUser($id)
    {

        if (Session::has('usertype') && Session::get('usertype') == 'admin') {
            // Fetch the user details based on $id
            $user = DB::table('user')->where('id', $id)->first();

            if (!$user) {
                // Handle the case when the user is not found
                return redirect()->back()->with('error', 'User not found.');
            }

            // Pass the user details to the view for editing
            return view('admin.edit_user', compact('user'));
        }
        return redirect()->back()->with('error', 'You do not have permission to access this page.');
    }




    public function updateUser(Request $request, $id)
    {


        $user = DB::table('user')->where('id', $id)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $name = $request->input('name');
        $nid = $request->input('nid');
        $dob = $request->input('dob');
        $password = $request->input('password');
        $usertype = $request->input('usertype');
        $drivertype = $request->input('drivertype');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $license = $request->input('license');
        $address = $request->input('address');
        $qualification = $request->input('qualification');
        $experience = $request->input('experience');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Save the image using Image Intervention
            $path = public_path('images/' . $imageName);
            Image::make($image->getRealPath())->resize(200, 200)->save($path);

            // Set the session key to the uploaded image path
            session(['uploadedImagePath' => 'images/' . $imageName]);

            // Remove the old image if it exists
            // if ($user->imageName) {
            //     $oldImagePath = public_path('images/' . $user->imageName);
            //     if (file_exists($oldImagePath)) {
            //         unlink($oldImagePath);
            //     }
            // }
        } else {
            // Handle the case when no image is uploaded
            session(['uploadedImagePath' => null]);
            $imageName = $user->imageName;
        }

        DB::table('user')
            ->where('id', $id)
            ->update([
                'name' => $name,
                'nid' => $nid,
                'dob' => $dob,
                'password' => $password,
                'usertype' => $usertype,
                'drivertype' => $drivertype,
                'email' => $email,
                'phone' => $phone,
                'license' => $license,
                'address' => $address,
                'qualification' => $qualification,
                'experience' => $experience,
                'imageName' => $imageName,
            ]);

        return redirect()->back()->with('success', 'User updated successfully.');
    }



    public function user($status)
    {
        if (Session::has('usertype') && Session::get('usertype') == 'admin') {



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

        return redirect()->back()->with('error', 'You do not have permission to access this page.');
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


    public function verify()
    {

        $userId = session('userid');

        if (!$userId) {
            // Redirect to login if user is not logged in
            return redirect('login')->with('err', 'You need to log in first.');
        }

        // Fetch the user details based on the user ID from the session
        $user = DB::table('user')->where('id', $userId)->first();

        return view('driver.verify', compact('user'));
    }



    // public function verification(Request $request, $id)
    // {
    //     $user = DB::table('user')->where('id', $id)->first();

    //     if (!$user) {
    //         return redirect()->back()->with('error', 'User not found.');
    //     }

    //     $validatedData = $request->validate([
    //         'image1' => 'required|image|max:2048',
    //         'image2' => 'required|image|max:2048',
    //     ]);

    //     $nidv = time() . '.' . $validatedData['image1']->getClientOriginalExtension();
    //     $driverv = time() . '.' . $validatedData['image2']->getClientOriginalExtension();

    //     // Save the image using Image Intervention
    //     $path = public_path('images/nid' . $nidv);
    //     Image::make($validatedData['image1']->getRealPath())->resize(200, 200)->save($path);

    //     $path = public_path('images/driver' . $driverv);
    //     Image::make($validatedData['image2']->getRealPath())->resize(200, 200)->save($path);

    //     DB::table('user')
    //         ->where('id', $id)
    //         ->update([
    //             'nidv' => $nidv,
    //             'driverv' => $driverv ?: $user->driverv, // only update the driverv field if a file was uploaded
    //         ]);

    //     return redirect()->back()->with('success', 'Applied, wait for verification to complete.');
    // }


    public function verification(Request $request, $id)
    {
        $user = DB::table('user')->where('id', $id)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $nidv = $user->nidv;
        $driverv = $user->driverv;

        if ($request->hasFile('image1')) {
            $image = $request->file('image1');
            $nidv = time() . '.' . $image->getClientOriginalExtension();

            // Save the image using Image Intervention
            $path = public_path('images/nid' . $nidv);
            Image::make($image->getRealPath())->resize(200, 200)->save($path);

            // Remove the old image if it exists
            // if ($user->imageName) {
            //     $oldImagePath = public_path('images/' . $user->imageName);
            //     if (file_exists($oldImagePath)) {
            //         unlink($oldImagePath);
            //     }
            // }
        }

        if ($request->hasFile('image2')) {
            $image = $request->file('image2');
            $driverv = time() . '.' . $image->getClientOriginalExtension();

            // Save the image using Image Intervention
            $path = public_path('images/driver' . $driverv);
            Image::make($image->getRealPath())->resize(200, 200)->save($path);
        }

        // Check if the driverv field was updated
        if ($driverv) {
            DB::table('user')
                ->where('id', $id)
                ->update([
                    'nidv' => $nidv,
                    'driverv' => $driverv,
                ]);
        } else {
            // If the driverv field was not updated, check if it was set to a dummy value
            if ($driverv === null || $driverv === '') {
                DB::table('user')
                    ->where('id', $id)
                    ->update([
                        'nidv' => $nidv,
                    ]);
            }
        }

        // Redirect back to the previous page with a success message
        return redirect()->back()->with('success', 'Applied, wait for verification to complete.');
    }
}
