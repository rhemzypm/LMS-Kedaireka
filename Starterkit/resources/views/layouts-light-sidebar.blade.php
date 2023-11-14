@extends('layouts.master')
@section('title')
    Light Sidebar
@endsection
@section('page-title')
    Light Sidebar
@endsection
@section('body')

    <body data-sidebar="light">
    @endsection
    @section('content')
       
    
    @endsection
    @section('scripts')
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endsection
