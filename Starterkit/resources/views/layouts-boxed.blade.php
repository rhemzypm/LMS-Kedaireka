@extends('layouts.master')
@section('title')
    Boxed Layout
@endsection
@section('page-title')
    Boxed Layout
@endsection
@section('body')

    <body data-keep-enlarged="true" class="vertical-collpsed" data-layout-size="boxed">
    @endsection
    @section('content')
        
    @endsection
    @section('scripts')
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endsection
