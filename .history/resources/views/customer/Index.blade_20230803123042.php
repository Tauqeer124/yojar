@extends('voyager::master')

@section('content')
<div class="side-body padding-top">
    <div class="container-fluid">
<h1 class="page-title">
<i class="voyager-news"></i> Posts
</h1>
    <a href="http://127.0.0.1:8000/admin/posts/create" class="btn btn-success btn-add-new">
<i class="voyager-plus"></i> <span>Add New</span>
</a>
            <a class="btn btn-danger" id="bulk_delete_btn"><i class="voyager-trash"></i> <span>Bulk Delete</span></a>


<!-- /.modal -->

<script>
window.onload = function () {
// Bulk delete selectors
var $bulkDeleteBtn = $('#bulk_delete_btn');
var $bulkDeleteModal = $('#bulk_delete_modal');
var $bulkDeleteCount = $('#bulk_delete_count');
var $bulkDeleteDisplayName = $('#bulk_delete_display_name');
var $bulkDeleteInput = $('#bulk_delete_input');
// Reposition modal to prevent z-index issues
$bulkDeleteModal.appendTo('body');
// Bulk delete listener
$bulkDeleteBtn.click(function () {
var ids = [];
var $checkedBoxes = $('#dataTable input[type=checkbox]:checked').not('.select_all');
var count = $checkedBoxes.length;
if (count) {
// Reset input value
$bulkDeleteInput.val('');
// Deletion info
var displayName = count > 1 ? 'Posts' : 'Post';
displayName = displayName.toLowerCase();
$bulkDeleteCount.html(count);
$bulkDeleteDisplayName.html(displayName);
// Gather IDs
$.each($checkedBoxes, function () {
var value = $(this).val();
ids.push(value);
})
// Set input value
$bulkDeleteInput.val(ids);
// Show modal
$bulkDeleteModal.modal('show');
} else {
// No row selected
toastr.warning('You haven&#039;t selected anything to delete');
}
});
}
</script>
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
            <div id="dataTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="dataTable" class="table table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">
                <thead>
                    <tr role="row"><th class="dt-not-orderable sorting_disabled" rowspan="1" colspan="1" aria-label="
                                
                            " style="width: 21px;">
                                <input type="checkbox" class="select_all">
                            </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                                                        Title
                                                                    : activate to sort column ascending" style="width: 120.802px;">
                                                                        Name
                                                                    </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                                                        Post Image
                                                                    : activate to sort column ascending" style="width: 89.9375px;">
                                                                        Email
                                                                    </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                                                        Status
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
                                                                    </th><th class="actions text-right dt-not-orderable sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 218.979px;">Actions</th></tr>
                </thead>
                <tbody>
                                                        
                    @foreach($customers as $user)            
                                                        
                                                        
                                                    <tr role="row" class="odd">
                                                                    <td>
                                <input type="checkbox" name="row_id" id="checkbox_1" value="1">
                            </td>
                                                                                                                                                        <td>
                                                                                                                                        <div>{{$user->name}}</div>
                                                                            </td>
                                                                                                                <td>
                                                                                                                    {{$user->email}}
                                                                            </td>
                                                                                                                <td>  {{$user->address}}
                                
                                    

                                                                            </td>
                                                                                                                <td>
                                                                                                                    image
                                                                                                                                </td>
                                                                                                                <td>
                                                                                                                                        <div>{{$user->created_at}}</div>
                                                                            </td>
                                                                                                                
                                                                <td class="no-sort no-click bread-actions">
                                                                                                                                <a href="javascript:;" title="Delete" class="btn btn-sm btn-danger pull-right delete" data-id="1" id="delete-1">
<i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
</a>
                                                                                                                                                                                                                                                                                                                                                                                            <a href="http://127.0.0.1:8000/admin/posts/1/edit" title="Edit" class="btn btn-sm btn-primary pull-right edit">
<i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
</a>
                                                                                                                                                                                            <a href="http://127.0.0.1:8000/admin/posts/1" title="View" class="btn btn-sm btn-warning pull-right view">
<i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">View</span>
</a>
                                                                                                                                </td>
                    </tr></tr></tbody>
            </table></div></div><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dataTable" tabindex="0" id="dataTable_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dataTable" tabindex="0"><a href="#">1</a></li><li class="paginate_button next disabled" aria-controls="dataTable" tabindex="0" id="dataTable_next"><a href="#">Next</a></li></ul></div></div></div></div>
        </div>
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
    <h4 class="modal-title"><i class="voyager-trash"></i> Are you sure you want to delete this post?</h4>
</div>
<div class="modal-footer">
    <form action="#" id="delete_form" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="m42DZHnHE7dyxAxU7VuZmiRfEeBQpC8z47jLl9Ns">
        <input type="submit" class="btn btn-danger pull-right delete-confirm" value="Yes, Delete it!">
    </form>
    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancel</button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
@