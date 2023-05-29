<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
       $data= Customer::orderBy('created_at', 'desc')->get();
       return view('Customer/customers', compact('data'));
    }
    public function add(){
        return view('Customer.add-customer');
    }
    public function save(Request $request)
{
    $data = $request->validate([
        'name' => 'required | alpha',
        'hotel' => 'required',
        'seats' => 'required|integer|min:1',
        'image' => 'required| max:10000| mimes:jpg'
    ]);

    $model = new Customer;
    $model->name = $data['name'];
    $model->hotel = $data['hotel'];
    $model->seats = $data['seats'];

    if ($request->hasFile('image')) {
        $destination = 'public/images/customers';
        $img = $request->file('image');
        $img_name = $img->getClientOriginalName();
        $path = $img->storeAs($destination, $img_name);
        $model->image = $img_name;
    }

    if ($model->save()) {
        return redirect('Customer/add-customer')->with('success', 'Customer added successfully');
    } else {
        return redirect('Customer/add-customer')->with('fail', 'Customer was not added');
    }
}

    public function edit($id){
        $data= Customer::where('id','=', $id)->first();
        return view('Customer/edit-customer', compact('data'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|alpha',
            'hotel' => 'required',
            'seats' => 'required|integer|min:1',
        ]);
        
        $id = $request->id;
        $name = $request->name;
        $hotel = $request->hotel;
        $seats = $request->seats;
        $old_img = $request->oldimage;

        if ($request->hasFile('image')){
            $destination = 'public/images/customers';
            $img = $request->file('image');
            $img_name = $img->getClientOriginalName();
            $path = $img->storeAs($destination, $img_name);
            
            Customer::where('id', $id)->update([
                'name' => $name,
                'hotel' => $hotel,
                'seats' => $seats,
                'image' => $img_name
            ]);

            if(!empty($old_image)){
                Storage::disk('public')->delete('images/customers/' . $oldImage);
            }

            return redirect()->back()->with('success', 'Update successfully');
        } else {
            Customer::where('id', $id)->update([
                'name' => $name,
                'hotel' => $hotel,
                'seats' => $seats,
            ]);
            return redirect()->back()->with('success', 'Customer updated successfully');
        }
    }
    
    public function delete($id){
        Customer::where('id','=',$id)->delete();
        return redirect()->back()->with('success', 'Customer deleted successfuly');

    }
}
