@extends('voyager::master')

@section('content')
<div class="container-fluid">
    <form class="form-edit-add" role="form" action="{{route('customer.add')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="side-body padding-top">
            <h1 class="page-title">
<i class="voyager-news"></i>
Add Customer
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
                                            <input type="text" class="form-control" id="title" name="name" placeholder="Title" value="">
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
                                            <input type="text" class="form-control" id="email" name="email" placeholder="email" value="">
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
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="">
            </div>
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="voyager-character"></i> Phone
                    <span class="panel-desc"> The phone number of Customer</span>
                </h3>
                <div class="panel-actions">
                    <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                </div>
            </div>
            <div class="panel-body">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="">
            </div>

            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="voyager-character"></i> Province
                    <span class="panel-desc"> The Province of Customer</span>
                </h3>
                <div class="panel-actions">
                    <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                </div>
            </div>
            <div class="panel-body">
                <input type="text" class="form-control" id="province" name="province" placeholder="Province" value="">
            </div>
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="voyager-character"></i> Country
                    <span class="panel-desc"> The Country of Customer</span>
                </h3>
                <div class="panel-actions">
                    <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                </div>
            </div>
            <div class="panel-body">
                <select class="form-control" id="country" name="country_id">
                    @foreach($countrieslist as $code => $name)
                        <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                    @endforeach
                </select>
            </div>

           
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="voyager-character"></i> Post Image</h3>
                    <div class="panel-actions">
                        <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                    </div>
                </div>
                <div class="panel-body">
                                                <input type="file" name="image">
                </div>
            </div>
            
        </div>
        <button type="submit" class="btn btn-primary pull-right">
            <i class="icon wb-plus-circle"></i> Create New Post                 </button>
    </div>
</div>
    </form>

   
@endsection


