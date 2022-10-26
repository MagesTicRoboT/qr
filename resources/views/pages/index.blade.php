@extends('master.app')
@section('content')
    <!-- Hero -->
    <div class="bg-image-bottom">
        <div class="bg-primary-dark-op">
            <div class="content content-top text-center overflow-hidden">
                <div class="py-10">
                    <h1 class="font-w700 text-white mb-10 js-appear-enabled animated fadeInUp" data-toggle="appear" data-class="animated fadeInUp">Index</h1>
                    <h2 class="h4 font-w400 text-white-op js-appear-enabled animated fadeInUp" data-toggle="appear" data-class="animated fadeInUp">Welcome to Qr Code Generator!</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="content content-full">
            <div class="row no-gutters justify-content-center text-center nice-copy py-50">
                <div class="col-12">
                    <div class="text-left">
                        <span class="d-inline-block bg-body-light rounded-pill py-5 px-15 mb-15 font-w600">Version 1.0</span>
                        <h1 class="font-w600 font-size-h2 mb-20">
                            Next generation, Qr Code
                        </h1>
                        <p class="font-size-lg nice-copy text-muted mb-30">
                            There are many online qr generator website, that can be very costly if you want to create a qr code for your dynamic content, url etc. For that we got you covered. Now you can create your own qr code and manage it by yourself.
                        </p>
                        <p class="text-danger">You Need to login in order to use our service</p>
                        <a class="btn btn-hero btn-alt-secondary" href="{{route('home')}}">
                            <i class="fa fa-arrow-right text-muted mr-5"></i> Enter Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-body-light overflow-hidden">
        <div class="content content-full">
            <div class="row no-gutters justify-content-center text-center nice-copy py-50">
                <div class="col-xl-4">
                    <div class="w-100 py-30 js-appear-enabled animated fadeInUp" data-toggle="appear" data-class="animated fadeInUp" data-offset="-150">
                        <p>
                            <i class="fa fa-cubes fa-4x text-default"></i>
                        </p>
                        <h4 class="mb-5">
                            Powerful Layout
                        </h4>
                        <p class="text-muted mb-0">
                            Tons of predesigned pages.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="w-100 py-30 js-appear-enabled animated fadeInUp" data-toggle="appear" data-class="animated fadeInUp" data-offset="-150" data-timeout="150">
                        <p>
                            <i class="fa fa-code fa-4x text-pulse"></i>
                        </p>
                        <h4 class="mb-5">
                            Laravel Starter Kit
                        </h4>
                        <p class="text-muted mb-0">
                            Super boost your Laravel based project.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="w-100 py-30 js-appear-enabled animated fadeInUp" data-toggle="appear" data-class="animated fadeInUp" data-offset="-150" data-timeout="300">
                        <p>
                            <i class="fa fa-rocket fa-4x text-elegance"></i>
                        </p>
                        <h4 class="mb-5">
                            Bootstrap 4, Sass and ES6
                        </h4>
                        <p class="text-muted mb-0">
                            Only the latest tech under the hood.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->
@endsection
