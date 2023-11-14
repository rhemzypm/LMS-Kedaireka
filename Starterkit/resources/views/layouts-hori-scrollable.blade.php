@extends('layouts.layout-horizontal')
@section('title')
    Horizontal Scrollable Layout
@endsection
@section('page-title')
    Horizontal Scrollable Layout
@endsection
@section('body')

    <body data-topbar="dark" data-layout="horizontal" data-layout-scrollable="true">
    @endsection
    @section('content')
        
    @endsection
    @section('scripts')
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endsection
