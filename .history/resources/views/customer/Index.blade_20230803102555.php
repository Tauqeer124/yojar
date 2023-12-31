@extends('voyager::master')
@section('content')



<html lang="en" dir="ltr">
    <head>
    <title>Viewing Posts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="m42DZHnHE7dyxAxU7VuZmiRfEeBQpC8z47jLl9Ns">
    <meta name="assets-path" content="http://127.0.0.1:8000/admin/voyager-assets">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <!-- Favicon -->
                <link rel="shortcut icon" href="http://127.0.0.1:8000/admin/voyager-assets?path=images%2Flogo-icon.png" type="image/png">
    


    <!-- App CSS -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin/voyager-assets?path=css%2Fapp.css">

        
    <!-- Few Dynamic Styles -->
    <style type="text/css">
        .voyager .side-menu .navbar-header {
            background:#22A7F0;
            border-color:#22A7F0;
        }
        .widget .btn-primary{
            border-color:#22A7F0;
        }
        .widget .btn-primary:focus, .widget .btn-primary:hover, .widget .btn-primary:active, .widget .btn-primary.active, .widget .btn-primary:active:focus{
            background:#22A7F0;
        }
        .voyager .breadcrumb a{
            color:#22A7F0;
        }
    </style>

    
    <style id="ace_editor.css">.ace_editor {position: relative;overflow: hidden;font: 12px/normal 'Monaco', 'Menlo', 'Ubuntu Mono', 'Consolas', 'source-code-pro', monospace;direction: ltr;text-align: left;-webkit-tap-highlight-color: rgba(0, 0, 0, 0);}.ace_scroller {position: absolute;overflow: hidden;top: 0;bottom: 0;background-color: inherit;-ms-user-select: none;-moz-user-select: none;-webkit-user-select: none;user-select: none;cursor: text;}.ace_content {position: absolute;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;min-width: 100%;}.ace_dragging .ace_scroller:before{position: absolute;top: 0;left: 0;right: 0;bottom: 0;content: '';background: rgba(250, 250, 250, 0.01);z-index: 1000;}.ace_dragging.ace_dark .ace_scroller:before{background: rgba(0, 0, 0, 0.01);}.ace_selecting, .ace_selecting * {cursor: text !important;}.ace_gutter {position: absolute;overflow : hidden;width: auto;top: 0;bottom: 0;left: 0;cursor: default;z-index: 4;-ms-user-select: none;-moz-user-select: none;-webkit-user-select: none;user-select: none;}.ace_gutter-active-line {position: absolute;left: 0;right: 0;}.ace_scroller.ace_scroll-left {box-shadow: 17px 0 16px -16px rgba(0, 0, 0, 0.4) inset;}.ace_gutter-cell {padding-left: 19px;padding-right: 6px;background-repeat: no-repeat;}.ace_gutter-cell.ace_error {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAABOFBMVEX/////////QRswFAb/Ui4wFAYwFAYwFAaWGAfDRymzOSH/PxswFAb/SiUwFAYwFAbUPRvjQiDllog5HhHdRybsTi3/Tyv9Tir+Syj/UC3////XurebMBIwFAb/RSHbPx/gUzfdwL3kzMivKBAwFAbbvbnhPx66NhowFAYwFAaZJg8wFAaxKBDZurf/RB6mMxb/SCMwFAYwFAbxQB3+RB4wFAb/Qhy4Oh+4QifbNRcwFAYwFAYwFAb/QRzdNhgwFAYwFAbav7v/Uy7oaE68MBK5LxLewr/r2NXewLswFAaxJw4wFAbkPRy2PyYwFAaxKhLm1tMwFAazPiQwFAaUGAb/QBrfOx3bvrv/VC/maE4wFAbRPBq6MRO8Qynew8Dp2tjfwb0wFAbx6eju5+by6uns4uH9/f36+vr/GkHjAAAAYnRSTlMAGt+64rnWu/bo8eAA4InH3+DwoN7j4eLi4xP99Nfg4+b+/u9B/eDs1MD1mO7+4PHg2MXa347g7vDizMLN4eG+Pv7i5evs/v79yu7S3/DV7/498Yv24eH+4ufQ3Ozu/v7+y13sRqwAAADLSURBVHjaZc/XDsFgGIBhtDrshlitmk2IrbHFqL2pvXf/+78DPokj7+Fz9qpU/9UXJIlhmPaTaQ6QPaz0mm+5gwkgovcV6GZzd5JtCQwgsxoHOvJO15kleRLAnMgHFIESUEPmawB9ngmelTtipwwfASilxOLyiV5UVUyVAfbG0cCPHig+GBkzAENHS0AstVF6bacZIOzgLmxsHbt2OecNgJC83JERmePUYq8ARGkJx6XtFsdddBQgZE2nPR6CICZhawjA4Fb/chv+399kfR+MMMDGOQAAAABJRU5ErkJggg==");background-repeat: no-repeat;background-position: 2px center;}.ace_gutter-cell.ace_warning {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAmVBMVEX///8AAAD///8AAAAAAABPSzb/5sAAAAB/blH/73z/ulkAAAAAAAD85pkAAAAAAAACAgP/vGz/rkDerGbGrV7/pkQICAf////e0IsAAAD/oED/qTvhrnUAAAD/yHD/njcAAADuv2r/nz//oTj/p064oGf/zHAAAAA9Nir/tFIAAAD/tlTiuWf/tkIAAACynXEAAAAAAAAtIRW7zBpBAAAAM3RSTlMAABR1m7RXO8Ln31Z36zT+neXe5OzooRDfn+TZ4p3h2hTf4t3k3ucyrN1K5+Xaks52Sfs9CXgrAAAAjklEQVR42o3PbQ+CIBQFYEwboPhSYgoYunIqqLn6/z8uYdH8Vmdnu9vz4WwXgN/xTPRD2+sgOcZjsge/whXZgUaYYvT8QnuJaUrjrHUQreGczuEafQCO/SJTufTbroWsPgsllVhq3wJEk2jUSzX3CUEDJC84707djRc5MTAQxoLgupWRwW6UB5fS++NV8AbOZgnsC7BpEAAAAABJRU5ErkJggg==");background-position: 2px center;}.ace_gutter-cell.ace_info {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAAJ0Uk5TAAB2k804AAAAPklEQVQY02NgIB68QuO3tiLznjAwpKTgNyDbMegwisCHZUETUZV0ZqOquBpXj2rtnpSJT1AEnnRmL2OgGgAAIKkRQap2htgAAAAASUVORK5CYII=");background-position: 2px center;}.ace_dark .ace_gutter-cell.ace_info {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAAJFBMVEUAAAChoaGAgIAqKiq+vr6tra1ZWVmUlJSbm5s8PDxubm56enrdgzg3AAAAAXRSTlMAQObYZgAAAClJREFUeNpjYMAPdsMYHegyJZFQBlsUlMFVCWUYKkAZMxZAGdxlDMQBAG+TBP4B6RyJAAAAAElFTkSuQmCC");}.ace_scrollbar {position: absolute;right: 0;bottom: 0;z-index: 6;}.ace_scrollbar-inner {position: absolute;cursor: text;left: 0;top: 0;}.ace_scrollbar-v{overflow-x: hidden;overflow-y: scroll;top: 0;}.ace_scrollbar-h {overflow-x: scroll;overflow-y: hidden;left: 0;}.ace_print-margin {position: absolute;height: 100%;}.ace_text-input {position: absolute;z-index: 0;width: 0.5em;height: 1em;opacity: 0;background: transparent;-moz-appearance: none;appearance: none;border: none;resize: none;outline: none;overflow: hidden;font: inherit;padding: 0 1px;margin: 0 -1px;text-indent: -1em;-ms-user-select: text;-moz-user-select: text;-webkit-user-select: text;user-select: text;white-space: pre!important;}.ace_text-input.ace_composition {background: inherit;color: inherit;z-index: 1000;opacity: 1;text-indent: 0;}.ace_layer {z-index: 1;position: absolute;overflow: hidden;word-wrap: normal;white-space: pre;height: 100%;width: 100%;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;pointer-events: none;}.ace_gutter-layer {position: relative;width: auto;text-align: right;pointer-events: auto;}.ace_text-layer {font: inherit !important;}.ace_cjk {display: inline-block;text-align: center;}.ace_cursor-layer {z-index: 4;}.ace_cursor {z-index: 4;position: absolute;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;border-left: 2px solid;transform: translatez(0);}.ace_multiselect .ace_cursor {border-left-width: 1px;}.ace_slim-cursors .ace_cursor {border-left-width: 1px;}.ace_overwrite-cursors .ace_cursor {border-left-width: 0;border-bottom: 1px solid;}.ace_hidden-cursors .ace_cursor {opacity: 0.2;}.ace_smooth-blinking .ace_cursor {-webkit-transition: opacity 0.18s;transition: opacity 0.18s;}.ace_marker-layer .ace_step, .ace_marker-layer .ace_stack {position: absolute;z-index: 3;}.ace_marker-layer .ace_selection {position: absolute;z-index: 5;}.ace_marker-layer .ace_bracket {position: absolute;z-index: 6;}.ace_marker-layer .ace_active-line {position: absolute;z-index: 2;}.ace_marker-layer .ace_selected-word {position: absolute;z-index: 4;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;}.ace_line .ace_fold {-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;display: inline-block;height: 11px;margin-top: -2px;vertical-align: middle;background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAJCAYAAADU6McMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJpJREFUeNpi/P//PwOlgAXGYGRklAVSokD8GmjwY1wasKljQpYACtpCFeADcHVQfQyMQAwzwAZI3wJKvCLkfKBaMSClBlR7BOQikCFGQEErIH0VqkabiGCAqwUadAzZJRxQr/0gwiXIal8zQQPnNVTgJ1TdawL0T5gBIP1MUJNhBv2HKoQHHjqNrA4WO4zY0glyNKLT2KIfIMAAQsdgGiXvgnYAAAAASUVORK5CYII="),url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA3CAYAAADNNiA5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAACJJREFUeNpi+P//fxgTAwPDBxDxD078RSX+YeEyDFMCIMAAI3INmXiwf2YAAAAASUVORK5CYII=");background-repeat: no-repeat, repeat-x;background-position: center center, top left;color: transparent;border: 1px solid black;border-radius: 2px;cursor: pointer;pointer-events: auto;}.ace_dark .ace_fold {}.ace_fold:hover{background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAJCAYAAADU6McMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJpJREFUeNpi/P//PwOlgAXGYGRklAVSokD8GmjwY1wasKljQpYACtpCFeADcHVQfQyMQAwzwAZI3wJKvCLkfKBaMSClBlR7BOQikCFGQEErIH0VqkabiGCAqwUadAzZJRxQr/0gwiXIal8zQQPnNVTgJ1TdawL0T5gBIP1MUJNhBv2HKoQHHjqNrA4WO4zY0glyNKLT2KIfIMAAQsdgGiXvgnYAAAAASUVORK5CYII="),url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA3CAYAAADNNiA5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAACBJREFUeNpi+P//fz4TAwPDZxDxD5X4i5fLMEwJgAADAEPVDbjNw87ZAAAAAElFTkSuQmCC");}.ace_tooltip {background-color: #FFF;background-image: -webkit-linear-gradient(top, transparent, rgba(0, 0, 0, 0.1));background-image: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.1));border: 1px solid gray;border-radius: 1px;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);color: black;max-width: 100%;padding: 3px 4px;position: fixed;z-index: 999999;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;cursor: default;white-space: pre;word-wrap: break-word;line-height: normal;font-style: normal;font-weight: normal;letter-spacing: normal;pointer-events: none;}.ace_folding-enabled > .ace_gutter-cell {padding-right: 13px;}.ace_fold-widget {-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;margin: 0 -12px 0 1px;display: none;width: 11px;vertical-align: top;background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAANElEQVR42mWKsQ0AMAzC8ixLlrzQjzmBiEjp0A6WwBCSPgKAXoLkqSot7nN3yMwR7pZ32NzpKkVoDBUxKAAAAABJRU5ErkJggg==");background-repeat: no-repeat;background-position: center;border-radius: 3px;border: 1px solid transparent;cursor: pointer;}.ace_folding-enabled .ace_fold-widget {display: inline-block;   }.ace_fold-widget.ace_end {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAANElEQVR42m3HwQkAMAhD0YzsRchFKI7sAikeWkrxwScEB0nh5e7KTPWimZki4tYfVbX+MNl4pyZXejUO1QAAAABJRU5ErkJggg==");}.ace_fold-widget.ace_closed {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAAGCAYAAAAG5SQMAAAAOUlEQVR42jXKwQkAMAgDwKwqKD4EwQ26sSOkVWjgIIHAzPiCgaqiqnJHZnKICBERHN194O5b9vbLuAVRL+l0YWnZAAAAAElFTkSuQmCCXA==");}.ace_fold-widget:hover {border: 1px solid rgba(0, 0, 0, 0.3);background-color: rgba(255, 255, 255, 0.2);box-shadow: 0 1px 1px rgba(255, 255, 255, 0.7);}.ace_fold-widget:active {border: 1px solid rgba(0, 0, 0, 0.4);background-color: rgba(0, 0, 0, 0.05);box-shadow: 0 1px 1px rgba(255, 255, 255, 0.8);}.ace_dark .ace_fold-widget {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAHklEQVQIW2P4//8/AzoGEQ7oGCaLLAhWiSwB146BAQCSTPYocqT0AAAAAElFTkSuQmCC");}.ace_dark .ace_fold-widget.ace_end {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAH0lEQVQIW2P4//8/AxQ7wNjIAjDMgC4AxjCVKBirIAAF0kz2rlhxpAAAAABJRU5ErkJggg==");}.ace_dark .ace_fold-widget.ace_closed {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAAFCAYAAACAcVaiAAAAHElEQVQIW2P4//+/AxAzgDADlOOAznHAKgPWAwARji8UIDTfQQAAAABJRU5ErkJggg==");}.ace_dark .ace_fold-widget:hover {box-shadow: 0 1px 1px rgba(255, 255, 255, 0.2);background-color: rgba(255, 255, 255, 0.1);}.ace_dark .ace_fold-widget:active {box-shadow: 0 1px 1px rgba(255, 255, 255, 0.2);}.ace_fold-widget.ace_invalid {background-color: #FFB4B4;border-color: #DE5555;}.ace_fade-fold-widgets .ace_fold-widget {-webkit-transition: opacity 0.4s ease 0.05s;transition: opacity 0.4s ease 0.05s;opacity: 0;}.ace_fade-fold-widgets:hover .ace_fold-widget {-webkit-transition: opacity 0.05s ease 0.05s;transition: opacity 0.05s ease 0.05s;opacity:1;}.ace_underline {text-decoration: underline;}.ace_bold {font-weight: bold;}.ace_nobold .ace_bold {font-weight: normal;}.ace_italic {font-style: italic;}.ace_error-marker {background-color: rgba(255, 0, 0,0.2);position: absolute;z-index: 9;}.ace_highlight-marker {background-color: rgba(255, 255, 0,0.2);position: absolute;z-index: 8;}.ace_br1 {border-top-left-radius    : 3px;}.ace_br2 {border-top-right-radius   : 3px;}.ace_br3 {border-top-left-radius    : 3px; border-top-right-radius:    3px;}.ace_br4 {border-bottom-right-radius: 3px;}.ace_br5 {border-top-left-radius    : 3px; border-bottom-right-radius: 3px;}.ace_br6 {border-top-right-radius   : 3px; border-bottom-right-radius: 3px;}.ace_br7 {border-top-left-radius    : 3px; border-top-right-radius:    3px; border-bottom-right-radius: 3px;}.ace_br8 {border-bottom-left-radius : 3px;}.ace_br9 {border-top-left-radius    : 3px; border-bottom-left-radius:  3px;}.ace_br10{border-top-right-radius   : 3px; border-bottom-left-radius:  3px;}.ace_br11{border-top-left-radius    : 3px; border-top-right-radius:    3px; border-bottom-left-radius:  3px;}.ace_br12{border-bottom-right-radius: 3px; border-bottom-left-radius:  3px;}.ace_br13{border-top-left-radius    : 3px; border-bottom-right-radius: 3px; border-bottom-left-radius:  3px;}.ace_br14{border-top-right-radius   : 3px; border-bottom-right-radius: 3px; border-bottom-left-radius:  3px;}.ace_br15{border-top-left-radius    : 3px; border-top-right-radius:    3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px;}.ace_text-input-ios {position: absolute !important;top: -100000px !important;left: -100000px !important;}
/*# sourceURL=ace/css/ace_editor.css */</style><style id="ace-tm">.ace-tm .ace_gutter {background: #f0f0f0;color: #333;}.ace-tm .ace_print-margin {width: 1px;background: #e8e8e8;}.ace-tm .ace_fold {background-color: #6B72E6;}.ace-tm {background-color: #FFFFFF;color: black;}.ace-tm .ace_cursor {color: black;}.ace-tm .ace_invisible {color: rgb(191, 191, 191);}.ace-tm .ace_storage,.ace-tm .ace_keyword {color: blue;}.ace-tm .ace_constant {color: rgb(197, 6, 11);}.ace-tm .ace_constant.ace_buildin {color: rgb(88, 72, 246);}.ace-tm .ace_constant.ace_language {color: rgb(88, 92, 246);}.ace-tm .ace_constant.ace_library {color: rgb(6, 150, 14);}.ace-tm .ace_invalid {background-color: rgba(255, 0, 0, 0.1);color: red;}.ace-tm .ace_support.ace_function {color: rgb(60, 76, 114);}.ace-tm .ace_support.ace_constant {color: rgb(6, 150, 14);}.ace-tm .ace_support.ace_type,.ace-tm .ace_support.ace_class {color: rgb(109, 121, 222);}.ace-tm .ace_keyword.ace_operator {color: rgb(104, 118, 135);}.ace-tm .ace_string {color: rgb(3, 106, 7);}.ace-tm .ace_comment {color: rgb(76, 136, 107);}.ace-tm .ace_comment.ace_doc {color: rgb(0, 102, 255);}.ace-tm .ace_comment.ace_doc.ace_tag {color: rgb(128, 159, 191);}.ace-tm .ace_constant.ace_numeric {color: rgb(0, 0, 205);}.ace-tm .ace_variable {color: rgb(49, 132, 149);}.ace-tm .ace_xml-pe {color: rgb(104, 104, 91);}.ace-tm .ace_entity.ace_name.ace_function {color: #0000A2;}.ace-tm .ace_heading {color: rgb(12, 7, 255);}.ace-tm .ace_list {color:rgb(185, 6, 144);}.ace-tm .ace_meta.ace_tag {color:rgb(0, 22, 142);}.ace-tm .ace_string.ace_regex {color: rgb(255, 0, 0)}.ace-tm .ace_marker-layer .ace_selection {background: rgb(181, 213, 255);}.ace-tm.ace_multiselect .ace_selection.ace_start {box-shadow: 0 0 3px 0px white;}.ace-tm .ace_marker-layer .ace_step {background: rgb(252, 255, 0);}.ace-tm .ace_marker-layer .ace_stack {background: rgb(164, 229, 101);}.ace-tm .ace_marker-layer .ace_bracket {margin: -1px 0 0 -1px;border: 1px solid rgb(192, 192, 192);}.ace-tm .ace_marker-layer .ace_active-line {background: rgba(0, 0, 0, 0.07);}.ace-tm .ace_gutter-active-line {background-color : #dcdcdc;}.ace-tm .ace_marker-layer .ace_selected-word {background: rgb(250, 250, 255);border: 1px solid rgb(200, 200, 250);}.ace-tm .ace_indent-guide {background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAACCAYAAACZgbYnAAAAE0lEQVQImWP4////f4bLly//BwAmVgd1/w11/gAAAABJRU5ErkJggg==") right repeat-y;}
/*# sourceURL=ace/css/ace-tm */</style><style>    .error_widget_wrapper {        background: inherit;        color: inherit;        border:none    }    .error_widget {        border-top: solid 2px;        border-bottom: solid 2px;        margin: 5px 0;        padding: 10px 40px;        white-space: pre-wrap;    }    .error_widget.ace_error, .error_widget_arrow.ace_error{        border-color: #ff5a5a    }    .error_widget.ace_warning, .error_widget_arrow.ace_warning{        border-color: #F1D817    }    .error_widget.ace_info, .error_widget_arrow.ace_info{        border-color: #5a5a5a    }    .error_widget.ace_ok, .error_widget_arrow.ace_ok{        border-color: #5aaa5a    }    .error_widget_arrow {        position: absolute;        border: solid 5px;        border-top-color: transparent!important;        border-right-color: transparent!important;        border-left-color: transparent!important;        top: -5px;    }</style></head>

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
                                                                                                <li>Posts</li>
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
<div class="ps__rail-x" style="width: 60px; left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 14px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 546px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 465px;"></div></div></div>
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
                                                                                        Title
                                                                                    </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                                                                        Post Image
                                                                                    : activate to sort column ascending" style="width: 89.9375px;">
                                                                                        Post Image
                                                                                    </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                                                                        Status
                                                                                    : activate to sort column ascending" style="width: 59.4688px;">
                                                                                        Status
                                                                                    </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                                                                        Created At
                                                                                    : activate to sort column ascending" style="width: 139.885px;">
                                                                                        Created At
                                                                                    </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                                                                        SEO Title
                                                                                    : activate to sort column ascending" style="width: 72.8958px;">
                                                                                        SEO Title
                                                                                    </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                                                                        Featured
                                                                                    : activate to sort column ascending" style="width: 74.0312px;">
                                                                                        Featured
                                                                                    </th><th class="actions text-right dt-not-orderable sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 218.979px;">Actions</th></tr>
                                </thead>
                                <tbody>
                                                                        
                                                                        
                                                                        
                                                                        
                                                                    <tr role="row" class="odd">
                                                                                    <td>
                                                <input type="checkbox" name="row_id" id="checkbox_1" value="1">
                                            </td>
                                                                                                                                                                        <td>
                                                                                                                                                        <div>Lorem Ipsum Post</div>
                                                                                            </td>
                                                                                                                                <td>
                                                                                                    <img src="http://localhost/storage/posts/post1.jpg" style="width:100px">
                                                                                            </td>
                                                                                                                                <td>
                                                
                                                    published

                                                                                            </td>
                                                                                                                                <td>
                                                                                                                                                            2023-08-02 08:05:10
                                                                                                                                                </td>
                                                                                                                                <td>
                                                                                                                                                        <div></div>
                                                                                            </td>
                                                                                                                                <td>
                                                                                                                                                        0
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
                                    </tr><tr role="row" class="even">
                                                                                    <td>
                                                <input type="checkbox" name="row_id" id="checkbox_2" value="2">
                                            </td>
                                                                                                                                                                        <td>
                                                                                                                                                        <div>My Sample Post</div>
                                                                                            </td>
                                                                                                                                <td>
                                                                                                    <img src="http://localhost/storage/posts/post2.jpg" style="width:100px">
                                                                                            </td>
                                                                                                                                <td>
                                                
                                                    published

                                                                                            </td>
                                                                                                                                <td>
                                                                                                                                                            2023-08-02 08:05:10
                                                                                                                                                </td>
                                                                                                                                <td>
                                                                                                                                                        <div></div>
                                                                                            </td>
                                                                                                                                <td>
                                                                                                                                                        0
                                                                                                                                                </td>
                                                                                <td class="no-sort no-click bread-actions">
                                                                                                                                                <a href="javascript:;" title="Delete" class="btn btn-sm btn-danger pull-right delete" data-id="2" id="delete-2">
                <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
            </a>
                                                                                                                                                                                                                                                                                                                                                                                                            <a href="http://127.0.0.1:8000/admin/posts/2/edit" title="Edit" class="btn btn-sm btn-primary pull-right edit">
                <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
            </a>
                                                                                                                                                                                                            <a href="http://127.0.0.1:8000/admin/posts/2" title="View" class="btn btn-sm btn-warning pull-right view">
                <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">View</span>
            </a>
                                                                                                                                                </td>
                                    </tr><tr role="row" class="odd">
                                                                                    <td>
                                                <input type="checkbox" name="row_id" id="checkbox_3" value="3">
                                            </td>
                                                                                                                                                                        <td>
                                                                                                                                                        <div>Latest Post</div>
                                                                                            </td>
                                                                                                                                <td>
                                                                                                    <img src="http://localhost/storage/posts/post3.jpg" style="width:100px">
                                                                                            </td>
                                                                                                                                <td>
                                                
                                                    published

                                                                                            </td>
                                                                                                                                <td>
                                                                                                                                                            2023-08-02 08:05:10
                                                                                                                                                </td>
                                                                                                                                <td>
                                                                                                                                                        <div></div>
                                                                                            </td>
                                                                                                                                <td>
                                                                                                                                                        0
                                                                                                                                                </td>
                                                                                <td class="no-sort no-click bread-actions">
                                                                                                                                                <a href="javascript:;" title="Delete" class="btn btn-sm btn-danger pull-right delete" data-id="3" id="delete-3">
                <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
            </a>
                                                                                                                                                                                                                                                                                                                                                                                                            <a href="http://127.0.0.1:8000/admin/posts/3/edit" title="Edit" class="btn btn-sm btn-primary pull-right edit">
                <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
            </a>
                                                                                                                                                                                                            <a href="http://127.0.0.1:8000/admin/posts/3" title="View" class="btn btn-sm btn-warning pull-right view">
                <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">View</span>
            </a>
                                                                                                                                                </td>
                                    </tr><tr role="row" class="even">
                                                                                    <td>
                                                <input type="checkbox" name="row_id" id="checkbox_4" value="4">
                                            </td>
                                                                                                                                                                        <td>
                                                                                                                                                        <div>Yarr Post</div>
                                                                                            </td>
                                                                                                                                <td>
                                                                                                    <img src="http://localhost/storage/posts/post4.jpg" style="width:100px">
                                                                                            </td>
                                                                                                                                <td>
                                                
                                                    published

                                                                                            </td>
                                                                                                                                <td>
                                                                                                                                                            2023-08-02 08:05:10
                                                                                                                                                </td>
                                                                                                                                <td>
                                                                                                                                                        <div></div>
                                                                                            </td>
                                                                                                                                <td>
                                                                                                                                                        0
                                                                                                                                                </td>
                                                                                <td class="no-sort no-click bread-actions">
                                                                                                                                                <a href="javascript:;" title="Delete" class="btn btn-sm btn-danger pull-right delete" data-id="4" id="delete-4">
                <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
            </a>
                                                                                                                                                                                                                                                                                                                                                                                                            <a href="http://127.0.0.1:8000/admin/posts/4/edit" title="Edit" class="btn btn-sm btn-primary pull-right edit">
                <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
            </a>
                                                                                                                                                                                                            <a href="http://127.0.0.1:8000/admin/posts/4" title="View" class="btn btn-sm btn-warning pull-right view">
                <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">View</span>
            </a>
                                                                                                                                                </td>
                                    </tr></tbody>
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
    <!-- DataTables -->
        <script>
        $(document).ready(function () {
                            var table = $('#dataTable').DataTable({"order":[],"language":{"sEmptyTable":"No data available in table","sInfo":"Showing _START_ to _END_ of _TOTAL_ entries","sInfoEmpty":"Showing 0 to 0 of 0 entries","sInfoFiltered":"(filtered from _MAX_ total entries)","sInfoPostFix":"","sInfoThousands":",","sLengthMenu":"Show _MENU_ entries","sLoadingRecords":"Loading...","sProcessing":"Processing...","sSearch":"Search:","sZeroRecords":"No matching records found","oPaginate":{"sFirst":"First","sLast":"Last","sNext":"Next","sPrevious":"Previous"},"oAria":{"sSortAscending":": activate to sort column ascending","sSortDescending":": activate to sort column descending"}},"columnDefs":[{"targets":"dt-not-orderable","searchable":false,"orderable":false}]});
            
                        $('.select_all').on('click', function(e) {
                $('input[name="row_id"]').prop('checked', $(this).prop('checked')).trigger('change');
            });
        });


        var deleteFormAction;
        $('td').on('click', '.delete', function (e) {
            $('#delete_form')[0].action = 'http://127.0.0.1:8000/admin/posts/__id'.replace('__id', $(this).data('id'));
            $('#delete_modal').modal('show');
        });

                $('input[name="row_id"]').on('change', function () {
            var ids = [];
            $('input[name="row_id"]').each(function() {
                if ($(this).is(':checked')) {
                    ids.push($(this).val());
                }
            });
            $('.selected_ids').val(ids);
        });
    </script>



<div class="modal modal-danger fade" tabindex="-1" id="bulk_delete_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title">
                    <i class="voyager-trash"></i> Are you sure you want to delete <span id="bulk_delete_count"></span> <span id="bulk_delete_display_name"></span>?
                </h4>
            </div>
            <div class="modal-body" id="bulk_delete_modal_body">
            </div>
            <div class="modal-footer">
                <form action="http://127.0.0.1:8000/admin/posts/0" id="bulk_delete_form" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="m42DZHnHE7dyxAxU7VuZmiRfEeBQpC8z47jLl9Ns">
                    <input type="hidden" name="ids" id="bulk_delete_input" value="">
                    <input type="submit" class="btn btn-danger pull-right delete-confirm" value="Yes, Delete These posts">
                </form>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">
                    Cancel
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div></body></html>
<head>
    <title>Viewing Posts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="m42DZHnHE7dyxAxU7VuZmiRfEeBQpC8z47jLl9Ns">
    <meta name="assets-path" content="http://127.0.0.1:8000/admin/voyager-assets">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <!-- Favicon -->
                <link rel="shortcut icon" href="http://127.0.0.1:8000/admin/voyager-assets?path=images%2Flogo-icon.png" type="image/png">
    


    <!-- App CSS -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/admin/voyager-assets?path=css%2Fapp.css">

        
    <!-- Few Dynamic Styles -->
    <style type="text/css">
        .voyager .side-menu .navbar-header {
            background:#22A7F0;
            border-color:#22A7F0;
        }
        .widget .btn-primary{
            border-color:#22A7F0;
        }
        .widget .btn-primary:focus, .widget .btn-primary:hover, .widget .btn-primary:active, .widget .btn-primary.active, .widget .btn-primary:active:focus{
            background:#22A7F0;
        }
        .voyager .breadcrumb a{
            color:#22A7F0;
        }
    </style>

    
    <style id="ace_editor.css">.ace_editor {position: relative;overflow: hidden;font: 12px/normal 'Monaco', 'Menlo', 'Ubuntu Mono', 'Consolas', 'source-code-pro', monospace;direction: ltr;text-align: left;-webkit-tap-highlight-color: rgba(0, 0, 0, 0);}.ace_scroller {position: absolute;overflow: hidden;top: 0;bottom: 0;background-color: inherit;-ms-user-select: none;-moz-user-select: none;-webkit-user-select: none;user-select: none;cursor: text;}.ace_content {position: absolute;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;min-width: 100%;}.ace_dragging .ace_scroller:before{position: absolute;top: 0;left: 0;right: 0;bottom: 0;content: '';background: rgba(250, 250, 250, 0.01);z-index: 1000;}.ace_dragging.ace_dark .ace_scroller:before{background: rgba(0, 0, 0, 0.01);}.ace_selecting, .ace_selecting * {cursor: text !important;}.ace_gutter {position: absolute;overflow : hidden;width: auto;top: 0;bottom: 0;left: 0;cursor: default;z-index: 4;-ms-user-select: none;-moz-user-select: none;-webkit-user-select: none;user-select: none;}.ace_gutter-active-line {position: absolute;left: 0;right: 0;}.ace_scroller.ace_scroll-left {box-shadow: 17px 0 16px -16px rgba(0, 0, 0, 0.4) inset;}.ace_gutter-cell {padding-left: 19px;padding-right: 6px;background-repeat: no-repeat;}.ace_gutter-cell.ace_error {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAABOFBMVEX/////////QRswFAb/Ui4wFAYwFAYwFAaWGAfDRymzOSH/PxswFAb/SiUwFAYwFAbUPRvjQiDllog5HhHdRybsTi3/Tyv9Tir+Syj/UC3////XurebMBIwFAb/RSHbPx/gUzfdwL3kzMivKBAwFAbbvbnhPx66NhowFAYwFAaZJg8wFAaxKBDZurf/RB6mMxb/SCMwFAYwFAbxQB3+RB4wFAb/Qhy4Oh+4QifbNRcwFAYwFAYwFAb/QRzdNhgwFAYwFAbav7v/Uy7oaE68MBK5LxLewr/r2NXewLswFAaxJw4wFAbkPRy2PyYwFAaxKhLm1tMwFAazPiQwFAaUGAb/QBrfOx3bvrv/VC/maE4wFAbRPBq6MRO8Qynew8Dp2tjfwb0wFAbx6eju5+by6uns4uH9/f36+vr/GkHjAAAAYnRSTlMAGt+64rnWu/bo8eAA4InH3+DwoN7j4eLi4xP99Nfg4+b+/u9B/eDs1MD1mO7+4PHg2MXa347g7vDizMLN4eG+Pv7i5evs/v79yu7S3/DV7/498Yv24eH+4ufQ3Ozu/v7+y13sRqwAAADLSURBVHjaZc/XDsFgGIBhtDrshlitmk2IrbHFqL2pvXf/+78DPokj7+Fz9qpU/9UXJIlhmPaTaQ6QPaz0mm+5gwkgovcV6GZzd5JtCQwgsxoHOvJO15kleRLAnMgHFIESUEPmawB9ngmelTtipwwfASilxOLyiV5UVUyVAfbG0cCPHig+GBkzAENHS0AstVF6bacZIOzgLmxsHbt2OecNgJC83JERmePUYq8ARGkJx6XtFsdddBQgZE2nPR6CICZhawjA4Fb/chv+399kfR+MMMDGOQAAAABJRU5ErkJggg==");background-repeat: no-repeat;background-position: 2px center;}.ace_gutter-cell.ace_warning {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAmVBMVEX///8AAAD///8AAAAAAABPSzb/5sAAAAB/blH/73z/ulkAAAAAAAD85pkAAAAAAAACAgP/vGz/rkDerGbGrV7/pkQICAf////e0IsAAAD/oED/qTvhrnUAAAD/yHD/njcAAADuv2r/nz//oTj/p064oGf/zHAAAAA9Nir/tFIAAAD/tlTiuWf/tkIAAACynXEAAAAAAAAtIRW7zBpBAAAAM3RSTlMAABR1m7RXO8Ln31Z36zT+neXe5OzooRDfn+TZ4p3h2hTf4t3k3ucyrN1K5+Xaks52Sfs9CXgrAAAAjklEQVR42o3PbQ+CIBQFYEwboPhSYgoYunIqqLn6/z8uYdH8Vmdnu9vz4WwXgN/xTPRD2+sgOcZjsge/whXZgUaYYvT8QnuJaUrjrHUQreGczuEafQCO/SJTufTbroWsPgsllVhq3wJEk2jUSzX3CUEDJC84707djRc5MTAQxoLgupWRwW6UB5fS++NV8AbOZgnsC7BpEAAAAABJRU5ErkJggg==");background-position: 2px center;}.ace_gutter-cell.ace_info {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAAJ0Uk5TAAB2k804AAAAPklEQVQY02NgIB68QuO3tiLznjAwpKTgNyDbMegwisCHZUETUZV0ZqOquBpXj2rtnpSJT1AEnnRmL2OgGgAAIKkRQap2htgAAAAASUVORK5CYII=");background-position: 2px center;}.ace_dark .ace_gutter-cell.ace_info {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAAJFBMVEUAAAChoaGAgIAqKiq+vr6tra1ZWVmUlJSbm5s8PDxubm56enrdgzg3AAAAAXRSTlMAQObYZgAAAClJREFUeNpjYMAPdsMYHegyJZFQBlsUlMFVCWUYKkAZMxZAGdxlDMQBAG+TBP4B6RyJAAAAAElFTkSuQmCC");}.ace_scrollbar {position: absolute;right: 0;bottom: 0;z-index: 6;}.ace_scrollbar-inner {position: absolute;cursor: text;left: 0;top: 0;}.ace_scrollbar-v{overflow-x: hidden;overflow-y: scroll;top: 0;}.ace_scrollbar-h {overflow-x: scroll;overflow-y: hidden;left: 0;}.ace_print-margin {position: absolute;height: 100%;}.ace_text-input {position: absolute;z-index: 0;width: 0.5em;height: 1em;opacity: 0;background: transparent;-moz-appearance: none;appearance: none;border: none;resize: none;outline: none;overflow: hidden;font: inherit;padding: 0 1px;margin: 0 -1px;text-indent: -1em;-ms-user-select: text;-moz-user-select: text;-webkit-user-select: text;user-select: text;white-space: pre!important;}.ace_text-input.ace_composition {background: inherit;color: inherit;z-index: 1000;opacity: 1;text-indent: 0;}.ace_layer {z-index: 1;position: absolute;overflow: hidden;word-wrap: normal;white-space: pre;height: 100%;width: 100%;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;pointer-events: none;}.ace_gutter-layer {position: relative;width: auto;text-align: right;pointer-events: auto;}.ace_text-layer {font: inherit !important;}.ace_cjk {display: inline-block;text-align: center;}.ace_cursor-layer {z-index: 4;}.ace_cursor {z-index: 4;position: absolute;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;border-left: 2px solid;transform: translatez(0);}.ace_multiselect .ace_cursor {border-left-width: 1px;}.ace_slim-cursors .ace_cursor {border-left-width: 1px;}.ace_overwrite-cursors .ace_cursor {border-left-width: 0;border-bottom: 1px solid;}.ace_hidden-cursors .ace_cursor {opacity: 0.2;}.ace_smooth-blinking .ace_cursor {-webkit-transition: opacity 0.18s;transition: opacity 0.18s;}.ace_marker-layer .ace_step, .ace_marker-layer .ace_stack {position: absolute;z-index: 3;}.ace_marker-layer .ace_selection {position: absolute;z-index: 5;}.ace_marker-layer .ace_bracket {position: absolute;z-index: 6;}.ace_marker-layer .ace_active-line {position: absolute;z-index: 2;}.ace_marker-layer .ace_selected-word {position: absolute;z-index: 4;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;}.ace_line .ace_fold {-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;display: inline-block;height: 11px;margin-top: -2px;vertical-align: middle;background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAJCAYAAADU6McMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJpJREFUeNpi/P//PwOlgAXGYGRklAVSokD8GmjwY1wasKljQpYACtpCFeADcHVQfQyMQAwzwAZI3wJKvCLkfKBaMSClBlR7BOQikCFGQEErIH0VqkabiGCAqwUadAzZJRxQr/0gwiXIal8zQQPnNVTgJ1TdawL0T5gBIP1MUJNhBv2HKoQHHjqNrA4WO4zY0glyNKLT2KIfIMAAQsdgGiXvgnYAAAAASUVORK5CYII="),url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA3CAYAAADNNiA5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAACJJREFUeNpi+P//fxgTAwPDBxDxD078RSX+YeEyDFMCIMAAI3INmXiwf2YAAAAASUVORK5CYII=");background-repeat: no-repeat, repeat-x;background-position: center center, top left;color: transparent;border: 1px solid black;border-radius: 2px;cursor: pointer;pointer-events: auto;}.ace_dark .ace_fold {}.ace_fold:hover{background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAJCAYAAADU6McMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJpJREFUeNpi/P//PwOlgAXGYGRklAVSokD8GmjwY1wasKljQpYACtpCFeADcHVQfQyMQAwzwAZI3wJKvCLkfKBaMSClBlR7BOQikCFGQEErIH0VqkabiGCAqwUadAzZJRxQr/0gwiXIal8zQQPnNVTgJ1TdawL0T5gBIP1MUJNhBv2HKoQHHjqNrA4WO4zY0glyNKLT2KIfIMAAQsdgGiXvgnYAAAAASUVORK5CYII="),url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA3CAYAAADNNiA5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAACBJREFUeNpi+P//fz4TAwPDZxDxD5X4i5fLMEwJgAADAEPVDbjNw87ZAAAAAElFTkSuQmCC");}.ace_tooltip {background-color: #FFF;background-image: -webkit-linear-gradient(top, transparent, rgba(0, 0, 0, 0.1));background-image: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.1));border: 1px solid gray;border-radius: 1px;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);color: black;max-width: 100%;padding: 3px 4px;position: fixed;z-index: 999999;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;cursor: default;white-space: pre;word-wrap: break-word;line-height: normal;font-style: normal;font-weight: normal;letter-spacing: normal;pointer-events: none;}.ace_folding-enabled > .ace_gutter-cell {padding-right: 13px;}.ace_fold-widget {-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box;margin: 0 -12px 0 1px;display: none;width: 11px;vertical-align: top;background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAANElEQVR42mWKsQ0AMAzC8ixLlrzQjzmBiEjp0A6WwBCSPgKAXoLkqSot7nN3yMwR7pZ32NzpKkVoDBUxKAAAAABJRU5ErkJggg==");background-repeat: no-repeat;background-position: center;border-radius: 3px;border: 1px solid transparent;cursor: pointer;}.ace_folding-enabled .ace_fold-widget {display: inline-block;   }.ace_fold-widget.ace_end {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAANElEQVR42m3HwQkAMAhD0YzsRchFKI7sAikeWkrxwScEB0nh5e7KTPWimZki4tYfVbX+MNl4pyZXejUO1QAAAABJRU5ErkJggg==");}.ace_fold-widget.ace_closed {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAAGCAYAAAAG5SQMAAAAOUlEQVR42jXKwQkAMAgDwKwqKD4EwQ26sSOkVWjgIIHAzPiCgaqiqnJHZnKICBERHN194O5b9vbLuAVRL+l0YWnZAAAAAElFTkSuQmCCXA==");}.ace_fold-widget:hover {border: 1px solid rgba(0, 0, 0, 0.3);background-color: rgba(255, 255, 255, 0.2);box-shadow: 0 1px 1px rgba(255, 255, 255, 0.7);}.ace_fold-widget:active {border: 1px solid rgba(0, 0, 0, 0.4);background-color: rgba(0, 0, 0, 0.05);box-shadow: 0 1px 1px rgba(255, 255, 255, 0.8);}.ace_dark .ace_fold-widget {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAHklEQVQIW2P4//8/AzoGEQ7oGCaLLAhWiSwB146BAQCSTPYocqT0AAAAAElFTkSuQmCC");}.ace_dark .ace_fold-widget.ace_end {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAH0lEQVQIW2P4//8/AxQ7wNjIAjDMgC4AxjCVKBirIAAF0kz2rlhxpAAAAABJRU5ErkJggg==");}.ace_dark .ace_fold-widget.ace_closed {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAAFCAYAAACAcVaiAAAAHElEQVQIW2P4//+/AxAzgDADlOOAznHAKgPWAwARji8UIDTfQQAAAABJRU5ErkJggg==");}.ace_dark .ace_fold-widget:hover {box-shadow: 0 1px 1px rgba(255, 255, 255, 0.2);background-color: rgba(255, 255, 255, 0.1);}.ace_dark .ace_fold-widget:active {box-shadow: 0 1px 1px rgba(255, 255, 255, 0.2);}.ace_fold-widget.ace_invalid {background-color: #FFB4B4;border-color: #DE5555;}.ace_fade-fold-widgets .ace_fold-widget {-webkit-transition: opacity 0.4s ease 0.05s;transition: opacity 0.4s ease 0.05s;opacity: 0;}.ace_fade-fold-widgets:hover .ace_fold-widget {-webkit-transition: opacity 0.05s ease 0.05s;transition: opacity 0.05s ease 0.05s;opacity:1;}.ace_underline {text-decoration: underline;}.ace_bold {font-weight: bold;}.ace_nobold .ace_bold {font-weight: normal;}.ace_italic {font-style: italic;}.ace_error-marker {background-color: rgba(255, 0, 0,0.2);position: absolute;z-index: 9;}.ace_highlight-marker {background-color: rgba(255, 255, 0,0.2);position: absolute;z-index: 8;}.ace_br1 {border-top-left-radius    : 3px;}.ace_br2 {border-top-right-radius   : 3px;}.ace_br3 {border-top-left-radius    : 3px; border-top-right-radius:    3px;}.ace_br4 {border-bottom-right-radius: 3px;}.ace_br5 {border-top-left-radius    : 3px; border-bottom-right-radius: 3px;}.ace_br6 {border-top-right-radius   : 3px; border-bottom-right-radius: 3px;}.ace_br7 {border-top-left-radius    : 3px; border-top-right-radius:    3px; border-bottom-right-radius: 3px;}.ace_br8 {border-bottom-left-radius : 3px;}.ace_br9 {border-top-left-radius    : 3px; border-bottom-left-radius:  3px;}.ace_br10{border-top-right-radius   : 3px; border-bottom-left-radius:  3px;}.ace_br11{border-top-left-radius    : 3px; border-top-right-radius:    3px; border-bottom-left-radius:  3px;}.ace_br12{border-bottom-right-radius: 3px; border-bottom-left-radius:  3px;}.ace_br13{border-top-left-radius    : 3px; border-bottom-right-radius: 3px; border-bottom-left-radius:  3px;}.ace_br14{border-top-right-radius   : 3px; border-bottom-right-radius: 3px; border-bottom-left-radius:  3px;}.ace_br15{border-top-left-radius    : 3px; border-top-right-radius:    3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px;}.ace_text-input-ios {position: absolute !important;top: -100000px !important;left: -100000px !important;}
/*# sourceURL=ace/css/ace_editor.css */</style><style id="ace-tm">.ace-tm .ace_gutter {background: #f0f0f0;color: #333;}.ace-tm .ace_print-margin {width: 1px;background: #e8e8e8;}.ace-tm .ace_fold {background-color: #6B72E6;}.ace-tm {background-color: #FFFFFF;color: black;}.ace-tm .ace_cursor {color: black;}.ace-tm .ace_invisible {color: rgb(191, 191, 191);}.ace-tm .ace_storage,.ace-tm .ace_keyword {color: blue;}.ace-tm .ace_constant {color: rgb(197, 6, 11);}.ace-tm .ace_constant.ace_buildin {color: rgb(88, 72, 246);}.ace-tm .ace_constant.ace_language {color: rgb(88, 92, 246);}.ace-tm .ace_constant.ace_library {color: rgb(6, 150, 14);}.ace-tm .ace_invalid {background-color: rgba(255, 0, 0, 0.1);color: red;}.ace-tm .ace_support.ace_function {color: rgb(60, 76, 114);}.ace-tm .ace_support.ace_constant {color: rgb(6, 150, 14);}.ace-tm .ace_support.ace_type,.ace-tm .ace_support.ace_class {color: rgb(109, 121, 222);}.ace-tm .ace_keyword.ace_operator {color: rgb(104, 118, 135);}.ace-tm .ace_string {color: rgb(3, 106, 7);}.ace-tm .ace_comment {color: rgb(76, 136, 107);}.ace-tm .ace_comment.ace_doc {color: rgb(0, 102, 255);}.ace-tm .ace_comment.ace_doc.ace_tag {color: rgb(128, 159, 191);}.ace-tm .ace_constant.ace_numeric {color: rgb(0, 0, 205);}.ace-tm .ace_variable {color: rgb(49, 132, 149);}.ace-tm .ace_xml-pe {color: rgb(104, 104, 91);}.ace-tm .ace_entity.ace_name.ace_function {color: #0000A2;}.ace-tm .ace_heading {color: rgb(12, 7, 255);}.ace-tm .ace_list {color:rgb(185, 6, 144);}.ace-tm .ace_meta.ace_tag {color:rgb(0, 22, 142);}.ace-tm .ace_string.ace_regex {color: rgb(255, 0, 0)}.ace-tm .ace_marker-layer .ace_selection {background: rgb(181, 213, 255);}.ace-tm.ace_multiselect .ace_selection.ace_start {box-shadow: 0 0 3px 0px white;}.ace-tm .ace_marker-layer .ace_step {background: rgb(252, 255, 0);}.ace-tm .ace_marker-layer .ace_stack {background: rgb(164, 229, 101);}.ace-tm .ace_marker-layer .ace_bracket {margin: -1px 0 0 -1px;border: 1px solid rgb(192, 192, 192);}.ace-tm .ace_marker-layer .ace_active-line {background: rgba(0, 0, 0, 0.07);}.ace-tm .ace_gutter-active-line {background-color : #dcdcdc;}.ace-tm .ace_marker-layer .ace_selected-word {background: rgb(250, 250, 255);border: 1px solid rgb(200, 200, 250);}.ace-tm .ace_indent-guide {background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAACCAYAAACZgbYnAAAAE0lEQVQImWP4////f4bLly//BwAmVgd1/w11/gAAAABJRU5ErkJggg==") right repeat-y;}
/*# sourceURL=ace/css/ace-tm */</style><style>    .error_widget_wrapper {        background: inherit;        color: inherit;        border:none    }    .error_widget {        border-top: solid 2px;        border-bottom: solid 2px;        margin: 5px 0;        padding: 10px 40px;        white-space: pre-wrap;    }    .error_widget.ace_error, .error_widget_arrow.ace_error{        border-color: #ff5a5a    }    .error_widget.ace_warning, .error_widget_arrow.ace_warning{        border-color: #F1D817    }    .error_widget.ace_info, .error_widget_arrow.ace_info{        border-color: #5a5a5a    }    .error_widget.ace_ok, .error_widget_arrow.ace_ok{        border-color: #5aaa5a    }    .error_widget_arrow {        position: absolute;        border: solid 5px;        border-top-color: transparent!important;        border-right-color: transparent!important;        border-left-color: transparent!important;        top: -5px;    }</style></head>
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
                                                                                                    <li>Posts</li>
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
    <div class="ps__rail-x" style="width: 60px; left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 14px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 546px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 465px;"></div></div></div>
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
                                                                                            Title
                                                                                        </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                                                                            Post Image
                                                                                        : activate to sort column ascending" style="width: 89.9375px;">
                                                                                            Post Image
                                                                                        </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                                                                            Status
                                                                                        : activate to sort column ascending" style="width: 59.4688px;">
                                                                                            Status
                                                                                        </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                                                                            Created At
                                                                                        : activate to sort column ascending" style="width: 139.885px;">
                                                                                            Created At
                                                                                        </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                                                                            SEO Title
                                                                                        : activate to sort column ascending" style="width: 72.8958px;">
                                                                                            SEO Title
                                                                                        </th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="
                                                                                            Featured
                                                                                        : activate to sort column ascending" style="width: 74.0312px;">
                                                                                            Featured
                                                                                        </th><th class="actions text-right dt-not-orderable sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 218.979px;">Actions</th></tr>
                                    </thead>
                                    <tbody>
                                                                            
                                                                            
                                                                            
                                                                            
                                                                        <tr role="row" class="odd">
                                                                                        <td>
                                                    <input type="checkbox" name="row_id" id="checkbox_1" value="1">
                                                </td>
                                                                                                                                                                            <td>
                                                                                                                                                            <div>Lorem Ipsum Post</div>
                                                                                                </td>
                                                                                                                                    <td>
                                                                                                        <img src="http://localhost/storage/posts/post1.jpg" style="width:100px">
                                                                                                </td>
                                                                                                                                    <td>
                                                    
                                                        published
    
                                                                                                </td>
                                                                                                                                    <td>
                                                                                                                                                                2023-08-02 08:05:10
                                                                                                                                                    </td>
                                                                                                                                    <td>
                                                                                                                                                            <div></div>
                                                                                                </td>
                                                                                                                                    <td>
                                                                                                                                                            0
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
                                        </tr><tr role="row" class="even">
                                                                                        <td>
                                                    <input type="checkbox" name="row_id" id="checkbox_2" value="2">
                                                </td>
                                                                                                                                                                            <td>
                                                                                                                                                            <div>My Sample Post</div>
                                                                                                </td>
                                                                                                                                    <td>
                                                                                                        <img src="http://localhost/storage/posts/post2.jpg" style="width:100px">
                                                                                                </td>
                                                                                                                                    <td>
                                                    
                                                        published
    
                                                                                                </td>
                                                                                                                                    <td>
                                                                                                                                                                2023-08-02 08:05:10
                                                                                                                                                    </td>
                                                                                                                                    <td>
                                                                                                                                                            <div></div>
                                                                                                </td>
                                                                                                                                    <td>
                                                                                                                                                            0
                                                                                                                                                    </td>
                                                                                    <td class="no-sort no-click bread-actions">
                                                                                                                                                    <a href="javascript:;" title="Delete" class="btn btn-sm btn-danger pull-right delete" data-id="2" id="delete-2">
                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                </a>
                                                                                                                                                                                                                                                                                                                                                                                                                <a href="http://127.0.0.1:8000/admin/posts/2/edit" title="Edit" class="btn btn-sm btn-primary pull-right edit">
                    <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                </a>
                                                                                                                                                                                                                <a href="http://127.0.0.1:8000/admin/posts/2" title="View" class="btn btn-sm btn-warning pull-right view">
                    <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">View</span>
                </a>
                                                                                                                                                    </td>
                                        </tr><tr role="row" class="odd">
                                                                                        <td>
                                                    <input type="checkbox" name="row_id" id="checkbox_3" value="3">
                                                </td>
                                                                                                                                                                            <td>
                                                                                                                                                            <div>Latest Post</div>
                                                                                                </td>
                                                                                                                                    <td>
                                                                                                        <img src="http://localhost/storage/posts/post3.jpg" style="width:100px">
                                                                                                </td>
                                                                                                                                    <td>
                                                    
                                                        published
    
                                                                                                </td>
                                                                                                                                    <td>
                                                                                                                                                                2023-08-02 08:05:10
                                                                                                                                                    </td>
                                                                                                                                    <td>
                                                                                                                                                            <div></div>
                                                                                                </td>
                                                                                                                                    <td>
                                                                                                                                                            0
                                                                                                                                                    </td>
                                                                                    <td class="no-sort no-click bread-actions">
                                                                                                                                                    <a href="javascript:;" title="Delete" class="btn btn-sm btn-danger pull-right delete" data-id="3" id="delete-3">
                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                </a>
                                                                                                                                                                                                                                                                                                                                                                                                                <a href="http://127.0.0.1:8000/admin/posts/3/edit" title="Edit" class="btn btn-sm btn-primary pull-right edit">
                    <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                </a>
                                                                                                                                                                                                                <a href="http://127.0.0.1:8000/admin/posts/3" title="View" class="btn btn-sm btn-warning pull-right view">
                    <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">View</span>
                </a>
                                                                                                                                                    </td>
                                        </tr><tr role="row" class="even">
                                                                                        <td>
                                                    <input type="checkbox" name="row_id" id="checkbox_4" value="4">
                                                </td>
                                                                                                                                                                            <td>
                                                                                                                                                            <div>Yarr Post</div>
                                                                                                </td>
                                                                                                                                    <td>
                                                                                                        <img src="http://localhost/storage/posts/post4.jpg" style="width:100px">
                                                                                                </td>
                                                                                                                                    <td>
                                                    
                                                        published
    
                                                                                                </td>
                                                                                                                                    <td>
                                                                                                                                                                2023-08-02 08:05:10
                                                                                                                                                    </td>
                                                                                                                                    <td>
                                                                                                                                                            <div></div>
                                                                                                </td>
                                                                                                                                    <td>
                                                                                                                                                            0
                                                                                                                                                    </td>
                                                                                    <td class="no-sort no-click bread-actions">
                                                                                                                                                    <a href="javascript:;" title="Delete" class="btn btn-sm btn-danger pull-right delete" data-id="4" id="delete-4">
                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                </a>
                                                                                                                                                                                                                                                                                                                                                                                                                <a href="http://127.0.0.1:8000/admin/posts/4/edit" title="Edit" class="btn btn-sm btn-primary pull-right edit">
                    <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                </a>
                                                                                                                                                                                                                <a href="http://127.0.0.1:8000/admin/posts/4" title="View" class="btn btn-sm btn-warning pull-right view">
                    <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">View</span>
                </a>
                                                                                                                                                    </td>
                                        </tr></tbody>
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
        <!-- DataTables -->
            <script>
            $(document).ready(function () {
                                var table = $('#dataTable').DataTable({"order":[],"language":{"sEmptyTable":"No data available in table","sInfo":"Showing _START_ to _END_ of _TOTAL_ entries","sInfoEmpty":"Showing 0 to 0 of 0 entries","sInfoFiltered":"(filtered from _MAX_ total entries)","sInfoPostFix":"","sInfoThousands":",","sLengthMenu":"Show _MENU_ entries","sLoadingRecords":"Loading...","sProcessing":"Processing...","sSearch":"Search:","sZeroRecords":"No matching records found","oPaginate":{"sFirst":"First","sLast":"Last","sNext":"Next","sPrevious":"Previous"},"oAria":{"sSortAscending":": activate to sort column ascending","sSortDescending":": activate to sort column descending"}},"columnDefs":[{"targets":"dt-not-orderable","searchable":false,"orderable":false}]});
                
                            $('.select_all').on('click', function(e) {
                    $('input[name="row_id"]').prop('checked', $(this).prop('checked')).trigger('change');
                });
            });
    
    
            var deleteFormAction;
            $('td').on('click', '.delete', function (e) {
                $('#delete_form')[0].action = 'http://127.0.0.1:8000/admin/posts/__id'.replace('__id', $(this).data('id'));
                $('#delete_modal').modal('show');
            });
    
                    $('input[name="row_id"]').on('change', function () {
                var ids = [];
                $('input[name="row_id"]').each(function() {
                    if ($(this).is(':checked')) {
                        ids.push($(this).val());
                    }
                });
                $('.selected_ids').val(ids);
            });
        </script>
    
    
    
    <div class="modal modal-danger fade" tabindex="-1" id="bulk_delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">
                        <i class="voyager-trash"></i> Are you sure you want to delete <span id="bulk_delete_count"></span> <span id="bulk_delete_display_name"></span>?
                    </h4>
                </div>
                <div class="modal-body" id="bulk_delete_modal_body">
                </div>
                <div class="modal-footer">
                    <form action="http://127.0.0.1:8000/admin/posts/0" id="bulk_delete_form" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="m42DZHnHE7dyxAxU7VuZmiRfEeBQpC8z47jLl9Ns">
                        <input type="hidden" name="ids" id="bulk_delete_input" value="">
                        <input type="submit" class="btn btn-danger pull-right delete-confirm" value="Yes, Delete These posts">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">
                        Cancel
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div></body>