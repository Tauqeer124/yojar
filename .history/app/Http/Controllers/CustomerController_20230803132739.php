<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    public function create(){
        return view('customer.add');
    }
    public function store(Request $request){
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
    public function index(){
        $customers = Customer::all();
        return view('customer.index',compact('customers'));
    }
    public function show($id){
        $customer = Customer::find($id);
        return vie
    }
}
