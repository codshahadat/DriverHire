<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class booking extends Controller
{
    public function privatedriver()
    {
        $driver = DB::table('user')->where('usertype', 'driver')->where('drivertype', 'Private')->get();
        return view('customer.privatedrvr', ['driver' => $driver]);
    }

    public function uberdriver()
    {
        $driver = DB::table('user')->where('usertype', 'driver')->where('drivertype', 'Uber')->get();
        return view('customer.uberdrvr', ['driver' => $driver]);
    }

    public function companydriver()
    {
        $driver = DB::table('user')->where('usertype', 'driver')->where('drivertype', 'Company')->get();
        return view('customer.companydrvr', ['driver' => $driver]);
    }

    public function availabledriver()
    {
        return view('customer.availdriver');
    }


    public function showbooking()
    {
        // Assuming user_id is stored in the session
        $user_id = session('userid');

        // Retrieve bookings for the logged-in user
        $book = DB::table('booking')->where('user_id', $user_id)->get();



        // Pass the bookings to the view
        return view('customer.booking', ['book' => $book]);
    }



    public function bookingstatus()
    {
        // Assuming user_id is stored in the session
        $user_id = session('userid');

        // Retrieve bookings for the logged-in user
        $book = DB::table('booking')->where('driver_id', $user_id)->get();


        // Pass the bookings to the view
        return view('driver.booking', ['book' => $book]);
    }

    ///booking section///



    // public function addbooking()
    // {
    //     $name = session('username');
    //     $user_id = session('userid');

    //     // Use first() to get a single user
    //     $user = DB::table('user')->where('usertype', 'driver')->get();


    //     // Pass $user_id and $name to the view
    //     return view('customer.edit_booking', compact('user_id', 'name', 'user'));
    // }
    public function addbooking($id)
    {
        $user = DB::table('user')->where('id', $id)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        // Check if user is verified
        if ($user->verified != 1) {
            return redirect()->back()->with('error', 'This Driver is not verified Booking is not possible for security reason');
        }



        $name = session('username');
        $phone = session('phone');
        $user_id = session('userid');

        $booking = DB::table('booking')->where('driver_id', $id)->where('is_approved', '1')->get();



        $availableDrivers = DB::table('user')
            ->where('usertype', 'driver')
            ->select('id', 'name')
            ->get();
        // Retrieve available drivers time
        $availableDrivers = DB::table('user')
            ->where('usertype', 'driver')
            ->whereNotIn('id', function ($query) {
                $query->select('driver_id')
                    ->from('booking')
                    ->whereDate('bookingdate', '=', date('YYYY-mm-dd'));
            })
            ->get();

        // Pass $user_id, $name, $availableDrivers, and $user to the view
        return view('customer.edit_booking', compact('user_id', 'name', 'availableDrivers', 'user', 'booking'));
    }



    ///booking store section



    // public function bookingstore(Request $request)
    // {


    //     $user = DB::table('user')->where('usertype', 'driver')->get();

    //     $name = session('username');
    //     $user_id = session('userid');

    //     $driver = $request->input('driver');
    //     $driver_id = $request->input('driver_id');

    //     $bookingdate = $request->input('bookingdate');
    //     $bookingend = $request->input('bookingend');
    //     $is_approved = 0;

    //     DB::table('booking')->insert([
    //         'name' => $name,
    //         'user_id' => $user_id,
    //         'driver' => $driver,
    //         'driver_id' => $driver_id,
    //         'bookingdate' => $bookingdate,
    //         'bookingend' => $bookingend,
    //         'is_approved' => $is_approved,
    //     ]);

    //     return redirect()->back()->with('success', 'Booking Request Sent. Waiting for approval.');
    // }


    public function bookingstore(Request $request)
    {
        $name = session('username');
        $user_id = session('userid');
        $phone = $request->input('phone');


        $driver = $request->input('driver');
        $driver_id = $request->input('driver_id');

        $bookingdate = $request->input('bookingdate');
        $bookingend = $request->input('bookingend');
        $contact = $request->input('contact');
        $cost = $request->input('cost');
        $is_approved = 2;

        // // Check if the selected driver is available on the specified date
        // $isDriverAvailable = DB::table('booking')
        //     ->where('driver_id', $driver_id)
        //     ->where('bookingdate', $bookingdate)
        //     ->where('bookingend', $bookingend)
        //     ->where('is_approved', 0, 1)
        //     ->doesntExist();



        // if (!$isDriverAvailable) {
        //     return redirect()->back()->with('error', 'Driver is not available on the specified date.');
        // }



        // $overlappingBooking = DB::table('booking')
        //     ->where('driver_id', $driver_id)
        //     ->where(function ($query) use ($bookingdate, $bookingend) {
        //         $query->whereBetween('bookingdate', [$bookingdate, $bookingend])
        //             ->orWhereBetween('bookingend', [$bookingdate, $bookingend]);
        //     })
        //     ->where('is_approved', 0, 1)
        //     ->first();

        // if ($overlappingBooking) {
        //     return redirect()->back()->with('error', 'Driver is not available on the specified date and time.');
        // }

        $overlappingBooking = DB::table('booking')
            ->where('driver_id', $driver_id)
            ->where(function ($query) use ($bookingdate, $bookingend) {
                $query->whereBetween('bookingdate', [$bookingdate, $bookingend])
                    ->orWhereBetween('bookingend', [$bookingdate, $bookingend]);
            })
            ->orWhere(function ($query) use ($bookingdate, $bookingend) {
                $query->where('bookingdate', '<=', $bookingdate)
                    ->where('bookingend', '>=', $bookingend);
            })
            ->where('is_approved', 0, 1)
            ->first();

        if ($overlappingBooking) {
            return redirect()->back()->with('error', 'Driver is not available on the specified date and time.');
        }

        // If the driver is available, proceed with the booking
        DB::table('booking')->insert([
            'name' => $name,
            'user_id' => $user_id,
            'phone' => $phone,
            'driver' => $driver,
            'driver_id' => $driver_id,
            'bookingdate' => $bookingdate,
            'bookingend' => $bookingend,
            'contact' => $contact,
            'cost' => $cost,
            'is_approved' => $is_approved,
        ]);

        return redirect()->back()->with('success', 'Booking Request Sent. Waiting for approval.');
    }




    public function approveBooking($id)
    {
        $booking = DB::table('booking')->where('id', $id)->first();

        $driver = DB::table('user')->where('id', $booking->driver_id)->where('usertype', 'driver')->first();

        if ($driver->verified == 0) {
            return redirect()->back()->with('error', 'Your Documents are not verified yet');
        } else {

            $affected = DB::table('booking') // Replace 'your_table_name' with the actual name of your table
                ->where('id', $id)
                ->update(['is_approved' => 1]);
        }

        return redirect()->back();
    }

    public function denyBooking($id)
    {
        $affected = DB::table('booking') // Replace 'your_table_name' with the actual name of your table
            ->where('id', $id)
            ->update(['is_approved' => 0]);

        return redirect()->back();
    }

    public function deletebook($id)
    {
        $affected = DB::table('booking') // Replace 'your_table_name' with the actual name of your table
            ->where('id', $id)->delete();
            

        return redirect()->back()->with('success', 'Booking Deleted Successfully');
    }  
}
