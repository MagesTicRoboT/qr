@extends('master.app')
@section('css')
    <style>
        .download {
            background: #47b2e4;
            border: 0;
            padding: 12px 34px;
            color: #fff;
            transition: 0.4s;
            border-radius: 50px;
        }
    </style>
    @livewireStyles
@endsection
@section('content')
    <!-- ======= Contact Section ======= -->
    <div class="bg-image-bottom">
        <div class="bg-primary-dark-op">
            <div class="content content-top text-center overflow-hidden">
                <div class="py-10">
                    <h1 class="font-w700 text-white mb-10 js-appear-enabled animated fadeInUp" data-toggle="appear" data-class="animated fadeInUp"><a href="{{route('home')}}">Dashboard</a></h1>
                    <h2 class="h4 font-w400 text-white-op js-appear-enabled animated fadeInUp" data-toggle="appear" data-class="animated fadeInUp">Welcome To Your Dashboard!</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-12">
                @livewire('qr-form')
            </div>
        </div>
    </div>

    <!-- End Contact Section -->
@endsection

@section('script')
    @livewireScripts
    <script>
        $(function() {
            $('#color_picker').colorpicker({
                popover: false,
                inline: false,
                container: '#cp2',
                color: '#16813d',
            });
        });

        $('#color_picker').on('change.colorpicker', function(e){
            let color = $(this).data('cp2');
            eval(color).set('Info.color', $('#colorInput').val());
        });
    </script>
@endsection
