@extends('voyager::master')

@section('content')
<div class="side-body padding-top">
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-news"></i> Customers
        </h1>
        <a href="{{route('customer.add')}}" class="btn btn-success btn-add-new">
            <i class="voyager-plus"></i> <span>Add New</span>
        </a>


<!-- /.modal -->


                                                                                                                                                    </div>
        <div id="voyager-notifications"></div>
        <div class="page-content browse container-fluid">
            <div class="alerts">
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div id="dataTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><table id="dataTable" class="table table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                            name
                                            : activate to sort column ascending" style="width: 120.802px;">
                                            Name
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                            email
                                            : activate to sort column ascending" style="width: 89.9375px;">
                                            Email
                                        </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                            address
                                            : activate to sort column ascending" style="width: 59.4688px;">
                                            Address
                                        </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                            image
                                            : activate to sort column ascending" style="width: 139.885px;">
                                            Image
                                        </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                            created_at
                                            : activate to sort column ascending" style="width: 72.8958px;">
                                            Created_At
                                        </th><th class="actions text-right dt-not-orderable sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 218.979px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                        
                                    @foreach($customers as $user)            
                                        <tr role="row" class="odd">
                                            <td>
                                                <div>{{$user->name}}</div>
                                            </td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->address}}</td>
                                            <td>{{{</td>
                                            <td><div>{{$user->created_at}}</div> </td>
                                            <td class="no-sort no-click bread-actions">
                                                <a href="javascript:;" title="Delete" class="btn btn-sm btn-danger pull-right delete" data-id="{{$user->id}}" id="">
                                                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                                </a>
                                                <a href="{{route('customer.edit',$user->id)}}" title="Edit" class="btn btn-sm btn-primary pull-right edit">
                                                    <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                                </a>
                                                <a href="{{route('customer.view',$user->id)}}" title="View" class="btn btn-sm btn-warning pull-right view">
                                                    <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">View</span>
                                                </a>
                                                                                                                                </td>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </div>
                        </table>
                        </div>
                    <div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite"></div></div></div></div>
        </div>
                            </div>
</div>

</div>
</div>


<div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title"><i class="voyager-trash"></i> Are you sure you want to delete this Customer?</h4>
</div>
<div class="modal-footer">
    <form action="{{route('customer.delete',$user->id)}}" id="delete_form" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="m42DZHnHE7dyxAxU7VuZmiRfEeBQpC8z47jLl9Ns">
        <input type="submit" class="btn btn-danger pull-right delete-confirm" value="Yes, Delete it!">
    </form>
    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancel</button>
</div>
<script type="text/javascript" src="http://127.0.0.1:8000/admin/voyager-assets?path=js%2Fapp.js"></script>
<script>
    $(document).ready(function () {
                        var table = $('#dataTable').DataTable({"order":[],"language":{"sEmptyTable":"No data available in table","sInfo":"Showing _START_ to _END_ of _TOTAL_ entries","sInfoEmpty":"Showing 0 to 0 of 0 entries","sInfoFiltered":"(filtered from _MAX_ total entries)","sInfoPostFix":"","sInfoThousands":",","sLengthMenu":"Show _MENU_ entries","sLoadingRecords":"Loading...","sProcessing":"Processing...","sSearch":"Search:","sZeroRecords":"No matching records found","oPaginate":{"sFirst":"First","sLast":"Last","sNext":"Next","sPrevious":"Previous"},"oAria":{"sSortAscending":": activate to sort column ascending","sSortDescending":": activate to sort column descending"}},"columnDefs":[{"targets":"dt-not-orderable","searchable":false,"orderable":false}]});
        
                    $('.select_all').on('click', function(e) {
            $('input[name="row_id"]').prop('checked', $(this).prop('checked')).trigger('change');
        });
    });


    
    var deleteFormAction;
$('td').on('click', '.delete', function (e) {
    var customerId = $(this).data('id');
    console.log(customerId);
    $('#delete_form')[0].action = '{{ route('customer.delete', ['id' => ':id']) }}'.replace(':id', customerId);
    $('#delete_modal').modal('show');
});


        
</script>
@endsection