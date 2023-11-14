@extends('layouts.layout-horizontal')
@section('title')
    Topbar Dark
@endsection
@section('page-title')
    Topbar Dark
@endsection
@section('body')

    <body data-topbar="dark" data-layout="horizontal">
    @endsection
    @section('content')
       
    
    @endsection
    @section('scripts')
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endsection
