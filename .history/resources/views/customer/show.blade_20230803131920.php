<div class="side-body padding-top">
    <h1 class="page-title">
<i class="voyager-news"></i> Viewing Post &nbsp;

    <a href="{{route('customer.edit', $customer->id)}}" class="btn btn-info">
<i class="glyphicon glyphicon-pencil"></i> <span class="hidden-xs hidden-sm">Edit</span>
</a>
                            <a href="javascript:;" title="Delete" class="btn btn-danger delete" data-id="1" id="delete-1">
    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
</a>
                    <a href="{{route('customer.index')}}" class="btn btn-warning">
<i class="glyphicon glyphicon-list"></i> <span class="hidden-xs hidden-sm">Return to List</span>
</a>
</h1>
    <div id="voyager-notifications"></div>
    <div class="page-content read container-fluid">
<div class="row">
<div class="col-md-12">

<div class="panel panel-bordered" style="padding-bottom:5px;">
    <!-- form start -->
                                                    <div class="panel-heading" style="border-bottom:0;">
            <h3 class="panel-title">Name</h3>
        </div>

        <div class="panel-body" style="padding-top:0;">
                                                                            <p></p>
                                    </div><!-- panel-body -->
                                    <hr style="margin:0;">
                                                                            <div class="panel-heading" style="border-bottom:0;">
            <h3 class="panel-title">Category</h3>
        </div>

        <div class="panel-body" style="padding-top:0;">
                                                                            <p></p>
                                    </div><!-- panel-body -->
                                    <hr style="margin:0;">
                                                                            <div class="panel-heading" style="border-bottom:0;">
            <h3 class="panel-title">Title</h3>
        </div>

        <div class="panel-body" style="padding-top:0;">
                                                                            <p>Lorem Ipsum Post</p>
                                    </div><!-- panel-body -->
                                    <hr style="margin:0;">
                                                                            <div class="panel-heading" style="border-bottom:0;">
            <h3 class="panel-title">Excerpt</h3>
        </div>

        <div class="panel-body" style="padding-top:0;">
                                                                            <p>This is the excerpt for the Lorem Ipsum Post</p>
                                    </div><!-- panel-body -->
                                    <hr style="margin:0;">
                                                                            <div class="panel-heading" style="border-bottom:0;">
            <h3 class="panel-title">Body</h3>
        </div>

        <div class="panel-body" style="padding-top:0;">
                                                                            <p>This is the body of the lorem ipsum post</p>
                                    </div><!-- panel-body -->
                                    <hr style="margin:0;">
                                                                            <div class="panel-heading" style="border-bottom:0;">
            <h3 class="panel-title">Post Image</h3>
        </div>

        <div class="panel-body" style="padding-top:0;">
                                            <img class="img-responsive" src="http://localhost/storage/posts/post1.jpg">
                                    </div><!-- panel-body -->
                                    <hr style="margin:0;">
                                                                            <div class="panel-heading" style="border-bottom:0;">
            <h3 class="panel-title">Slug</h3>
        </div>

        <div class="panel-body" style="padding-top:0;">
                                                                            <p>lorem-ipsum-post</p>
                                    </div><!-- panel-body -->
                                    <hr style="margin:0;">
                                                                            <div class="panel-heading" style="border-bottom:0;">
            <h3 class="panel-title">Meta Description</h3>
        </div>

        <div class="panel-body" style="padding-top:0;">
                                                                            <p>This is the meta description</p>
                                    </div><!-- panel-body -->
                                    <hr style="margin:0;">
                                                                            <div class="panel-heading" style="border-bottom:0;">
            <h3 class="panel-title">Meta Keywords</h3>
        </div>

        <div class="panel-body" style="padding-top:0;">
                                                                            <p>keyword1, keyword2, keyword3</p>
                                    </div><!-- panel-body -->
                                    <hr style="margin:0;">
                                                                            <div class="panel-heading" style="border-bottom:0;">
            <h3 class="panel-title">Status</h3>
        </div>

        <div class="panel-body" style="padding-top:0;">
                                            published                                                    </div><!-- panel-body -->
                                    <hr style="margin:0;">
                                                                            <div class="panel-heading" style="border-bottom:0;">
            <h3 class="panel-title">Created At</h3>
        </div>

        <div class="panel-body" style="padding-top:0;">
                                                                                2023-08-02 08:05:10
                                                                    </div><!-- panel-body -->
                                    <hr style="margin:0;">
                                                                            <div class="panel-heading" style="border-bottom:0;">
            <h3 class="panel-title">SEO Title</h3>
        </div>

        <div class="panel-body" style="padding-top:0;">
                                                                            <p></p>
                                    </div><!-- panel-body -->
                                    <hr style="margin:0;">
                                                                            <div class="panel-heading" style="border-bottom:0;">
            <h3 class="panel-title">Featured</h3>
        </div>

        <div class="panel-body" style="padding-top:0;">
                                                                            0
                                                                    </div><!-- panel-body -->
                            
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
    <form action="http://127.0.0.1:8000/admin/posts" id="delete_form" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="m42DZHnHE7dyxAxU7VuZmiRfEeBQpC8z47jLl9Ns">
        <input type="submit" class="btn btn-danger pull-right delete-confirm" value="Yes, Delete it! post">
    </form>
    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancel</button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>