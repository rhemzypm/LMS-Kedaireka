@extends('layouts.master')
@section('title')
    Compact Sidebar
@endsection
@section('page-title')
    Compact Sidebar
@endsection
@section('body')

    <body data-sidebar-size="small">
    @endsection
    @section('content')
       
    
    @endsection
    @section('scripts')
    
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endsection
