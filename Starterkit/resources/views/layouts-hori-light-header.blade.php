@extends('layouts.layout-horizontal')
@section('title')
    Light Header
@endsection
@section('page-title')
    Light Header
@endsection
@section('body')

    <body data-layout="horizontal">
    @endsection
    @section('content')
        
    
    @endsection
    @section('scripts')
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endsection
