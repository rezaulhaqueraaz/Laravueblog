@extends('layouts.backend.app')
@section('title','Dashboard')
@push('topcss')
@endpush
@push('css')
    <link href="{{asset('backend/assets/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/assets/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
@endpush
@push('topjs')
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title"><b>All Post</b></h4>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Status</th>
                            <th>Is_Approved</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($postall as $post)
                        <tr>
                            <td>{!!substr($post->title,0,75)!!}</td>
                            <td>{{$post->user->name}}</td>

                            <td>{{$post->status==1?'Published':'Un Published'}}</td>
                            <td>{{$post->is_approved==1?'Approved':'Not Approved'}}</td>

                            <td>{{$post->created_at}}</td>
                            <td class="text-center">
                                <a href="{{route('admin.post.edit',$post->id)}}" ><span class="badge badge-primary"><i class="fa fa-edit"></i></span></a>
                                <a href="{{route('admin.post.view',$post->id)}}"><span class="badge badge-success"><i class="fa fa-low-vision"></i></span></a>
                                <a href="#" data-toggle="modal" data-target="#{{$post->id}}" ><span class="badge badge-danger"><i class="fa fa-trash"></i></span></a>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Are you Sure You want to Delete This?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {!!substr($post->title,0,75)!!}
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{route('admin.post.delete',$post->id)}}" class="btn btn-danger">Yes</a>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                       @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('js')
    <script src="{{asset('backend/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#datatable').dataTable();
        });
    </script>
@endpush
