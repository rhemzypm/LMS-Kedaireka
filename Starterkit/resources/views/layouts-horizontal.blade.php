@extends('layouts.layout-horizontal')
@section('title')
    Horizontal
@endsection
@section('page-title')
    Horizontal
@endsection
@section('body')

    <body data-topbar="colored" data-layout="horizontal">
    @endsection
    @section('content')
        
    
    @endsection
    @section('scripts')
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endsection
