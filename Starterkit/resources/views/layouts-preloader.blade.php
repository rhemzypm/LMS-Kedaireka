@extends('layouts.master')
@section('title')
    Preloader
@endsection
@section('page-title')
    Preloader
@endsection
@section('body')

    <body data-sidebar="colored">
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
