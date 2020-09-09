@extends('layouts.pofo')

@section('styles')
{{ Html::style('public/assets/theme/pofo/customize/css/room-list.css?v='.date('Y-m-d H:i')) }}
{{ Html::style('public/assets/theme/pofo/customize/css/loading.css?v='.date('Y-m-d H:i')) }}
{{ Html::style('public/assets/theme/pofo/customize/css/sidebar.css?v='.date('Y-m-d H:i')) }}
{{ Html::style('public/assets/theme/pofo/customize/plugins/datepicker/datepicker3.css?v='.date('Y-m-d H:i')) }}
@endsection

@section('scripts')
{{ Html::script('public/assets/theme/pofo/customize/js/room_list.js?v='.date('Y-m-d H:i')) }}
{{ Html::script('public/assets/theme/pofo/customize/plugins/datepicker/bootstrap-datepicker.js?v='.date('Y-m-d H:i')) }}
@endsection

@section('content')

<!-- start hero section -->
<section class="wow fadeIn no-padding one-fourth-screen position-relative parallax sm-background-image-center cover_bg" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="slider-typography">
                <div class="slider-text-middle-main">
                    <div class="slider-text-middle">
                        <div class="col-12 col-xl-4 col-lg-8 col-md-10 mx-auto text-center">
                            <span class="text-extra-small alt-font letter-spacing-2 text-uppercase margin-20px-bottom d-inline-block text-medium-gray">we work hard, we play hard</span>
                            <h2 class="font-weight-600 alt-font margin-40px-bottom md-margin-20px-bottom text-extra-dark-gray letter-spacing-minus-1">ระบบดูแลห้องเช่า</h2>
                        </div>
                    </div>
                    <div class="down-section text-center">
                        <a href="#room_list" class="inner-link"><i class="ti-arrow-down icon-small text-deep-pink"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end hero section -->

<!-- start blog post style 03 section -->
<section class="wow fadeIn bg-light-gray" id="room_list">
    <div class="container">
        <div class="row blog-post-style3 hover-option4">
            <!-- start blog post item -->
            @foreach ($room_lists as $key => $value)
            <div class="col-12 col-md-4 blog-post-style5 last-paragraph-no-margin padding-15px-all wow fadeInUp room_{{ @$value->idRoom }}" data-wow-delay="0.2s">
                <div class="blog-post bg-white">
                    <div class="blog-post-images overflow-hidden">
                        <img src="{{ asset('public/assets/images/room/room_dummy_02.jpg') }}" alt="">
                        <div class="blog-categories bg-white text-uppercase text-extra-small alt-font">
                            <a role="buton">ห้อง {{ @$value->room_number }}</a>
                        </div>
                        <div class="blog-categories-right bg-white text-uppercase text-extra-small alt-font">
                            <a class="view_detail" id="{{ @$value->idRoom }}" role="buton"><i class="ti-pencil"></i></a>
                        </div>
                    </div>
                    <div class="post-details padding-40px-all sm-padding-20px-lr sm-padding-30px-tb">
                        <div class="blog-hover-color"></div>
                        <div class="author">
                            <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">
                                <a href="#" class="text-medium-gray">
                                    {{ @$value->fullname != '' ? @$value->fullname : 'ไม่ระบุ' }} {{ @$value->nickname != '' ? '('.@$value->nickname.')' : ''  }}
                                </a>
                                &nbsp;&nbsp;|&nbsp;&nbsp;เข้าอยู่เมื่อ {{ @$value->check_in_date != '' ? Carbon\Carbon::parse(@$value->check_in_date)->format('d M Y') : 'ไม่ระบุ' }}
                            </span>
                        </div>
                        <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                        <p class="line-limit-1">
                            {{ @$value->remark != '' ? $value->remark : 'click here to enter your remark.'}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="grid-item col-12 col-lg-4 col-md-6 padding-15px-all text-center text-md-left wow fadeInUp">
                <div class="blog-post bg-white text-left">
                    <div class="blog-post-images overflow-hidden position-relative">
                        <a class="view_sidebar">
                            <img src="http://placehold.it/900x650" alt="">
                            <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                        </a>
                        {{-- <div class="blog-categories bg-white text-uppercase text-extra-small alt-font">
                            <a role="buton" class="create_new_room"></a>
                        </div> --}}

                    </div>
                    <div class="post-details padding-40px-all sm-padding-20px-lr sm-padding-30px-tb">
                        <div class="author">
                            <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a href="#" class="text-medium-gray">Admin</a>&nbsp;&nbsp;|&nbsp;&nbsp;20 April 2017</span>
                        </div>
                        <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                        <p class="line-limit-1">click this card to make new room and customize your renter description.</p>
                    </div>
                </div>
            </div>
            <!-- end blog post item -->

            {{-- boxStore Data --}}
            <div class="hidden">
                <input type="hidden" class="type_save" />
                <input type="hidden" class="idTemp" />
            </div>
        </div>
    </div>
</section>

<section id="section_manage_room">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="overlay-to-close"></div>
        <div class="profile-details profile-details--active">
            @include('design_pofo.pages.manage_room_sidebar')
        </div>
    </nav>
</section>
