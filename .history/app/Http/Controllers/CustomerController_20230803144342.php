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
        return view('customer.show', compact('customer'));
    }
    //edit
    public function edit($id){
        $customer = Customer::find($id);
        return view('customer.edit', compact('customer'));

    }
    //update
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers,email,',
            'address' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Add validation for the image file
            // Add validation for other fields as needed
        ]);

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
            // Update other fields as needed
        ]);

        return redirect()->route('customers.index')->with('success', 'Customer updated successfully');
    }
    
    public function destroy($id){
        $customer = Customer::find($id);
        if ($customer->image) {
            // Delete the image file from the storage
            Storage::disk('public')->delete($customer->image);
        }
        $customer->delete();
        return redirect ('customer.index');
    }
}
