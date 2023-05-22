<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    function create(){
        return view('booking.create');
    }

    function book(Request $request){
        //read form data

        // $data = $request->all();
        
        //validate the form date

        $data = $request->validate([
            "fname"=>"required | alpha | min:3",
            "lname"=>"required | alpha | min:3",
            "email"=>"required | email",
            "phone"=>"required | digits:12 | regex:/^254\d{9}$/"
        ]);
        // Save the data

      Book::create($data);

      return redirect('/dashboard');
    }
}
