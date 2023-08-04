@extends('voyager::master')

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
                            <span class="panel-desc"> The name of the customer</span>
                        </h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <input type="text" class="form-control" id="title" name="name" placeholder="Title" value="{{$customer->name}}">
                    </div>
                </div>

                <!-- ### EMAIL ### -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="voyager-character"></i> Email
                            <span class="panel-desc"> The email of the customer</span>
                        </h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{$customer->email}}">
                    </div>
                </div>

                <!-- ### ADDRESS ### -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="voyager-character"></i> Address
                            <span class="panel-desc"> The Address of the Customer</span>
                        </h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{$customer->address}}">
                    </div>
                </div>

                <!-- ### PHONE ### -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="voyager-character"></i> Phone
                            <span class="panel-desc"> The Phone number of the Customer</span>
                        </h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{$customer->phone}}">
                    </div>
                </div>

                <!-- ### PROVINCE ### -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="voyager-character"></i> Province
                            <span class="panel-desc"> The Province of the Customer</span>
                        </h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <input type="text" class="form-control" id="province" name="province" placeholder="Province" value="{{$customer->province}}">
                    </div>
                </div>

                <!-- ### COUNTRY ### -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="voyager-character"></i> Country
                            <span class="panel-desc"> The Country of the Customer</span>
                        </h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <select class="form-control" name="country">
                            @foreach($countrieslist as $country)
                                <option value="{{ $country->id }}" @if($customer->country == $country) selected @endif>{{ $country }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- ### POST IMAGE ### -->
                <div class="panel">
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

                <button type="submit" class="btn btn-primary pull-right">
                    <i class="icon wb-plus-circle"></i> Update Customer
                </button>
            </div>
        </div>
    </div>
    </form>
@endsection
