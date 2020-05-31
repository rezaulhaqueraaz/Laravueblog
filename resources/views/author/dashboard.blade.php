@extends('layouts.author.app')
@section('title','Dashboard')
@push('topcss')
@endpush
@push('css')
    <style>
        .card{
            padding: 1%;
        }
    </style>
@endpush
@push('topjs')
@endpush
@section('content')
@include('layouts.author.parts.topbar')
<div class="container">
    Dashboard
</div>
@endsection
@push('js')
@endpush
