@extends('layouts.layout-horizontal')
@section('title')
    Horizontal Preloader Layout
@endsection
@section('page-title')
    Horizontal Preloader Layout
@endsection
@section('body')

    <body data-layout="horizontal">
    @endsection
    @section('content')
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <i class="ri-loader-line spin-icon"></i>
                </div>
            </div>
        </div>

       
    @endsection
    @section('scripts')
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endsection
