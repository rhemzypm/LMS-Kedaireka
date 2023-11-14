@extends('layouts.master')
@section('title')
    Dark Sidebar
@endsection
@section('css')
    <!-- plugin css -->
    <link href="{{ URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('page-title')
    Dark Sidebar
@endsection
@section('body')

    <body data-sidebar="dark">
    @endsection
    @section('content')
       
    
    @endsection
    @section('scripts')
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endsection
