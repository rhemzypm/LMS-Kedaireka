@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('css')
    <!-- jsvectormap css -->
    <link href="{{ URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('page-title')
    Dashboard
@endsection
@section('body')

    <body data-sidebar="colored">
    @endsection
    @section('content')
            <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h5 class="card-header">Kelas Mendatang</h5>
                    <div class="card-body">
                        <h5 class="card-title">9:30 AM (Dalam 30 menit lagi)</h5>
                        <p class="card-text">LB01 - Internet Untuk Bisnis - Sosial media mendukung bisnis UMKM</p>
                        <a href="#" class="btn" style="background-color: #2651e9; color: #ffffff;">Masuk Kelas</a>
                    </div>
                </div>
            </div>
        </div>        
        <!-- END ROW -->
    @endsection
    @section('scripts')
        <!-- apexcharts -->
        <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Vector map-->
        <script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
        <script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>

        <script src="{{ URL::asset('build/js/pages/dashboard.init.js') }}"></script>
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endsection
