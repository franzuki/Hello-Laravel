<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
       $data= Customer::get();
       return view('Customer.customers', compact('data'));
    }
    public function add(){
        return view('Customer.add-customer');
    }
    public function save(Request $request){
        $data = $request->validate([
            'name'=>'required | alpha',
            'hotel'=>'required',
            'seats'=>'required | integer | min:1'
        ]);
        if(Customer::create($data)){
            return redirect('Customer/add-customer')->with('success', 'Customer added successfuly');
        }
        else {
            return redirect('Customer/add-customer')->with('fail', 'Customer was not added');
        }
    }
    public function edit($id){
        $data= Customer::where('id','=', $id)->first();
        return view('Customer/edit-customer', compact('data'));
    }

    public function update(Request $request){
        $data = $request->validate([
            'name'=>'required | alpha',
            'hotel'=>'required',
            'seats'=>'required | integer | min:1'
        ]);
        $id=$request->id;
        $name=$request->name;
        $hotel=$request->hotel;
        $seats=$request->seats;

        Customer::where('id','=',$id)->update([
            'name'=>$name,
            'hotel'=>$hotel,
            'seats'=>$seats,
        ]);
        return redirect()->back()->with('success', 'Customer updated successfuly');

}
public function delete($id){
    Customer::where('id','=',$id)->delete();
    return redirect()->back()->with('success', 'Customer deleted successfuly');

}
}
