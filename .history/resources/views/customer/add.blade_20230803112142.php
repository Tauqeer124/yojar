@extends('voyager::master')

@section('content')
<div class="container-fluid">
    <form class="form-edit-add" role="form" action="{{route('customer.add')}}" method="POST" enctype="multipart/form-data">

    <div class="side-body padding-top">
            <h1 class="page-title">
<i class="voyager-news"></i>
Add Post
</h1>
<div class="row">
    <div class="col-md-8">
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
            <div class="panel panel-bordered panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="icon wb-image"></i> Post Image</h3>
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
            <>
    </form>

   
@endsection


