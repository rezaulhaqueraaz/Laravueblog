@extends('layouts.author.app')
@section('title','Dashboard')
@push('topcss')
@endpush
@push('css')
    <!-- Plugins css-->
    <link href="{{asset('backend/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/assets/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/assets/plugins/multiselect/css/multi-select.css')}}"  rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
@endpush
@push('topjs')
@endpush
@section('content')
    @include('layouts.author.parts.topbar')
    <div class="container">
        <div class="medicine">
            <form action="{{route('author.post.add')}}" method="post"  enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card-box">
                            <ol class="breadcrumb">
                                <li><a href="{{route('author.dashboard')}}">Dashboard</a></li>
{{--                                <li><a href="{{route('admin.post.table')}}">All Post</a></li>--}}
                                <li class="active">New Post</li>
                            </ol>
                            <h4 class="text-dark header-title m-t-0">Post</h4>
                            <div class="card-box">
                                <div class="form-group">
                                    <input type="text" name="title"  class="form-control" placeholder="Post Title">
                                </div>
                                <textarea cols="15" rows="12" name="description" class="form-control my-editor"></textarea>
                            </div>
                            <h4 class="text-dark header-title m-t-0">Post Excerpt</h4>
                            <div class="card-box">
                                <textarea cols="15" rows="8" name="excerpt" class="form-control "></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="text-dark header-title m-t-0 m-b-30">Fetured Images</h4>
                            <div class="img-thumbnail" style="overflow: hidden;">
                                <img width="250" id="blah"  src="https://cdn.pixabay.com/photo/2014/08/12/00/01/oia-416135_960_720.jpg" alt="">
                            </div>
                            <div class="form-group m-b-0">
                                <input type="file" id="imgInp" name="file" class="filestyle" data-buttonname="btn-primary">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="inputState">Category</label>
                                <select name="category[]" class="select2 select2-multiple" multiple="multiple" multiple data-placeholder="Choose ...">
                                    @foreach($category as $cate )
                                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputState">Tags</label>
                                <select name="tag[]" class="select2 select2-multiple" multiple="multiple" multiple data-placeholder="Choose ...">
                                    @foreach($tag as $tags )
                                        <option value="{{$tags->id}}">{{$tags->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputState">Position</label>
                                <select name="position" id="inputState" class="form-control">
                                    <option value="4">Blog Section</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 col-sm-8">
                                    <div class="checkbox">
                                        <input id="remember-2" name="status" type="checkbox" data-parsley-multiple="remember-2">
                                        <label for="remember-2"> Publish </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-9 text-right">
                                        <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light">ADD</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{asset('backend/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/switchery/js/switchery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/assets/plugins/multiselect/js/jquery.multi-select.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/assets/plugins/jquery-quicksearch/jquery.quicksearch.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/select2/js/select2.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend/assets/plugins/bootstrap-select/js/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript"></script>

    <script type="text/javascript" src="{{asset('backend/assets/plugins/autocomplete/jquery.mockjax.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/assets/plugins/autocomplete/jquery.autocomplete.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/assets/plugins/autocomplete/countries.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/assets/pages/autocomplete.js')}}"></script>

    <script type="text/javascript" src="{{asset('backend/assets/pages/jquery.form-advanced.init.js')}}"></script>





    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#imgInp").change(function() {
            readURL(this);
        });
    </script>
@endpush



