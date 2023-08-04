<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    public function create(){

        $countrieslist = Country::all();
        return view('customer.add',compact('countrieslist'));
    }
    public function store2(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'address' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // validate the image file
        ]);

        // Store the image if it's present in the request
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('customer_images', 'public');
        } else {
            $imagePath = null;
        }

        Customer::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'image' => $imagePath,
        ]);

        return redirect()->route('customer.index')->with('success', 'Customer created successfully');
    
    }
    public function store(Request $request){

       

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'address' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // validate the image file
            'country_id' => 'required',
            'phone' => 'nullable',
            'province' => 'nullable|string',
        ]);
         // Store the image if it's present in the request
         if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('customer_images', 'public');
        } else {
            $imagePath = null;
        }
    
    
        // Create a new User instance and fill it with the input data
        $user = new Customer();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->country_id = $request->input('country_id');
        $user->image=$imagePath;
        $user->save();
       
    
         // Create and associate user detail
         $user->detail()->create([
            'phone' => $request->input('phone'),
            'province' => $request->input('province'),
            'customer_id'=>$user->id,
        ]);
    
        return redirect()->route('customer.index')->with('success', 'Customer created successfully');
        
    }
    public function index2(){
        $customers = Customer::all();
        return view('customer.index',compact('customers'));
    }
    public function index(){
        $customers = Customer::with('country', 'detail')@extends('voyager::master')

        @section('content')
        <div class="container-fluid">
            <form class="form-edit-add" role="form" action="{{route('customer.update',$customer->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <div class="side-body padding-top">
                    <h1 class="page-title">
        <i class="voyager-news"></i>
        Edit Customer
        </h1>
        <div class="row">
            <div class="col-md-12">
                <!-- ### TITLE ### -->
                <div class="panel">
                    
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="voyager-character"></i> Name
                            <span class="panel-desc"> The name of customer</span>
                        </h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                                                    <input type="text" class="form-control" id="title" name="name" placeholder="Title" value="{{$customer->name}}">
                    </div>
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="voyager-character"></i> Email
                            <span class="panel-desc"> The email of customer</span>
                        </h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$customer->email}}">
                    </div>
                    
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="voyager-character"></i> Address
                            <span class="panel-desc"> The Addres of Customer</span>
                        </h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                                                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{$customer->address}}">
                    </div>
                   
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="voyager-character"></i> Post Image</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <img src="{{ asset('storage/' . $customer->image) }}" alt="Customer Image" style="max-height: 100px; max-width: 100%;">
        
                                                        <input type="file" name="image">
                        </div>
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-primary pull-right">
                    <i class="icon wb-plus-circle"></i> Update Customer                 </button>
            </div>
        </div>
            </form>
        
           
        @endsection
        
        
        ->get();

        // dd($customers);
        return view('customer.index',compact('customers'));
    }
    public function show($id){
        $customer = Customer::find($id);
        return view('customer.show', compact('customer'));
    }
    //edit
    public function edit($id){
        $customer = Customer::find($id);
        return view('customer.edit', compact('customer'));

    }
    //update
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);

        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($customer->image) {
                Storage::disk('public')->delete($customer->image);
            }

            // Upload the new image
            $imagePath = $request->file('image')->store('customer_images', 'public');
        } else {
            // If no new image provided, keep the existing image
            $imagePath = $customer->image;
        }

        $customer->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'image' => $imagePath,
          
        ]);
       

        return redirect()->route('customer.index')->with('success', 'Customer updated successfully');
    }
    
    public function destroy($id){
        
        $customer = Customer::find($id);

        if ($customer->image) {
            Storage::disk('public')->delete($customer->image);
        }
        $customer->delete();
        return redirect()->route('customer.index')->with('success' ,'Customer Record deleted successfully');
    }
}
