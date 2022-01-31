@extends('site.layouts.app')

@section('title', $category -> name)

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
{{--    <div class="page-heading" id="top">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="inner-content">--}}
{{--                        <h2>{{ $category->name }}</h2>--}}
{{--                        <span>{{ $category->description }}</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="page_header_cover">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <img class="img-thumbnail" style="max-width: 100%" src=" {{ asset('storage' . DIRECTORY_SEPARATOR . $header_cover->image_path . DIRECTORY_SEPARATOR . $header_cover->image_name) }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>{{ $category->name }}</h2>
                        <span>{!! $category->description !!}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            @if ($gallery -> count() > 0)
                <div class="row">
                    @foreach($gallery as $image)
                        <div class="col-lg-4">
                            <div class="item">
                                <div class="thumb">
                                    <img class="img-thumbnail" src=" {{ asset('storage' . DIRECTORY_SEPARATOR . $image->image_path . DIRECTORY_SEPARATOR . $image->image_name) }}" alt="">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center">لا يوجد صور لهذه الصفحة</p>
            @endif
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->

@endsection
@push('links')
    <style>
        {{--.page-heading {--}}
        {{--    @if($header_cover)--}}
        {{--        background-image: url({{ asset('storage/'.str_replace(['\\', ' '],['/', '_'], $header_cover->image_path)) }}/{{$header_cover->image_name}});--}}
        {{--    @endif--}}
        {{--}--}}
    </style>
@endpush

@push('scripts')
<script>
    let category_id = '{{ $category -> id }}';
    @if (\Request::segment(2) == $category -> id)
        $('.home_link').removeClass('active');
        $('.category_link_' + category_id).addClass('active');
    @endif
</script>
@endpush
