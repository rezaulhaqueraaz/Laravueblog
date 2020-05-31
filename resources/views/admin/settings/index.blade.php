@extends('layouts.backend.app')
@section('title','Dashboard')
@push('topcss')
@endpush
@push('css')

@endpush
@push('topjs')
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="card-box" style="overflow: hidden">
                <div class="card-body">
                    <div class="col-md-3">
                        @include('layouts.backendparts.settingsmenu')
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-custom text-white"style="padding: 1%">
                                <i class="md md-https text-dark"></i> Change Password
                            </div>
                            <div class="card-body">
                                <br>
                                <form action="{{route('admin.settings.password')}}" method="POST" >
                                    @csrf
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" id="fg" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="confirmpassword" class="form-control" id="exampleInputPassword1" placeholder="Confirm Passowrd">
                                    </div>
                                    <button type="submit" class="btn-sm btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
