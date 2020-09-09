@extends('layouts.pofo')

@section('styles')
{{ Html::style('public/assets/theme/pofo/customize/css/manage-bill.css?v='.date('Y-m-d H:i')) }}
@endsection

@section('scripts')
{{-- {{ Html::script('public/assets/theme/pofo/customize/js/style.css?v='.date('Y-m-d H:i')) }} --}}
@endsection

@section('content')

<!-- start slider -->
<section class="wow fadeIn p-0 main-slider mobile-height top-space">
    <div class="swiper-full-screen swiper-container w-100 white-move">
        <div class="swiper-wrapper">
            <!-- start slider item -->
            <div class="swiper-slide cover-background cover_bg01">
                <div class="opacity-extra-medium bg-extra-dark-gray"></div>
                <div class="container position-relative one-fourth-screen sm-height-400px">
                    <div class="slider-typography text-center">
                        <div class="slider-text-middle-main">
                            <div class="slider-text-middle">
                                <span class="text-large text-very-light-gray font-weight-300 width-95 mx-auto margin-25px-bottom d-block sm-margin-15px-bottom">we combine design, thinking and technical craft</span>
                                <h1 class="alt-font text-uppercase text-white-2 font-weight-700 width-75 sm-width-95 mx-auto margin-35px-bottom sm-margin-15px-bottom">Crafting Digital Experiences</h1>
                                <div class="btn-dual"><a href="https://themeforest.net/item/pofo-creative-agency-corporate-and-portfolio-multipurpose-template/20645944?ref=themezaa" target="_blank"
                                      class="btn btn-white btn-rounded btn-medium sm-margin-two-all">Purchase Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- start slider item -->
            <div class="swiper-slide cover-background cover_bg02">
                <div class="opacity-extra-medium bg-extra-dark-gray"></div>
                <div class="container position-relative one-fourth-screen sm-height-400px">
                    <div class="slider-typography text-center">
                        <div class="slider-text-middle-main">
                            <div class="slider-text-middle">
                                <span class="text-large text-very-light-gray font-weight-300 width-95 mx-auto margin-25px-bottom d-block sm-margin-15px-bottom">We're a design studio that believe in the ideas</span>
                                <h1 class="alt-font text-uppercase text-white-2 font-weight-700 width-75 sm-width-95 mx-auto margin-35px-bottom sm-margin-15px-bottom">Highly Creative Solutions</h1>
                                <div class="btn-dual"><a href="https://themeforest.net/item/pofo-creative-agency-corporate-and-portfolio-multipurpose-template/20645944?ref=themezaa" target="_blank"
                                      class="btn btn-white btn-rounded btn-medium sm-margin-two-all">Purchase Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- start slider item -->
            <div class="swiper-slide cover-background cover_bg03">
                <div class="opacity-extra-medium bg-extra-dark-gray"></div>
                <div class="container position-relative one-fourth-screen sm-height-400px">
                    <div class="slider-typography text-center">
                        <div class="slider-text-middle-main">
                            <div class="slider-text-middle">
                                <span class="text-large text-very-light-gray font-weight-300 width-95 mx-auto margin-25px-bottom d-block sm-margin-15px-bottom">We are a design & development agency</span>
                                <h1 class="alt-font text-uppercase text-white-2 font-weight-700 width-75 sm-width-95 mx-auto margin-35px-bottom sm-margin-15px-bottom">Craft Elegant Solutions</h1>
                                <div class="btn-dual"><a href="https://themeforest.net/item/pofo-creative-agency-corporate-and-portfolio-multipurpose-template/20645944?ref=themezaa" target="_blank"
                                      class="btn btn-white btn-rounded btn-medium sm-margin-two-all">Purchase Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white swiper-full-screen-pagination"></div>
        <div class="swiper-button-next swiper-button-black-highlight d-none"></div>
        <div class="swiper-button-prev swiper-button-black-highlight d-none"></div>
    </div>
</section>
<!-- end slider -->

<!-- start team section -->
<section class="wow fadeIn">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-5 col-md-6 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Creative People</div>
                <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Teamwork builds trust and the trust build growth.</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row m-0">

                    <!-- start interactive banners item -->
                    @foreach ($room_list as $key => $value)
                    <div class="col-12 col-md-4 padding-5px-all grid-item feature-box-4 wow slideInDown">
                        <div class="position-relative overflow-hidden">
                            <figure class="m-0">
                                {{-- <img src="{{ asset('public/assets/images/room/lightroomballs_800x571.jpg') }}" alt=""> --}}
                                <div class="card-bill"></div>
                                <div class="opacity-medium bg-extra-dark-gray"></div>
                                <figcaption>
                                    <span class="text-medium-gray margin-10px-bottom d-inline-block ">ห้อง {{ @$value->room_number }}</span>
                                    <div class="bg-deep-pink separator-line-horrizontal-full d-inline-block margin-10px-bottom"></div>
                                    <span class="text-extra-large d-block text-white-2 alt-font margin-25px-bottom width-100 lg-width-100 md-margin-seven-bottom">{{ @$value->fullname != '' ? @$value->fullname : 'ไม่ระบุ' }}</span>
                                    <a href="#" class="btn btn-very-small btn-white font-weight-300">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    @endforeach
                    <!-- end interactive banners item -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end team section -->

@endsection
