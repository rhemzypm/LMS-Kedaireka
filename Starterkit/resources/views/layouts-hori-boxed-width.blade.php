@extends('layouts.layout-horizontal')
@section('title')
    Boxed Width
@endsection
@section('page-title')
    Boxed Width
@endsection
@section('body')

    <body data-layout="horizontal" data-layout-size="boxed">
    @endsection
    @section('content')
        
    @endsection
    @section('scripts')
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endsection
