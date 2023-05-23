<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Book;

class BookController extends Controller
{
    function create(){
        return view('booking.create');
    }

    function book(Request $request){
        
        //read and validate form data

        $data = $request->validate([
            "fname"=>"required | alpha | min:3",
            "lname"=>"required | alpha | min:3",
            "email"=>"required | email",
            "phone"=>"required | digits:12 | regex:/^254\d{9}$/"
        ]);
        // Save the data

      if (Book::create($data)) {
        // Booking successful
        return redirect('/dashboard')->with('message', 'Booked successfully');
    } else {
        // Booking failed
        return redirect()->back()->with('message', 'Failed');
    }

     
    }
}
