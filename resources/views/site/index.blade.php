@extends('site.layouts.app')

@section('title', $setting? $setting -> title: null)

@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    @include('site.includes.MainBanner')
    <!-- ***** Main Banner Area End ***** -->
    @foreach($categories as $category)
        <!-- ***** Men Area Starts ***** -->
        <section class="section" id="men">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-heading">
                            <h2>{{ $category -> name }}</h2>
{{--                            <span>{{ $category -> description }}</span>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="men-item-carousel">
                            <div class="owl-men-item owl-carousel">
                                @foreach($category -> images as $image)
                                <div class="item">
                                    <div class="thumb">
                                        <img src="{{ asset('storage'.DIRECTORY_SEPARATOR.$image->image_path.DIRECTORY_SEPARATOR.$image->image_name) }}" alt="{{ $image->image_name }}">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Men Area Ends ***** -->
    @endforeach

    <!-- ***** Social Area Starts ***** -->
    <section class="section" id="social">
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="section-heading">--}}
{{--                        <h2>Social Media</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="container">
            <div class="row images">
                @foreach($shuffle_gallery_images as $image)
                <div class="col-2">
                    <div class="thumb">
                        <img src="{{ asset('storage'.DIRECTORY_SEPARATOR.$image->image_path.DIRECTORY_SEPARATOR.$image->image_name) }}" alt="{{ $image->image_name }}">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ***** Social Area Ends ***** -->

    <!-- ***** Google Map Starts ***** -->
    <div class="google_map" style="width: 100%">
        <div class="container">
            <div class="map_container" style="width: 100%; margin: 0 auto">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.622258189005!2d46.794122684997475!3d24.84258848406234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2eff29748488d9%3A0x28abdfbd277d7980!2z2KfZhNi52KrZitio2Yog2YTZhNmF2LrYp9iz2YQg2KfZhNix2K7Yp9mF2YrYqQ!5e0!3m2!1sar!2seg!4v1643652856108!5m2!1sar!2seg"
                    width="100%"
                    height="500"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
    <!-- ***** Google Map Ends ***** -->

@endsection
@push('links')
{{--    <link rel="stylesheet" href="{{ asset('site_files/assets/slideShow/css/skitter.css') }}">--}}
<link rel="stylesheet" href="{{ asset('site_files/assets/slideShow/css/responsiveslides.css') }}">
    <style>

    </style>
@endpush

@push('scripts')
    <script src="{{ asset('site_files/assets/slideShow/js/responsiveslides.min.js') }}"></script>
    <script>
        $(function() {
            $(".rslides").responsiveSlides({
                auto: true,             // Boolean: Animate automatically, true or false
                speed: 500,            // Integer: Speed of the transition, in milliseconds
                // timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
                // pager: false,           // Boolean: Show pager, true or false
                // nav: true,             // Boolean: Show navigation, true or false
                random: true,          // Boolean: Randomize the order of the slides, true or false
                pause: true,           // Boolean: Pause on hover, true or false
                pauseControls: true,    // Boolean: Pause when hovering controls, true or false
                // prevText: "Previous",   // String: Text for the "previous" button
                // nextText: "Next",       // String: Text for the "next" button
                maxwidth: "800",           // Integer: Max-width of the slideshow, in pixels
                // navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
                // manualControls: "",     // Selector: Declare custom pager navigation
                // namespace: "rslides",   // String: Change the default namespace used
                // before: function(){},   // Function: Before callback
                // after: function(){}     // Function: After callback
            });
        });
    </script>
    {{--    <script src="{{ asset('site_files/assets/slideShow/js/jquery.skitter.min.js') }}"></script>--}}
{{--    <script src="{{ asset('site_files/assets/slideShow/js/jquery.easing.1.3.js') }}"></script>--}}
{{--    <script>--}}
{{--        $(function() {--}}
{{--            $(".skitter-large").skitter({--}}
{{--                navigation: true,--}}
{{--                dots: false,--}}
{{--                progressbar: true,--}}
{{--                // controls: true,--}}
{{--                auto_play: false,--}}
{{--                // responsive: {--}}
{{--                // small: { animation: 'fade',--}}
{{--                // max_width: 768,--}}
{{--                // suffix: '-small'--}}
{{--                // },--}}
{{--                // medium: { animation: 'directionRight',--}}
{{--                // max_width: 1024,--}}
{{--                // suffix: '-medium'--}}
{{--                // }--}}
{{--                // }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
@endpush

