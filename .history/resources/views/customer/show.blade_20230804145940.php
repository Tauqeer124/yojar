@extends('voyager::master')
@section('content')

<h1 class="page-title">
    <i class="voyager-news"></i> Viewing Post &nbsp;

    <a href="{{route('customer.edit', $customer->id)}}" class="btn btn-info"> <i class="glyphicon glyphicon-pencil"></i> <span class="hidden-xs hidden-sm">Edit</span> </a>
    <a href="javascript:;" title="Delete" class="btn btn-danger delete" data-id="{{$customer->id}}" id=""> <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span> </a>
    <a href="{{route('customer.index')}}" class="btn btn-warning"> <i class="glyphicon glyphicon-list"></i> <span class="hidden-xs hidden-sm">Return to List</span> </a>
</h1>
<div id="voyager-notifications"></div>
<div class="page-content read container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered" style="padding-bottom: 5px;">
                <!-- form start -->
                <div class="panel-heading" style="border-bottom: 0;">
                    <h3 class="panel-title">Name</h3>
                </div>

                <div class="panel-body" style="padding-top: 0;">
                    <p>{{$customer->name}}</p>
                </div>
                <!-- panel-body -->
                <hr style="margin: 0;" />
                <div class="panel-heading" style="border-bottom: 0;">
                    <h3 class="panel-title">Email</h3>
                </div>

                <div class="panel-body" style="padding-top: 0;">
                    <p>{{$customer->email}}</p>
                </div>
                <!-- panel-body -->
                <hr style="margin: 0;" />
                <div class="panel-heading" style="border-bottom: 0;">
                    <h3 class="panel-title">Address</h3>
                </div>

                <div class="panel-body" style="padding-top: 0;">
                    <p>{{$customer->address}}</p>
                </div>

                <hr style="margin: 0;" />
                <div class="panel-heading" style="border-bottom: 0;">
                    <h3 class="panel-title">Phone</h3>
                </div>

                <div class="panel-body" style="padding-top: 0;">
                    <p>{{$customer->detail->phone}}</p>
                </div>

                <hr style="margin: 0;" />
                <div class="panel-heading" style="border-bottom: 0;">
                    <h3 class="panel-title">Province</h3>
                </div>

                <div class="panel-body" style="padding-top: 0;">
                    <p>{{$customer->detail->province}}</p>
                </div>

                
                <!-- panel-body -->
                <hr style="margin: 0;" />
                <div class="panel-heading" style="border-bottom: 0;">
                    <h3 class="panel-title">Image</h3>
                </div>

                <div class="panel-body" style="padding-top: 0;">
                    @if($customer->image == null) No image @else
                    <img src="{{ asset('storage/' . $customer->image) }}" alt="Customer Image" style="max-height: 100px; max-width: 100px;" />
                    @endif
                </div>
                <!-- panel-body -->
                <hr style="margin: 0;" />
                <div class="panel-heading" style="border-bottom: 0;">
                    <h3 class="panel-title">Created At</h3>
                </div>

                <div class="panel-body" style="padding-top: 0;">
                    {{$customer->created_at}}
                </div>
                <!-- panel-body -->
            </div>
        </div>
    </div>
</div>

<div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="voyager-trash"></i> Are you sure you want to delete this post?</h4>
            </div>
            <div class="modal-footer">
                <form action="{{ route('customer.delete', ['id' => ':id']) }}" id="delete_form" method="POST">
                    @method('DELETE') @csrf
                    <input type="submit" class="btn btn-danger pull-right delete-confirm" value="Yes, Delete it!" />
                </form>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancel</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1:8000/admin/voyager-assets?path=js%2Fapp.js"></script>

<script>
    var deleteFormAction;
    $(".delete").on("click", function (e) {
        var customerId = $(this).data("id");
        var form = $("#delete_form")[0];

        if (!deleteFormAction) {
            // Save form action initial value
            deleteFormAction = form.action;
        }

        form.action = deleteFormAction.replace(":customer", customerId);
        $("#delete_modal").modal("show");
    });
</script>

@endsection