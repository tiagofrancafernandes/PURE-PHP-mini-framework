@extends('layouts.app')

@section('content')
<!-- Banner -->
<div>
    <div class="swiper mySwiper mb-4 mt-3">
        <div class="swiper-wrapper  ">
            <div class="swiper-slide ">
                <img class="object-cover w-fit mx-auto pt-24 md:pt-0" src="{{ asset('/img/banner-unix.jpg') }}"
                    alt="apple watch photo" />
            </div>

            <div class="swiper-slide">
                <img class="object-cover w-fit mx-auto pt-24 md:pt-0" src="{{ asset('/img/banner-unix2.jpg') }}"
                    alt="apple watch photo" />
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<!-- /Banner -->
@endsection
