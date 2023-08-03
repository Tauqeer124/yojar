@extends('voyager::master')

@section('content')
<div class="container-fluid">
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
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="">
            </div>
        </div>

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



<body class="voyager posts">

    <div id="voyager-loader" style="display: none;">
                    <img src="http://127.0.0.1:8000/admin/voyager-assets?path=images%2Flogo-icon.png" alt="Voyager Loader">
        </div>
    
    
    <div class="app-container" style="">
        <div class="fadetoblack visible-xs"></div>
        <div class="row content-container">
            <nav class="navbar navbar-default navbar-fixed-top navbar-top" style="">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="hamburger btn-link">
                    <span class="hamburger-inner"></span>
                </button>
                            <ol class="breadcrumb hidden-xs">
                                                        <li class="active">
                            <a href="http://127.0.0.1:8000/admin"><i class="voyager-boat"></i> Dashboard</a>
                        </li>
                                                                                                    <li>
                                    <a href="http://127.0.0.1:8000/admin/posts">Posts</a>
                                </li>
                                                                                                                            <li>Create</li>
                                                                            </ol>
                        </div>
            <ul class="nav navbar-nav  navbar-right ">
                <li class="dropdown profile">
                    <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button" aria-expanded="false"><img src="http://localhost/storage/users/default.png" class="profile-img"> <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-animated">
                        <li class="profile-img">
                            <img src="http://localhost/storage/users/default.png" class="profile-img">
                            <div class="profile-body">
                                <h5>Admin</h5>
                                <h6>admin@admin.com</h6>
                            </div>
                        </li>
                        <li class="divider"></li>
                                                                                    <li class="class-full-of-rum">
                                                    <a href="http://127.0.0.1:8000/admin/profile">
                                                            <i class="voyager-person"></i>
                                                            Profile
                            </a>
                                                </li>
                                            <li>
                                                    <a href="/" target="_blank">
                                                            <i class="voyager-home"></i>
                                                            Home
                            </a>
                                                </li>
                                            <li>
                                                    <form action="http://127.0.0.1:8000/admin/logout" method="POST">
                                <input type="hidden" name="_token" value="m42DZHnHE7dyxAxU7VuZmiRfEeBQpC8z47jLl9Ns">
                                <button type="submit" class="btn btn-danger btn-block">
                                                                    <i class="voyager-power"></i>
                                                                    Logout
                                </button>
                            </form>
                                                </li>
                                                            </ul>
                </li>
            </ul>
        </div>
    </nav>
            <div class="side-menu sidebar-inverse ps ps--active-x ps--active-y" style="">
        <nav class="navbar navbar-default" role="navigation">
            <div class="side-menu-container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="http://127.0.0.1:8000/admin">
                        <div class="logo-icon-container">
                                                                                <img src="http://127.0.0.1:8000/admin/voyager-assets?path=images%2Flogo-icon-light.png" alt="Logo Icon">
                                                </div>
                        <div class="title">Voyager</div>
                    </a>
                </div><!-- .navbar-header -->
    
                <div class="panel widget center bgimage" style="background-image:url(http://127.0.0.1:8000/admin/voyager-assets?path=images%2Fbg.jpg); background-size: cover; background-position: 0px;">
                    <div class="dimmer"></div>
                    <div class="panel-content">
                        <img src="http://localhost/storage/users/default.png" class="avatar" alt="Admin avatar">
                        <h4>Admin</h4>
                        <p>admin@admin.com</p>
    
                        <a href="http://127.0.0.1:8000/admin/profile" class="btn btn-primary">Profile</a>
                        <div style="clear:both"></div>
                    </div>
                </div>
    
            </div>
            <div id="adminmenu"><ul class="nav navbar-nav"><li class=""><a target="_self" href="http://127.0.0.1:8000/admin"><span class="icon voyager-boat"></span> <span class="title">Dashboard</span></a> <!----></li><li class=""><a target="_self" href="http://127.0.0.1:8000/admin/roles"><span class="icon voyager-lock"></span> <span class="title">Roles</span></a> <!----></li><li class=""><a target="_self" href="http://127.0.0.1:8000/admin/users"><span class="icon voyager-person"></span> <span class="title">Users</span></a> <!----></li><li class=""><a target="_self" href="http://127.0.0.1:8000/admin/media"><span class="icon voyager-images"></span> <span class="title">Media</span></a> <!----></li><li class="active"><a target="_self" href="http://127.0.0.1:8000/admin/posts"><span class="icon voyager-news"></span> <span class="title">Posts</span></a> <!----></li><li class=""><a target="_self" href="http://127.0.0.1:8000/admin/pages"><span class="icon voyager-file-text"></span> <span class="title">Pages</span></a> <!----></li><li class=""><a target="_self" href="http://127.0.0.1:8000/admin/categories"><span class="icon voyager-categories"></span> <span class="title">Categories</span></a> <!----></li><li class="dropdown"><a target="_self" href="#5-dropdown-element" data-toggle="collapse" aria-expanded="false"><span class="icon voyager-tools"></span> <span class="title">Tools</span></a> <div id="5-dropdown-element" class="panel-collapse collapse "><div class="panel-body"><ul class="nav navbar-nav"><li class=""><a target="_self" href="http://127.0.0.1:8000/admin/menus"><span class="icon voyager-list"></span> <span class="title">Menu Builder</span></a> <!----></li><li class=""><a target="_self" href="http://127.0.0.1:8000/admin/database"><span class="icon voyager-data"></span> <span class="title">Database</span></a> <!----></li><li class=""><a target="_self" href="http://127.0.0.1:8000/admin/compass"><span class="icon voyager-compass"></span> <span class="title">Compass</span></a> <!----></li><li class=""><a target="_self" href="http://127.0.0.1:8000/admin/bread"><span class="icon voyager-bread"></span> <span class="title">BREAD</span></a> <!----></li></ul></div></div></li><li class=""><a target="_self" href="http://127.0.0.1:8000/admin/settings"><span class="icon voyager-settings"></span> <span class="title">Settings</span></a> <!----></li><li class=""><a target="_self" href="http://127.0.0.1:8000/admin/products"><span class="icon voyager-bag"></span> <span class="title">Products</span></a> <!----></li></ul></div>
        </nav>
    <div class="ps__rail-x" style="width: 60px; left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 14px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 318px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 158px;"></div></div></div>
            <script>
                (function(){
                        var appContainer = document.querySelector('.app-container'),
                            sidebar = appContainer.querySelector('.side-menu'),
                            navbar = appContainer.querySelector('nav.navbar.navbar-top'),
                            loader = document.getElementById('voyager-loader'),
                            hamburgerMenu = document.querySelector('.hamburger'),
                            sidebarTransition = sidebar.style.transition,
                            navbarTransition = navbar.style.transition,
                            containerTransition = appContainer.style.transition;
    
                        sidebar.style.WebkitTransition = sidebar.style.MozTransition = sidebar.style.transition =
                        appContainer.style.WebkitTransition = appContainer.style.MozTransition = appContainer.style.transition =
                        navbar.style.WebkitTransition = navbar.style.MozTransition = navbar.style.transition = 'none';
    
                        if (window.innerWidth > 768 && window.localStorage && window.localStorage['voyager.stickySidebar'] == 'true') {
                            appContainer.className += ' expanded no-animation';
                            loader.style.left = (sidebar.clientWidth/2)+'px';
                            hamburgerMenu.className += ' is-active no-animation';
                        }
    
                       navbar.style.WebkitTransition = navbar.style.MozTransition = navbar.style.transition = navbarTransition;
                       sidebar.style.WebkitTransition = sidebar.style.MozTransition = sidebar.style.transition = sidebarTransition;
                       appContainer.style.WebkitTransition = appContainer.style.MozTransition = appContainer.style.transition = containerTransition;
                })();
            </script>
            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body padding-top">
                        <h1 class="page-title">
            <i class="voyager-news"></i>
            Add Post
        </h1>
                        <div id="voyager-notifications"></div>
                        <div class="page-content container-fluid">
            <form class="form-edit-add" role="form" action="http://127.0.0.1:8000/admin/posts" method="POST" enctype="multipart/form-data">
                <!-- PUT Method if we are editing -->
                            <input type="hidden" name="_token" value="m42DZHnHE7dyxAxU7VuZmiRfEeBQpC8z47jLl9Ns">
    
                <div class="row">
                    <div class="col-md-8">
                        <!-- ### TITLE ### -->
                        <div class="panel">
                            
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="voyager-character"></i> Post Title
                                    <span class="panel-desc"> The title for your post</span>
                                </h3>
                                <div class="panel-actions">
                                    <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                                            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="">
                            </div>
                        </div>
    
                        <!-- ### CONTENT ### -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Post Content</h3>
                                <div class="panel-actions">
                                    <a class="panel-action voyager-resize-full" data-toggle="panel-fullscreen" aria-hidden="true"></a>
                                </div>
                            </div>
    
                            <div class="panel-body">
                                                                                        <textarea class="form-control richTextBox" name="body" id="richtextbody" aria-hidden="true" style="display: none;">    
    </textarea><div role="application" class="tox tox-tinymce" aria-disabled="false" style="visibility: hidden; height: 600px;"><div class="tox-editor-container"><div data-alloy-vertical-dir="toptobottom" class="tox-editor-header"><div role="group" class="tox-toolbar-overlord" aria-disabled="false"><div role="group" class="tox-toolbar__primary"><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Bold" title="Bold" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 0 1-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8Zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4Zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4Z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Italic" title="Italic" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="m16.7 4.7-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8Z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Underline" title="Underline" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M16 5c.6 0 1 .4 1 1v5.5a4 4 0 0 1-.4 1.8l-1 1.4a5.3 5.3 0 0 1-5.5 1 5 5 0 0 1-1.6-1c-.5-.4-.8-.9-1.1-1.4a4 4 0 0 1-.4-1.8V6c0-.6.4-1 1-1s1 .4 1 1v5.5c0 .3 0 .6.2 1l.6.7a3.3 3.3 0 0 0 2.2.8 3.4 3.4 0 0 0 2.2-.8c.3-.2.4-.5.6-.8l.2-.9V6c0-.6.4-1 1-1ZM8 17h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 0 1 0-2Z" fill-rule="evenodd"></path></svg></span></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><div aria-pressed="false" aria-label="Text color" title="Text color" role="button" aria-haspopup="true" tabindex="-1" unselectable="on" class="tox-split-button" aria-disabled="false" aria-expanded="false" aria-describedby="aria_8291236571551691041971022" style="user-select: none;"><span role="presentation" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><g fill-rule="evenodd"><path id="tox-icon-text-color__color" d="M3 18h18v3H3z" fill="#000000"></path><path d="M8.7 16h-.8a.5.5 0 0 1-.5-.6l2.7-9c.1-.3.3-.4.5-.4h2.8c.2 0 .4.1.5.4l2.7 9a.5.5 0 0 1-.5.6h-.8a.5.5 0 0 1-.4-.4l-.7-2.2c0-.3-.3-.4-.5-.4h-3.4c-.2 0-.4.1-.5.4l-.7 2.2c0 .3-.2.4-.4.4Zm2.6-7.6-.6 2a.5.5 0 0 0 .5.6h1.6a.5.5 0 0 0 .5-.6l-.6-2c0-.3-.3-.4-.5-.4h-.4c-.2 0-.4.1-.5.4Z"></path></g></svg></span></span><span role="presentation" class="tox-tbtn tox-split-button__chevron" aria-disabled="false"><svg width="10" height="10" focusable="false"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z" fill-rule="nonzero"></path></svg></span><span aria-hidden="true" id="aria_8291236571551691041971022" style="display: none;">To open the popup, press Shift+Enter</span></div><div aria-pressed="false" aria-label="Background color" title="Background color" role="button" aria-haspopup="true" tabindex="-1" unselectable="on" class="tox-split-button" aria-disabled="false" aria-expanded="false" aria-describedby="aria_8127902261571691041971025" style="user-select: none;"><span role="presentation" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><g fill-rule="evenodd"><path id="tox-icon-highlight-bg-color__color" d="M3 18h18v3H3z" fill="#000000"></path><path fill-rule="nonzero" d="M7.7 16.7H3l3.3-3.3-.7-.8L10.2 8l4 4.1-4 4.2c-.2.2-.6.2-.8 0l-.6-.7-1.1 1.1zm5-7.5L11 7.4l3-2.9a2 2 0 0 1 2.6 0L18 6c.7.7.7 2 0 2.7l-2.9 2.9-1.8-1.8-.5-.6"></path></g></svg></span></span><span role="presentation" class="tox-tbtn tox-split-button__chevron" aria-disabled="false"><svg width="10" height="10" focusable="false"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 0 1 0-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8Z" fill-rule="nonzero"></path></svg></span><span aria-hidden="true" id="aria_8127902261571691041971025" style="display: none;">To open the popup, press Shift+Enter</span></div></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Align left" title="Align left" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 4h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Zm0-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Align center" title="Align center" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm3 4h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 1 1 0-2Zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 0 1 0-2Zm-3-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Align right" title="Align right" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 1 1 0-2Zm6 4h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm-6-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 0 1 0-2Z" fill-rule="evenodd"></path></svg></span></button></div><div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Bullet list" title="Bullet list" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M11 5h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0 6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0 6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2ZM4.5 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1Zm0 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1Zm0 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1Z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Numbered list" title="Numbered list" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M10 17h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 0 1 0-2Zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 1 1 0-2ZM6 4v3.5c0 .3-.2.5-.5.5a.5.5 0 0 1-.5-.5V5h-.5a.5.5 0 0 1 0-1H6Zm-1 8.8.2.2h1.3c.3 0 .5.2.5.5s-.2.5-.5.5H4.9a1 1 0 0 1-.9-1V13c0-.4.3-.8.6-1l1.2-.4.2-.3a.2.2 0 0 0-.2-.2H4.5a.5.5 0 0 1-.5-.5c0-.3.2-.5.5-.5h1.6c.5 0 .9.4.9 1v.1c0 .4-.3.8-.6 1l-1.2.4-.2.3ZM7 17v2c0 .6-.4 1-1 1H4.5a.5.5 0 0 1 0-1h1.2c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.4a.4.4 0 1 1 0-.8h1.3c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.5a.5.5 0 1 1 0-1H6c.6 0 1 .4 1 1Z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Decrease indent" title="Decrease indent" type="button" tabindex="-1" class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M7 5h12c.6 0 1 .4 1 1s-.4 1-1 1H7a1 1 0 1 1 0-2Zm5 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 0 1 0-2Zm0 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 0 1 0-2Zm-5 4h12a1 1 0 0 1 0 2H7a1 1 0 0 1 0-2Zm1.6-3.8a1 1 0 0 1-1.2 1.6l-3-2a1 1 0 0 1 0-1.6l3-2a1 1 0 0 1 1.2 1.6L6.8 12l1.8 1.2Z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Increase indent" title="Increase indent" type="button" tabindex="-1" class="tox-tbtn" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M7 5h12c.6 0 1 .4 1 1s-.4 1-1 1H7a1 1 0 1 1 0-2Zm5 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 0 1 0-2Zm0 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 0 1 0-2Zm-5 4h12a1 1 0 0 1 0 2H7a1 1 0 0 1 0-2Zm-2.6-3.8L6.2 12l-1.8-1.2a1 1 0 0 1 1.2-1.6l3 2a1 1 0 0 1 0 1.6l-3 2a1 1 0 1 1-1.2-1.6Z" fill-rule="evenodd"></path></svg></span></button></div><div role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="More..." title="More..." aria-haspopup="true" type="button" tabindex="-1" data-alloy-tabstop="true" class="tox-tbtn" aria-expanded="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24" focusable="false"><path d="M6 10a2 2 0 0 0-2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2 2 2 0 0 0-2-2Zm12 0a2 2 0 0 0-2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2 2 2 0 0 0-2-2Zm-6 0a2 2 0 0 0-2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2 2 2 0 0 0-2-2Z" fill-rule="nonzero"></path></svg></span></button></div></div></div><div class="tox-anchorbar"></div></div><div class="tox-sidebar-wrap"><div class="tox-edit-area"><iframe id="richtextbody_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area" class="tox-edit-area__iframe" srcdoc="<!DOCTYPE html><html><head><meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot; /></head><body id=&quot;tinymce&quot; class=&quot;mce-content-body &quot; data-id=&quot;richtextbody&quot; aria-label=&quot;Rich Text Area. Press ALT-0 for help.&quot;><br></body></html>"></iframe></div><div role="complementary" class="tox-sidebar"><div data-alloy-tabstop="true" tabindex="-1" class="tox-sidebar__slider tox-sidebar--sliding-closed" style="width: 0px;"><div class="tox-sidebar__pane-container"></div></div></div></div></div><div class="tox-statusbar"><div class="tox-statusbar__text-container"><div role="navigation" data-alloy-tabstop="true" class="tox-statusbar__path" aria-disabled="false"><div data-index="0" aria-level="1" role="button" tabindex="-1" class="tox-statusbar__path-item" aria-disabled="false">p</div></div><span class="tox-statusbar__branding"><a href="https://www.tiny.cloud/powered-by-tiny?utm_campaign=editor_referral&amp;utm_medium=poweredby&amp;utm_source=tinymce&amp;utm_content=v6" rel="noopener" target="_blank" aria-label="Powered by Tiny" tabindex="-1"><svg width="50px" height="16px" viewBox="0 0 50 16" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M10.143 0c2.608.015 5.186 2.178 5.186 5.331 0 0 .077 3.812-.084 4.87-.361 2.41-2.164 4.074-4.65 4.496-1.453.284-2.523.49-3.212.623-.373.071-.634.122-.785.152-.184.038-.997.145-1.35.145-2.732 0-5.21-2.04-5.248-5.33 0 0 0-3.514.03-4.442.093-2.4 1.758-4.342 4.926-4.963 0 0 3.875-.752 4.036-.782.368-.07.775-.1 1.15-.1Zm1.826 2.8L5.83 3.989v2.393l-2.455.475v5.968l6.137-1.189V9.243l2.456-.476V2.8ZM5.83 6.382l3.682-.713v3.574l-3.682.713V6.382Zm27.173-1.64-.084-1.066h-2.226v9.132h2.456V7.743c-.008-1.151.998-2.064 2.149-2.072 1.15-.008 1.987.92 1.995 2.072v5.065h2.455V7.359c-.015-2.18-1.657-3.929-3.837-3.913a3.993 3.993 0 0 0-2.908 1.296Zm-6.3-4.266L29.16 0v2.387l-2.456.475V.476Zm0 3.2v9.132h2.456V3.676h-2.456Zm18.179 11.787L49.11 3.676H46.58l-1.612 4.527-.46 1.382-.384-1.382-1.611-4.527H39.98l3.3 9.132L42.15 16l2.732-.537ZM22.867 9.738c0 .752.568 1.075.921 1.075.353 0 .668-.047.998-.154l.537 1.765c-.23.154-.92.537-2.225.537-1.305 0-2.655-.997-2.686-2.686a136.877 136.877 0 0 1 0-4.374H18.8V3.676h1.612v-1.98l2.455-.476v2.456h2.302V5.9h-2.302v3.837Z"></path>
    </svg></a></span></div><div title="Resize" data-alloy-tabstop="true" tabindex="-1" class="tox-statusbar__resize-handle"><svg width="10" height="10" focusable="false"><g fill-rule="nonzero"><path d="M8.1 1.1A.5.5 0 1 1 9 2l-7 7A.5.5 0 1 1 1 8l7-7ZM8.1 5.1A.5.5 0 1 1 9 6l-3 3A.5.5 0 1 1 5 8l3-3Z"></path></g></svg></div></div><div aria-hidden="true" class="tox-throbber" style="display: none;"></div></div>
    
    
                            </div>
                        </div><!-- .panel -->
    
                        <!-- ### EXCERPT ### -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Excerpt <small>Small description of this post</small></h3>
                                <div class="panel-actions">
                                    <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                                            <textarea class="form-control" name="excerpt"></textarea>
                            </div>
                        </div>
    
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Additional Fields</h3>
                                <div class="panel-actions">
                                    <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div>
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <!-- ### DETAILS ### -->
                        <div class="panel panel panel-bordered panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="icon wb-clipboard"></i> Post Details</h3>
                                <div class="panel-actions">
                                    <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="slug">URL slug</label>
                                                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" data-slug-origin="title" data-slug-forceupdate="true" value="">
                                </div>
                                <div class="form-group">
                                    <label for="status">Post Status</label>
                                    <select class="form-control" name="status">
                                        <option value="PUBLISHED">published</option>
                                        <option value="DRAFT">draft</option>
                                        <option value="PENDING">pending</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Post Category</label>
                                    <select class="form-control" name="category_id">
                                                                                <option value="1">Category 1</option>
                                                                                <option value="2">Category 2</option>
                                                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="featured">Featured</label>
                                    <input type="checkbox" name="featured">
                                </div>
                            </div>
                        </div>
    
                        <!-- ### IMAGE ### -->
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
    
                        <!-- ### SEO CONTENT ### -->
                        <div class="panel panel-bordered panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="icon wb-search"></i> SEO Content</h3>
                                <div class="panel-actions">
                                    <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                                                    <textarea class="form-control" name="meta_description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="meta_keywords">Meta Keywords</label>
                                                                    <textarea class="form-control" name="meta_keywords"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="seo_title">SEO Title</label>
                                                                    <input type="text" class="form-control" name="seo_title" placeholder="SEO Title" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                                            <button type="submit" class="btn btn-primary pull-right">
                          <i class="icon wb-plus-circle"></i> Create New Post                 </button>
                        </form>
    
            <div style="display:none">
                <input type="hidden" id="upload_url" value="http://127.0.0.1:8000/admin/upload">
                <input type="hidden" id="upload_type_slug" value="posts">
            </div>
        </div>
    
        <div class="modal fade modal-danger" id="confirm_delete_modal">
            <div class="modal-dialog">
                <div class="modal-content">
    
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title"><i class="voyager-warning"></i> Are you sure</h4>
                    </div>
    
                    <div class="modal-body">
                        <h4>Are you sure you want to delete '<span class="confirm_delete_name"></span>'</h4>
                    </div>
    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" id="confirm_delete">Yes, Delete it!</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete File Modal -->
                </div>
            </div>
        </div>
    </div>
    <footer class="app-footer">
        <div class="site-footer-right">
                        Made with <i class="voyager-heart"></i> by <a href="http://thecontrolgroup.com" target="_blank">The Control Group</a>
                                        - v1.6.0
                </div>
    </footer>
    
    <!-- Javascript Libs -->
    
    
    <script type="text/javascript" src="http://127.0.0.1:8000/admin/voyager-assets?path=js%2Fapp.js"></script>
    
    <script>
        
        </script>
    <script>
        Vue.component('media-manager', {
            template: `<div>
        <div v-if="hidden_element" :id="'dd_'+this._uid" class="dd">
            <ol id="files" class="dd-list">
                <li v-for="file in getSelectedFiles()" class="dd-item" :data-url="file">
                    <div class="file_link selected" aria-hidden="true" data-toggle="tooltip" data-placement="auto" :title="file">
                        <div class="link_icon">
                            <template v-if="fileIs(file, 'image')">
                                <div class="img_icon" :style="imgIcon('http://localhost/storage/'+file)"></div>
                            </template>
                            <template v-else-if="fileIs(file, 'video')">
                                <i class="icon voyager-video"></i>
                            </template>
                            <template v-else-if="fileIs(file, 'audio')">
                                <i class="icon voyager-music"></i>
                            </template>
                            <template v-else-if="fileIs(file, 'zip')">
                                <i class="icon voyager-archive"></i>
                            </template>
                            <template v-else-if="fileIs(file, 'folder')">
                                <i class="icon voyager-folder"></i>
                            </template>
                            <template v-else>
                                <i class="icon voyager-file-text"></i>
                            </template>
                        </div>
                        <div class="details">
                            <div class="folder">
                                <h4>{{ getFileName(file) }}</h4>
                            </div>
                        </div>
                        <i class="voyager-x dd-nodrag" v-on:click="removeFileFromInput(file)"></i>
                    </div>
                </li>
            </ol>
        </div>
        <div v-if="hidden_element">
            <div class="btn btn-sm btn-default" v-on:click="isExpanded = !isExpanded;" style="width:100%">
                <div v-if="!isExpanded"><i class="voyager-double-down"></i> Open</div>
                <div v-if="isExpanded"><i class="voyager-double-up"></i> Close</div>
            </div>
        </div>
        <div id="toolbar" v-if="showToolbar" :style="isExpanded ? 'display:block' : 'display:none'">
            <div class="btn-group offset-right">
                <button type="button" class="btn btn-primary" id="upload" v-if="allowUpload">
                    <i class="voyager-upload"></i>
                    Upload
                </button>
                <button type="button" class="btn btn-primary" v-if="allowCreateFolder" data-toggle="modal" :data-target="'#create_dir_modal_'+this._uid">
                    <i class="voyager-folder"></i>
                    Add Folder
                </button>
            </div>
            <button type="button" class="btn btn-default" v-on:click="getFiles()">
                <i class="voyager-refresh"></i>
            </button>
            <div class="btn-group offset-right">
                <button type="button" :disabled="selected_files.length == 0" v-if="allowUpload && hidden_element" class="btn btn-default" v-on:click="addSelectedFiles()">
                    <i class="voyager-upload"></i>
                    Add all selected
                </button>
                <button type="button" v-if="showFolders && allowMove" class="btn btn-default" data-toggle="modal" :data-target="'#move_files_modal_'+this._uid">
                    <i class="voyager-move"></i>
                    Move
                </button>
                <button type="button" v-if="allowDelete" :disabled="selected_files.length == 0" class="btn btn-default" data-toggle="modal" :data-target="'#confirm_delete_modal_'+this._uid">
                    <i class="voyager-trash"></i>
                    Delete
                </button>
                <button v-if="allowCrop" :disabled="selected_files.length != 1 || !fileIs(selected_file, 'image')" type="button" class="btn btn-default" data-toggle="modal" :data-target="'#crop_modal_'+this._uid">
                    <i class="voyager-crop"></i>
                    Crop
                </button>
            </div>
        </div>
        <div id="uploadPreview" style="display:none;" v-if="allowUpload"></div>
        <div id="uploadProgress" class="progress active progress-striped" v-if="allowUpload">
            <div class="progress-bar progress-bar-success" style="width: 0"></div>
        </div>
        <div id="content" :style="isExpanded ? 'display:block' : 'display:none'">
            <div class="breadcrumb-container">
                <ol class="breadcrumb filemanager">
                    <li class="media_breadcrumb" v-on:click="setCurrentPath(-1)">
                        <span class="arrow"></span>
                        <strong>Media Library</strong>
                    </li>
                    <li v-for="(folder, i) in getCurrentPath()" v-on:click="setCurrentPath(i)">
                        <span class="arrow"></span>
                        {{ folder }}
                    </li>
                </ol>
            </div>
            <div class="flex">
                <div id="left">
                    <ul id="files">
                        <li v-for="(file) in files" v-on:click="selectFile(file, $event)" v-on:dblclick="openFile(file)" v-if="filter(file)">
                            <div :class="'file_link ' + (isFileSelected(file) ? 'selected' : '')">
                                <div class="link_icon">
                                    <template v-if="fileIs(file, 'image')">
                                        <div class="img_icon" :style="imgIcon(file.path)"></div>
                                    </template>
                                    <template v-else-if="fileIs(file, 'video')">
                                        <i class="icon voyager-video"></i>
                                    </template>
                                    <template v-else-if="fileIs(file, 'audio')">
                                        <i class="icon voyager-music"></i>
                                    </template>
                                    <template v-else-if="fileIs(file, 'zip')">
                                        <i class="icon voyager-archive"></i>
                                    </template>
                                    <template v-else-if="fileIs(file, 'folder')">
                                        <i class="icon voyager-folder"></i>
                                    </template>
                                    <template v-else>
                                        <i class="icon voyager-file-text"></i>
                                    </template>
                                </div>
                                <div class="details">
                                    <div :class="file.type">
                                        <h4>{{ file.name }}</h4>
                                        <small v-if="!fileIs(file, 'folder')">
                                            <span class="file_size">{{ bytesToSize(file.size) }}</span>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div id="file_loader" v-if="is_loading">
                                                                <img src="http://127.0.0.1:8000/admin/voyager-assets?path=images%2Flogo-icon.png" alt="Voyager Loader">
                                            <p>LOADING YOUR MEDIA FILES</p>
                    </div>
    
                    <div id="no_files" v-if="files.length == 0">
                        <h3><i class="voyager-meh"></i> No files in this folder.</h3>
                    </div>
                </div>
                <div id="right">
                    <div class="right_details">
                        <div v-if="selected_files.length > 1" class="right_none_selected">
                            <i class="voyager-list"></i>
                            <p>{{ selected_files.length }} files/folder selected</p>
                        </div>
                        <div v-else-if="selected_files.length == 1" class="right_details">
                            <div class="detail_img">
                                <div v-if="fileIs(selected_file, 'image')">
                                    <img :src="selected_file.path" />
                                </div>
                                <div v-else-if="fileIs(selected_file, 'video')">
                                    <video width="100%" height="auto" ref="videoplayer" controls>
                                        <source :src="selected_file.path" type="video/mp4">
                                        <source :src="selected_file.path" type="video/ogg">
                                        <source :src="selected_file.path" type="video/webm">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                <div v-else-if="fileIs(selected_file, 'audio')">
                                    <i class="voyager-music"></i>
                                    <audio controls style="width:100%; margin-top:5px;" ref="audioplayer">
                                        <source :src="selected_file.path" type="audio/ogg">
                                        <source :src="selected_file.path" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                </div>
                                <div v-else-if="fileIs(selected_file, 'zip')">
                                    <i class="voyager-archive"></i>
                                </div>
                                <div v-else-if="fileIs(selected_file, 'folder')">
                                    <i class="voyager-folder"></i>
                                </div>
                                <div v-else>
                                    <i class="voyager-file-text"></i>
                                </div>
                            </div>
                            <div class="detail_info">
                                <span>
                                    <h4>Title:</h4>
                                    <input v-if="allowRename" type="text" class="form-control" :value="selected_file.name" @keydown.enter.prevent="renameFile">
                                    <p v-else>{{ selected_file.name }}</p>
                                </span>
                                <span>
                                    <h4>Type:</h4>
                                    <p>{{ selected_file.type }}</p>
                                </span>
    
                                <template v-if="!fileIs(selected_file, 'folder')">
                                    <span>
                                        <h4>Size:</h4>
                                        <p><span class="selected_file_size">{{ bytesToSize(selected_file.size) }}</span></p>
                                    </span>
                                    <span>
                                        <h4>Public URL:</h4>
                                        <p><a :href="selected_file.path" target="_blank">Click Here</a></p>
                                    </span>
                                    <span>
                                        <h4>Last Modified:</h4>
                                        <p>{{ dateFilter(selected_file.last_modified) }}</p>
                                    </span>
                                </template>
    
                                <span v-if="fileIs(selected_file, 'image') && selected_file.thumbnails.length > 0">
                                    <h4>Thumbnails</h4><br>
                                    <ul>
                                        <li v-for="thumbnail in selected_file.thumbnails">
                                            <a :href="thumbnail.path" target="_blank">
                                                {{ thumbnail.thumb_name }}
                                            </a>
                                        </li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                        <div v-else class="right_none_selected">
                            <i class="voyager-cursor"></i>
                            <p>No file or folder selected</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Image Modal -->
        <div class="modal fade" :id="'imagemodal_'+this._uid" v-if="selected_file && fileIs(selected_file, 'image')">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <img :src="selected_file.path" class="img img-responsive" style="margin: 0 auto;">
                    </div>
    
                    <div class="modal-footer text-left">
                        <small class="image-title">{{ selected_file.name }}</small>
                    </div>
    
                </div>
            </div>
        </div>
        <!-- End Image Modal -->
    
        <!-- New Folder Modal -->
        <div class="modal fade modal-info" :id="'create_dir_modal_'+this._uid">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><i class="voyager-folder"></i> Add New Folder</h4>
                    </div>
    
                    <div class="modal-body">
                        <input name="new_folder_name" placeholder="New Folder Name" class="form-control" value="" v-model="modals.new_folder.name" />
                    </div>
    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-info" v-on:click="createFolder">Create New Folder
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End New Folder Modal -->
    
        <!-- Delete File Modal -->
        <div class="modal fade modal-danger" :id="'confirm_delete_modal_'+this._uid" v-if="allowDelete">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><i class="voyager-warning"></i> Are you sure</h4>
                    </div>
    
                    <div class="modal-body">
                        <h4>Are you sure you want to delete the following file(s)?</h4>
                        <ul>
                            <li v-for="file in selected_files">{{ file.name }}</li>
                        </ul>
                        <h5 class="folder_warning">
                            <i class="voyager-warning"></i> Deleting a folder will remove all files and folders contained inside
                        </h5>
                    </div>
    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" v-on:click="deleteFiles">Yes, Delete it!
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete File Modal -->
    
        <!-- Move Files Modal -->
        <div class="modal fade modal-warning" :id="'move_files_modal_'+this._uid" v-if="allowMove">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><i class="voyager-move"></i> Move File/Folder</h4>
                    </div>
    
                    <div class="modal-body">
                        <h4>Destination Folder</h4>
                        <select class="form-control" v-model="modals.move_files.destination">
                            <option value="" disabled>Destination Folder</option>
                            <option v-if="current_folder != basePath && showFolders" value="/../">../</option>
                            <option v-for="file in files" v-if="file.type == 'folder' && !selected_files.includes(file)" :value="current_folder+'/'+file.name">{{ file.name }}</option>
                        </select>
                    </div>
    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-warning" v-on:click="moveFiles">Move</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Move File Modal -->
    
        <!-- Crop Image Modal -->
        <div class="modal fade modal-warning" :id="'crop_modal_'+this._uid" v-if="allowCrop">
            <div class="modal-dialog">
                <div class="modal-content">
    
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Crop Image</h4>
                    </div>
    
                    <div class="modal-body">
                        <div class="crop-container">
                            <img :id="'cropping-image_'+this._uid" v-if="selected_files.length == 1 && fileIs(selected_file, 'image')" class="img img-responsive" :src="selected_file.path + '?' + selected_file.last_modified" />
                        </div>
                        <div class="new-image-info">
                            Width:  <span :id="'new-image-width_'+this._uid"></span>, Height: <span :id="'new-image-height_'+this._uid"></span>
                        </div>
                    </div>
    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-warning" v-on:click="crop(false)">Crop</button>
                        <button type="button" class="btn btn-warning" v-on:click="crop(true)">Crop &amp; Create</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Crop Image Modal -->
    </div>
    `,
            props: {
                basePath: {
                    type: String,
                    default: '/'
                },
                filename: {
                    type: String,
                    default: null
                },
                allowMultiSelect: {
                    type: Boolean,
                    default: true
                },
                maxSelectedFiles: {
                    type: Number,
                    default: 0
                },
                minSelectedFiles: {
                    type: Number,
                    default: 0
                },
                showFolders: {
                    type: Boolean,
                    default: true
                },
                showToolbar: {
                    type: Boolean,
                    default: true
                },
                allowUpload: {
                    type: Boolean,
                    default: true
                },
                allowMove: {
                    type: Boolean,
                    default: true
                },
                allowDelete: {
                    type: Boolean,
                    default: true
                },
                allowCreateFolder: {
                    type: Boolean,
                    default: true
                },
                allowRename: {
                    type: Boolean,
                    default: true
                },
                allowCrop: {
                    type: Boolean,
                    default: true
                },
                allowedTypes: {
                    type: Array,
                    default: function() {
                        return [];
                    }
                },
                preSelect: {
                    type: Boolean,
                    default: true,
                },
                element: {
                    type: String,
                    default: ""
                },
                details: {
                    type: Object,
                    default: function() {
                        return {};
                    }
                },
                expanded: {
                    type: Boolean,
                    default: true,
                },
            },
            data: function() {
                return {
                    current_folder: this.basePath,
                      selected_files: [],
                    files: [],
                      is_loading: true,
                    hidden_element: null,
                    isExpanded: this.expanded,
                    modals: {
                        new_folder: {
                            name: ''
                        },
                        move_files: {
                            destination: ''
                        }
                    }
                };
            },
            computed: {
                selected_file: function() {
                    return this.selected_files[0];
                }
            },
            methods: {
                getFiles: function() {
                    var vm = this;
                    vm.is_loading = true;
                    $.post('http://127.0.0.1:8000/admin/media/files', { folder: vm.current_folder, _token: 'm42DZHnHE7dyxAxU7VuZmiRfEeBQpC8z47jLl9Ns', details: vm.details }, function(data) {
                        vm.files = [];
                        for (var i = 0, file; file = data[i]; i++) {
                            if (vm.filter(file)) {
                                vm.files.push(file);
                            }
                        }
                        vm.selected_files = [];
                        if (vm.preSelect && data.length > 0) {
                            vm.selected_files.push(data[0]);
                        }
                        vm.is_loading = false;
                    });
                },
                selectFile: function(file, e) {
                    if ((!e.ctrlKey && !e.metaKey && !e.shiftKey) || !this.allowMultiSelect) {
                        this.selected_files = [];
                    }
    
                    if (e.shiftKey && this.allowMultiSelect && this.selected_files.length == 1) {
                        var index = null;
                        var start = 0;
                        for (var i = 0, cfile; cfile = this.files[i]; i++) {
                            if (cfile === this.selected_file) {
                                start = i;
                                break;
                            }
                        }
    
                        var end = 0;
                        for (var i = 0, cfile; cfile = this.files[i]; i++) {
                            if (cfile === file) {
                                end = i;
                                break;
                            }
                        }
    
                        for (var i = start; i < end; i++) {
                            index = this.selected_files.indexOf(this.files[i]);
                            if (index === -1) {
                                this.selected_files.push(this.files[i]);
                            }
                        }
                    }
    
                    index = this.selected_files.indexOf(file);
                    if (index === -1) {
                        this.selected_files.push(file);
                    }
    
                    if (this.selected_files.length == 1) {
                        var vm = this;
                        Vue.nextTick(function () {
                            if (vm.fileIs(vm.selected_file, 'video')) {
                                vm.$refs.videoplayer.load();
                            } else if (vm.fileIs(vm.selected_file, 'audio')) {
                                vm.$refs.audioplayer.load();
                            }
                        });
                    }
                },
                openFile: function(file) {
                    if (file.type == 'folder') {
                        this.current_folder += file.name+"/";
                        this.getFiles();
                    } else if (this.hidden_element) {
                        this.addFileToInput(file);
                    } else {
                        if (this.fileIs(this.selected_file, 'image')) {
                            $('#imagemodal_' + this._uid).modal('show');
                        } else {
                            // ...
                        }
                    }
                },
                isFileSelected: function(file) {
                    return this.selected_files.includes(file);
                },
                fileIs: function(file, type) {
                    if (typeof file === 'string') {
                        if (type == 'image') {
                            return this.endsWithAny(['jpg', 'jpeg', 'png', 'bmp'], file.toLowerCase());
                        }
                        //Todo: add other types
                    } else {
                        return file.type.includes(type);
                    }
    
                    return false;
                },
                getCurrentPath: function() {
                    var path = this.current_folder.replace(this.basePath, '').split('/').filter(function (el) {
                        return el != '';
                    });
    
                    return path;
                },
                setCurrentPath: function(i) {
                    if (i == -1) {
                        this.current_folder = this.basePath;
                    } else {
                        var path = this.getCurrentPath();
                        path.length = i + 1;
                        this.current_folder = this.basePath+path.join('/') + '/';
                    }
    
                    this.getFiles();
                },
                filter: function(file) {
                    if (this.allowedTypes.length > 0) {
                        if (file.type != 'folder') {
                            for (var i = 0, type; type = this.allowedTypes[i]; i++) {
                                if (file.type.includes(type)) {
                                    return true;
                                }
                            }
                        }
                    }
    
                    if (file.type == 'folder' && this.showFolders) {
                        return true;
                    } else if (file.type == 'folder' && !this.showFolders) {
                        return false;
                    }
                    if (this.allowedTypes.length == 0) {
                        return true;
                    }
    
                    return false;
                },
                addFileToInput: function(file) {
                    if (file.type != 'folder') {
                        if (!this.allowMultiSelect) {
                            this.hidden_element.value = file.relative_path;
                        } else {
                            var content = JSON.parse(this.hidden_element.value);
                            if (content.indexOf(file.relative_path) !== -1) {
                                return;
                            }
                            if (content.length >= this.maxSelectedFiles && this.maxSelectedFiles > 0) {
                                var msg_sing = "You can only select one file";
                                var msg_plur = "You can only select a maximum of 2 files";
                                if (this.maxSelectedFiles == 1) {
                                    toastr.error(msg_sing);
                                } else {
                                    toastr.error(msg_plur.replace('2', this.maxSelectedFiles));
                                }
                            } else {
                                content.push(file.relative_path);
                                this.hidden_element.value = JSON.stringify(content);
                            }
                        }
                        this.$forceUpdate();
                    }
                },
                removeFileFromInput: function(path) {
                    if (this.allowMultiSelect) {
                        var content = JSON.parse(this.hidden_element.value);
                        if (content.indexOf(path) !== -1) {
                            content.splice(content.indexOf(path), 1);
                            this.hidden_element.value = JSON.stringify(content);
                            this.$forceUpdate();
                        }
                    } else {
                        this.hidden_element.value = '';
                    }
                },
                getSelectedFiles: function() {
                    if (!this.allowMultiSelect) {
                        var content = [];
                        if (this.hidden_element.value != '') {
                            content.push(this.hidden_element.value);
                        }
    
                        return content;
                    } else {
                        return JSON.parse(this.hidden_element.value);
                    }
                },
                renameFile: function(object) {
                    var vm = this;
                    if (!this.allowRename || vm.selected_file.name == object.target.value) {
                        return;
                    }
                    $.post('http://127.0.0.1:8000/admin/media/rename_file', {
                        folder_location: vm.current_folder,
                        filename: vm.selected_file.name,
                        new_filename: object.target.value,
                        _token: 'm42DZHnHE7dyxAxU7VuZmiRfEeBQpC8z47jLl9Ns'
                    }, function(data){
                        if (data.success == true) {
                            toastr.success('Successfully renamed file/folder', "Sweet Success!");
                            vm.getFiles();
                        } else {
                            toastr.error(data.error, "Whoopsie!");
                        }
                    });
                },
                createFolder: function(e) {
                    if (!this.allowCreateFolder) {
                        return;
                    }
                    var vm = this;
                    var name = this.modals.new_folder.name;
                    $.post('http://127.0.0.1:8000/admin/media/new_folder', { new_folder: vm.current_folder+'/'+name, _token: 'm42DZHnHE7dyxAxU7VuZmiRfEeBQpC8z47jLl9Ns' }, function(data) {
                        if(data.success == true){
                            toastr.success('Successfully created ' + name, "Sweet Success!");
                            vm.getFiles();
                        } else {
                            toastr.error(data.error, "Whoopsie!");
                        }
                        vm.modals.new_folder.name = '';
                        $('#create_dir_modal_'+vm._uid).modal('hide');
                    });
                },
                deleteFiles: function() {
                    if (!this.allowDelete) {
                        return;
                    }
                    var vm = this;
                    $.post('http://127.0.0.1:8000/admin/media/delete_file_folder', {
                        path: vm.current_folder,
                        files: vm.selected_files,
                        _token: 'm42DZHnHE7dyxAxU7VuZmiRfEeBQpC8z47jLl9Ns'
                    }, function(data){
                        if(data.success == true){
                            toastr.success('', "Sweet Success!");
                            vm.getFiles();
                            $('#confirm_delete_modal_'+vm._uid).modal('hide');
                        } else {
                            toastr.error(data.error, "Whoopsie!");
                            vm.getFiles();
                            $('#confirm_delete_modal_'+vm._uid).modal('hide');
                        }
                    });
                },
                moveFiles: function(e) {
                    if (!this.allowMove) {
                        return;
                    }
                    var vm = this;
                    var destination = this.modals.move_files.destination;
                    if (destination === '') {
                        return;
                    }
                    $('#move_files_modal_'+vm._uid).modal('hide');
                    $.post('http://127.0.0.1:8000/admin/media/move_file', {
                        path: vm.current_folder,
                        files: vm.selected_files,
                        destination: destination,
                        _token: 'm42DZHnHE7dyxAxU7VuZmiRfEeBQpC8z47jLl9Ns'
                    }, function(data){
                        if(data.success == true){
                            toastr.success('Successfully moved file/folder', "Sweet Success!");
                            vm.getFiles();
                        } else {
                            toastr.error(data.error, "Whoopsie!");
                        }
    
                        vm.modals.move_files.destination = '';
                    });
                },
                crop: function(mode) {
                    if (!this.allowCrop) {
                        return;
                    }
                    if (!mode) {
                        if (!window.confirm('It will override the original image, are you sure?')) {
                            return;
                        }
                    }
    
                    croppedData.originImageName = this.selected_file.name;
                    croppedData.upload_path = this.current_folder;
                    croppedData.createMode = mode;
    
                    var vm = this;
                    var postData = Object.assign(croppedData, { _token: 'm42DZHnHE7dyxAxU7VuZmiRfEeBQpC8z47jLl9Ns' });
                    $.post('http://127.0.0.1:8000/admin/media/crop', postData, function(data) {
                        if (data.success) {
                            toastr.success(data.message);
                            vm.getFiles();
                            $('#crop_modal_'+vm._uid).modal('hide');
                        } else {
                            toastr.error(data.error, "Whoopsie!");
                        }
                    });
                },
                addSelectedFiles: function () {
                    var vm = this;
                    for (i = 0; i < vm.selected_files.length; i++) {
                        vm.openFile(vm.selected_files[i]);
                    }
                },
                bytesToSize: function(bytes) {
                    var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
                    if (bytes == 0) return '0 Bytes';
                    var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
                    return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
                },
                getFileName: function(name) {
                    var name = name.split('/');
                    return name[name.length -1];
                },
                imgIcon: function(path) {
                    path = path.replace(/\\/g,"/");
                    return 'background-size: cover; background-image: url("' + path + '"); background-repeat:no-repeat; background-position:center center;display:inline-block; width:100%; height:100%;';
                },
                dateFilter: function(date) {
                    if (!date) {
                        return null;
                    }
                    var date = new Date(date * 1000);
    
                    var month = "0" + (date.getMonth() + 1);
                    var minutes = "0" + date.getMinutes();
                    var seconds = "0" + date.getSeconds();
    
                    var dateFormated = date.getFullYear() + '-' + month.substr(-2) + '-' + date.getDate() + ' ' + date.getHours() + ':' + minutes.substr(-2) + ':' + seconds.substr(-2);
    
                    return dateFormated;
                },
                endsWithAny: function(suffixes, string) {
                    return suffixes.some(function (suffix) {
                        return string.endsWith(suffix);
                    });
                }
            },
            mounted: function() {
                this.getFiles();
                var vm = this;
    
                if (this.element != '') {
                    this.hidden_element = document.querySelector(this.element);
                    if (!this.hidden_element) {
                        console.error('Element "'+this.element+'" could not be found.');
                    } else {
                        if (this.maxSelectedFiles > 1 && this.hidden_element.value == '') {
                            this.hidden_element.value = '[]';
                        }
                    }
                }
    
                //Key events
                this.onkeydown = function(evt) {
                    evt = evt || window.event;
                    if (evt.keyCode == 39) {
                        evt.preventDefault();
                        for (var i = 0, file; file = vm.files[i]; i++) {
                            if (file === vm.selected_file) {
                                i = i + 1; // increase i by one
                                i = i % vm.files.length;
                                vm.selectFile(vm.files[i], evt);
                                break;
                            }
                        }
                    } else if (evt.keyCode == 37) {
                        evt.preventDefault();
                        for (var i = 0, file; file = vm.files[i]; i++) {
                            if (file === vm.selected_file) {
                                if (i === 0) {
                                    i = vm.files.length;
                                }
                                i = i - 1;
                                vm.selectFile(vm.files[i], evt);
                                break;
                            }
                        }
                    } else if (evt.keyCode == 13) {
                        evt.preventDefault();
                        if (evt.target.tagName != 'INPUT') {
                            vm.openFile(vm.selected_file, null);
                        }
                    }
                };
                //Dropzone
                var dropzone = $(vm.$el).first().find('#upload').first();
                var progress = $(vm.$el).first().find('#uploadProgress').first();
                var progress_bar = $(vm.$el).first().find('#uploadProgress .progress-bar').first();
                if (this.allowUpload && !dropzone.hasClass('dz-clickable')) {
                    dropzone.dropzone({
                        timeout: 180000,
                        url: 'http://127.0.0.1:8000/admin/media/upload',
                        previewsContainer: "#uploadPreview",
                        totaluploadprogress: function(uploadProgress, totalBytes, totalBytesSent) {
                            progress_bar.css('width', uploadProgress + '%');
                            if (uploadProgress == 100) {
                                progress.delay(1500).slideUp(function(){
                                    progress_bar.css('width', '0%');
                                });
                            }
                        },
                        processing: function(){
                            progress.fadeIn();
                        },
                        sending: function(file, xhr, formData) {
                            formData.append("_token", 'm42DZHnHE7dyxAxU7VuZmiRfEeBQpC8z47jLl9Ns');
                            formData.append("upload_path", vm.current_folder);
                            formData.append("filename", vm.filename);
                            formData.append("details", JSON.stringify(vm.details));
                        },
                        success: function(e, res) {
                            if (res.success) {
                                toastr.success(res.message, "Sweet Success!");
                            } else {
                                toastr.error(res.message, "Whoopsie!");
                            }
                        },
                        error: function(e, res, xhr) {
                            toastr.error(res, "Whoopsie!");
                        },
                        queuecomplete: function() {
                            vm.getFiles();
                        }
                    });
                }
    
                //Cropper
                if (this.allowCrop) {
                    var cropper = $(vm.$el).first().find('#crop_modal_'+vm._uid).first();
                    cropper.on('shown.bs.modal', function (e) {
                        if (typeof cropper !== 'undefined' && cropper instanceof Cropper) {
                            cropper.destroy();
                        }
                        var croppingImage = document.getElementById('cropping-image_'+vm._uid);
                        cropper = new Cropper(croppingImage, {
                            crop: function(e) {
                                document.getElementById('new-image-width_'+vm._uid).innerText = Math.round(e.detail.width) + 'px';
                                document.getElementById('new-image-height_'+vm._uid).innerText = Math.round(e.detail.height) + 'px';
                                croppedData = {
                                    x: Math.round(e.detail.x),
                                    y: Math.round(e.detail.y),
                                    height: Math.round(e.detail.height),
                                    width: Math.round(e.detail.width)
                                };
                            }
                        });
                    });
                }
    
                $(document).ready(function () {
                    $(".form-edit-add").submit(function (e) {
                        if (vm.hidden_element) {
                            if (vm.maxSelectedFiles > 1) {
                                var content = JSON.parse(vm.hidden_element.value);
                                if (content.length < vm.minSelectedFiles) {
                                    e.preventDefault();
                                    var msg_sing = "You must select at least one file";
                                    var msg_plur = "You must select at least 2 files";
                                    if (vm.minSelectedFiles == 1) {
                                        toastr.error(msg_sing);
                                    } else {
                                        toastr.error(msg_plur.replace('2', vm.minSelectedFiles));
                                    }
                                }
                            } else {
                                if (vm.minSelectedFiles > 0 && vm.hidden_element.value == '') {
                                    e.preventDefault();
                                    toastr.error("You must select at least one file");
                                }
                            }
                        }
                    });
    
                    //Nestable
                    $('#dd_'+vm._uid).nestable({
                        maxDepth: 1,
                        handleClass: 'file_link',
                        collapseBtnHTML: '',
                        expandBtnHTML: '',
                        callback: function(l, e) {
                            if (vm.allowMultiSelect) {
                                var new_content = [];
                                var object = $('#dd_'+vm._uid).nestable('serialize');
                                for (var key in object) {
                                    new_content.push(object[key].url);
                                }
                                vm.hidden_element.value = JSON.stringify(new_content);
                            }
                        }
                    });
    
                    $('#create_dir_modal_' + vm._uid).on('hidden.bs.modal', function () {
                        vm.modals.new_folder.name = '';
                    });
    
                    $('#move_files_modal_' + vm._uid).on('hidden.bs.modal', function () {
                        vm.modals.move_files.destination = '';
                    });
                });
            },
        });
    </script>
    <style>
    .dd-placeholder {
        flex: 1;
        width: 100%;
        min-width: 200px;
        max-width: 250px;
    }
    </style>
        <script>
            var params = {};
            var $file;
    
            function deleteHandler(tag, isMulti) {
              return function() {
                $file = $(this).siblings(tag);
    
                params = {
                    slug:   'posts',
                    filename:  $file.data('file-name'),
                    id:     $file.data('id'),
                    field:  $file.parent().data('field-name'),
                    multi: isMulti,
                    _token: 'm42DZHnHE7dyxAxU7VuZmiRfEeBQpC8z47jLl9Ns'
                }
    
                $('.confirm_delete_name').text(params.filename);
                $('#confirm_delete_modal').modal('show');
              };
            }
    
            $('document').ready(function () {
                $('#slug').slugify();
    
                $('.toggleswitch').bootstrapToggle();
    
                //Init datepicker for date fields if data-datepicker attribute defined
                //or if browser does not handle date inputs
                $('.form-group input[type=date]').each(function (idx, elt) {
                    if (elt.type != 'date' || elt.hasAttribute('data-datepicker')) {
                        elt.type = 'text';
                        $(elt).datetimepicker($(elt).data('datepicker'));
                    }
                });
    
                
                $('.side-body input[data-slug-origin]').each(function(i, el) {
                    $(el).slugify();
                });
    
                $('.form-group').on('click', '.remove-multi-image', deleteHandler('img', true));
                $('.form-group').on('click', '.remove-single-image', deleteHandler('img', false));
                $('.form-group').on('click', '.remove-multi-file', deleteHandler('a', true));
                $('.form-group').on('click', '.remove-single-file', deleteHandler('a', false));
    
                $('#confirm_delete').on('click', function(){
                    $.post('http://127.0.0.1:8000/admin/posts/remove', params, function (response) {
                        if ( response
                            && response.data
                            && response.data.status
                            && response.data.status == 200 ) {
    
                            toastr.success(response.data.message);
                            $file.parent().fadeOut(300, function() { $(this).remove(); })
                        } else {
                            toastr.error("Error removing file.");
                        }
                    });
    
                    $('#confirm_delete_modal').modal('hide');
                });
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
        <script>
            $(document).ready(function() {
                var additionalConfig = {
                    selector: 'textarea.richTextBox[name="body"]',
                }
    
                $.extend(additionalConfig, {})
    
                tinymce.init(window.voyagerTinyMCE.getConfig(additionalConfig));
            });
        </script>
    
    
    
    <div class="tox tox-silver-sink tox-tinymce-aux" style="position: relative;"></div></body>