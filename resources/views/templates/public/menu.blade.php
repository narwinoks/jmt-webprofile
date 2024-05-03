<!--=================================
        header -->
<header id="header" class="topbar-dark">
    <!--=================================
            mega menu -->
    <div class="menu">
        <!-- menu start -->
        <nav id="menu" class="mega-menu">
            <!-- menu list items container -->
            <section class="menu-list-items">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <!-- menu logo -->
                            <ul class="menu-logo">
                                <li>
                                    <a href="{{ url('/index') }}" aria-label="jasamedikatransmedic"><img id="logo_img"
                                            src="{{ asset('assets/images/logo.webp') }}" alt="logo"> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-10">
                        </div>
                    </div>
                    <hr>
                </div>
                @php
                    $menus = \App\Models\Menu::where('status_enabled', true)
                        ->where('menu_id', null)
                        ->with('children')
                        ->get();
                @endphp
                <div class="container">
                    <div class="row">
                        <div class="col-lg-11">
                            <ul class="menu-links">
                                @foreach ($menus as $key => $menu)
                                    <li>
                                        <a href="{{ url('/' . $menu->url) ?? 'javascript:void(0)' }}">{{ $menu->name }}
                                            {!! count($menu->children) > 0 ? '<i class="fa fa-angle-down fa-indicator"></i>' : '' !!}</a>
                                        @if ($menu->children)
                                            @if ($menu->id == 2)

                                                <div class="drop-down grid-col-12">
                                                    <div class="grid-row">
                                                        <div class="grid-col-4">
                                                            <div class="grid-row">
                                                                <div class="grid-col-12">
                                                                    <h4><a class="mss-top-heading-link"
                                                                            href="{{ url('/' . $menu->children[0]->url) }} ">{{ $menu->children[0]->name }}</a>
                                                                    </h4>
                                                                    @if ($menu->children[0]->children)
                                                                        <ul class="sub-level-1">
                                                                            @foreach ($menu->children[0]->children as $key2 => $m1)
                                                                                <li><a
                                                                                        href="{{ url('/' . $m1->url) }}">{{ $m1->name }}</a>
                                                                                    @if ($m1->children)
                                                                                        <ul class="sub-level-2">
                                                                                            @foreach ($m1->children as $key3 => $m2)
                                                                                                <li><a
                                                                                                        href="{{ url('/' . $m2->url) }}">{{ $m2->name }}
                                                                                                    </a>
                                                                                                </li>
                                                                                                @if ($m2->children)
                                                                                                    <ul
                                                                                                        class="sub-level-3">
                                                                                                        @foreach ($m2->children as $key4 => $m3)
                                                                                                            <li><a
                                                                                                                    href="{{ url('/' . $m3->url) }}">{{ $m3->name }}</a>
                                                                                                            </li>
                                                                                                        @endforeach
                                                                                                    </ul>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </ul>
                                                                                    @endif
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="grid-col-8">
                                                           <div class="grid-row">
                                                                @php $count = 0; @endphp
                                                                @foreach ($menu->children as $key1 => $menu1)
                                                                    @if ($loop->first)
                                                                        @continue
                                                                    @endif
                                                                    @if ($count % 3 == 0)
                                                                        </div><div class="grid-row">
                                                                    @endif
                                                                    <div class="grid-col-4">
                                                                        <h4><a class="mss-top-heading-link" href="{{ url('/' . $menu1->url) }}">{{ $menu1->name }}</a></h4>
                                                                        @if (count($menu1->children) > 0)
                                                                            <ul class="sub-level-1">
                                                                                @foreach ($menu1->children as $key2=> $menu2)
                                                                                    <li><a href="{{ url('/' .$menu2->url) }}">{{ $menu2->name }}</a></li>
                                                                                     <ul class="sub-level-2">
                                                                                        @if (count($menu2->children) > 0)
                                                                                            @foreach ($menu2->children as $key3 => $menu3)
                                                                                                <li><a
                                                                                                        href="{{ url('/' . $menu3->url) }}">{{ $menu3->name }}</a>
                                                                                                </li>
                                                                                            @endforeach
                                                                                        @endif
                                                                                     </ul>
                                                                                @endforeach
                                                                            </ul>
                                                                        @endif
                                                                    </div>
                                                                    @php $count++; @endphp
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        {{-- <div class="grid-col-4">
                                                            <div class="grid-row">
                                                                @foreach ($menu->children as $key1 => $d)
                                                                    <div class="grid-col-12">
                                                                        <h4><a class="mss-top-heading-link"
                                                                                href="{{ url('/' . $d->url) }}">{{ $d->name }}</a>
                                                                        </h4>
                                                                        <ul class="sub-level-1">
                                                                            @foreach ($d->children as $key2 => $d2)
                                                                                <li><a href="{{ url('/' . $d2->url) }}">
                                                                                        {{ $d2->name }}</a>
                                                                                    <ul class="sub-level-2">
                                                                                        @foreach ($d2->children as $key3 => $d3)
                                                                                            <li><a
                                                                                                    href="{{ url('/' . $d3->url) }}">{{ $d3->name }}</a>
                                                                                                @if ($d3->children)
                                                                                                    <ul
                                                                                                        class="sub-level-3">
                                                                                                        @foreach ($d3->children as $key4 => $d4)
                                                                                                            <li><a
                                                                                                                    href="{{ url('/' . $d4->url) }}">{{ $d4->name }}</a>
                                                                                                            </li>
                                                                                                        @endforeach
                                                                                                    </ul>
                                                                                                @endif
                                                                                            </li>
                                                                                        @endforeach
                                                                                    </ul>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($menu->id == 49)
                                                <ul class="drop-down-multilevel">
                                                    @foreach ($menu->children as $key2 => $company)
                                                        <li><a
                                                                href="{{ url('/' . $company->url) }}">{{ $company->name }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-lg-1">
                            <div class="nav-add pull-right">
                                <ul>
                                    <li>
                                        <div class="search-button">
                                            <a class="search-trigger" href="#search"> <span></span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </nav>
        <!-- menu end -->
    </div>
</header>
