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
        // Fetch the user details based on $id
        $user = DB::table('user')->where('id', $id)->first();

        if (!$user) {
            // Handle the case when the user is not found
            return redirect()->back()->with('error', 'User not found.');
        }

        // Pass the user details to the view for editing
        return view('admin.edit_user', compact('user'));
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
        $drivertype = $request->input('drivertype');
        $email = $request->input('email');
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
                'drivertype' => $drivertype,
                'email' => $email,
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
