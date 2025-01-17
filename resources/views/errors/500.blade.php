@extends('backend.layouts.master')

@section('title')
Lỗi 500
@endsection

@section('feature-title')
500
@endsection

@section('feature-description')
500
@endsection

@section('custom-css')

@endsection

@section('content')
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                            
                                <div class="text-center">
                                    <a href="index.html">
                                        <span><img src="assets\images\logo-dark.png" alt="" height="22"></span>
                                    </a>
                                </div>

                                <div class="text-center mt-4">
                                    <h1 class="text-error">500</h1>
                                    <h3 class="mt-3 mb-2">Internal Server Error</h3>
                                    <p class="text-muted mb-3">Why not try refreshing your page? or you can contact <a href="" class="text-dark"><b>Support</b></a></p>

                                    <a href="{{route('backend.danhmuc.index')}}" class="btn btn-success waves-effect waves-light">Back to Home</a>
                                </div>

                            </div> <!-- end card-body -->        
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
@endsection

@section('custom-scripts')

@endsection
