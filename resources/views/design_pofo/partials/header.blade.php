<!-- start header -->
<header>
    <!-- start navigation -->
    <nav class="navbar navbar-default bootsnav navbar-top header-light-transparent background-transparent nav-box-width navbar-expand-lg">
        <div class="container nav-header-container">
            <!-- start logo -->
            <div class="col-auto pl-lg-0">
                <a href="{{ url('/') }}" title="Pofo" class="logo"><img src="{{ asset('public/assets/theme/pofo/default/images/logo.png') }}" data-rjs="{{ asset('public/assets/theme/pofo/default/images/logo@2x.png" class="logo-dark default') }}"
                      alt="Pofo"><img src="{{ asset('public/assets/theme/pofo/default/images/logo-white.png') }}" data-rjs="{{ asset('public/assets/theme/pofo/default/images/logo-white@2x.png') }}" alt="Pofo" class="logo-light"></a>
            </div>
            <!-- end logo -->
            <div class="col accordion-menu pr-0 pr-md-3">
                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                    <span class="sr-only">toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                    <ul id="accordion" class="nav navbar-nav navbar-left no-margin text-normal" data-in="fadeIn" data-out="fadeOut">
                        <li class="dropdown megamenu-fw">
                            <a class="font-header {{ request()->segment(1) == '' ? 'active' : '' }}" href="{{ url('/') }}">ค่าน้ำ / ค่าไฟ</a>
                        </li>
                        <li class="dropdown megamenu-fw">
                            <a class="font-header {{ request()->segment(1) == 'bill_history' ? 'active' : '' }}" href="{{ url('/bill_history') }}">ประวัติ</a>
                        </li>
                        <li class="dropdown megamenu-fw">
                            <a class="font-header {{ request()->segment(1) == 'room_list' ? 'active' : '' }}" href="{{ url('/room_list') }}">ห้องเช่า</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
    <!-- end navigation -->
</header>
<!-- end header -->
