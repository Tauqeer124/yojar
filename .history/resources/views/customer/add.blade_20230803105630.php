@extends('voyager::master')

@section('content')
    <h1>Add Customer</h1>
    <form action="{{ route('customers.store') }}" method="post" enctype="multipart/form-data>
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <label for="phone">Address</label>
        <input type="text" name="address" id="address">
        <label for="image">Image</label>
        <input type="file" name="image" id="image">
        <button type="submit">Create</button>
    </form>
@endsection



