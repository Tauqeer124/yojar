<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $customers = Customer::with('country', 'detail')->select('customers.*')->get();

        // dd($customers);
        return view('customer.index',compact('customers'));
    }
    public function show($id){
        $customer = Customer::with('country', 'detail')->find($id);
        return view('customer.show', compact('customer'));
    }
    //edit
    public function edit($id){
        $countrieslist = Country::all();
        $customer = Customer::with('country', 'detail')->find($id);
        return view('customer.edit', compact('customer','countrieslist'));

    }
    //update
    public function update2(Request $request, $id)
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
    //
    public function update(Request $request, $id)
    {
        // Find the user with the given ID
        $customer = Customer::find($id);
        if (!$customer) {
            return response()->json(['error' => 'User not found.'], 404);
        }
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
       
    
        // Update the customer's information with the input data
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');
        $customer->country_id = $request->input('country_id');
        $customer->image = $imagePath;
        $customer->save();
    
        // Update user detail
        $customer->detail()->update([
            'phone' => $request->input('phone'),
            'province' => $request->input('province'),
            'customer_id' => $customer->id,
        ]);
    
    
    
        return redirect()->route('customer.index')->with('success', 'Customer updated successfully');    }
    
    public function destroy($id){
        // dd('kkk');
        $customer = Customer::find($id);
        if (!$customer) {
            return back()->with('error', 'User not found.');
        }
    
       

        if ($customer->image) {
            Storage::disk('public')->delete($customer->image);
        }
         // Delete the associated user detail if it exists
         if ($customer->detail) {
            $customer->detail->delete();
        }
        $customer->delete();
        return redirect()->route('customer.index')->with('success' ,'Customer Record deleted successfully');
    }

    public function showgraph()
    {
     
        $customersByCountry = Customer::select('customers.country_id', 'countries.country_name ')
        ->leftJoin('countries', 'customers.country_id', '=', 'countries.id')->
        select(DB::raw('customers.country_id,countries.country_name, count(*) as count'))->groupby('country_name','country_id')->get();
        dd($customer)
        return view('graph', compact('customersByCountry'));
    }
}
