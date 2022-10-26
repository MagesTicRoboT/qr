@extends('master.app')
@section('css')
    @livewireStyles
@endsection
@section('content')
    <!-- ======= Contact Section ======= -->
    <div class="bg-image-bottom">
        <div class="bg-primary-dark-op">
            <div class="content content-top text-center overflow-hidden">
                <div class="py-10">
                    <h1 class="font-w700 text-white mb-10 js-appear-enabled animated fadeInUp" data-toggle="appear" data-class="animated fadeInUp"><a href="{{route('home')}}">Dashboard</a></h1>
                    <h2 class="h4 font-w400 text-white-op js-appear-enabled animated fadeInUp" data-toggle="appear" data-class="animated fadeInUp">Here is a list of all your records</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-12">
                @livewire('user.history', ['user' => $user])
            </div>
        </div>
    </div>

    <!-- End Contact Section -->
@endsection

@section('script')
    @livewireScripts
@endsection
