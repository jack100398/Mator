<header id="fixed-header" class="header animated fadeInDown pc">
    <div class="wrap2">
        <a href="{{ route('en-index') }}" class="logo">
            <img src="{{ asset('Frontstage/images/logo.png') }}" alt="">
        </a>
        <nav>
            <ul class="row">
                <li><a href="{{ route('en-about') }}">ABOUT US</a></li>
                <li><a href="{{ route('en-news') }}">NEWS</a></li>
                <li><a href="{{ route('en-product') }}">PRODUCT</a></li>
                <li><a href="{{ route('en-recommend') }}">MATCHING</a></li>
                <li><a href="{{ route('en-contact') }}">CONTACT US</a></li>
                <li id="language">
                    <div class="language-select">
                        <img src="{{ asset('Frontstage/images/globe.svg') }}" alt="">
                        <span id="selected-language">English</span>
                    </div>
                    <div id="language-content" class="language-content animated fadeIn">
                        <ul>
                            <li onclick="location.href = '{{ route('index') }}'">
                                <a>
                                    <span>繁體中文</span>
                                    <img src="{{ asset('Frontstage/images/correct.svg') }}" alt="">
                                </a>
                            </li>
                            <li onclick="location.href = '{{ route('en-index') }}'">
                                <a class="current">
                                    <span>English</span>
                                    <img src="{{ asset('Frontstage/images/correct.svg') }}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li id="search"><img src="{{ asset('Frontstage/images/search.svg') }}" alt=""></li>
            </ul>
        </nav>
    </div>
</header>

<header class="header mobile">
    <div id="menu-btn"><i class="fa fa-bars"></i></div>
    <a href="/" class="logo"><img src="{{ asset('Frontstage/images/logo.png') }}" alt=""></a>
    <div id="language2" class="language-open"><i class="fa fa-globe"></i>
        <div id="language-content2" class="language-content animated fadeIn">
            <ul>
                <li onclick="location.href = '{{ route('index') }}'">
                    <a>
                        <span>English</span>
                        <img src="{{ asset('Frontstage/images/correct.svg') }}" alt="">
                    </a>
                </li>
                <li onclick="location.href = '{{ route('en-index') }}'">
                    <a class="current">
                        <span>English</span>
                        <img src="{{ asset('Frontstage/images/correct.svg') }}" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>

<div id="mobile-menu-wrap" class="mobile">
    <div class="inner">
        <div class="search-input">
            <input class="mobile_search_text" type="search" placeholder="Search Keywords">
            <button onclick="mobileSearch()"><img src="{{ asset('Frontstage/images/search.svg') }}"
                    alt=""></button>
        </div>
        <ul id="mobile-menu">
            <li><a href="{{ route('en-about') }}">ABOUT US</a></li>
            <li><a href="{{ route('en-news') }}">NEWS</a></li>
            <li><a href="{{ route('en-product') }}">PRODUCT</a></li>
            <li><a href="{{ route('en-recommend') }}">MATCHING</a></li>
            <li><a href="{{ route('en-contact') }}">CONTACT US</a></li>
        </ul>
    </div>
</div>

<div id="search-content" class="animated fadeIn pc">
    <div class="search-input">
        <input class="desktop_search_text" type="search" placeholder="Search Keywords">
        <button onclick="desktopSearch()"><img src="{{ asset('Frontstage/images/search.svg') }}"
                alt=""></button>
    </div>
    <a href="" id="search-close">CLOSE</a>
</div>

<script>
    desktopSearch = function() {
        var condition = $('.desktop_search_text').val();
        window.location.href = `${document.location.origin}/en/search?search=${condition}`;
    }

    mobileSearch = function() {
        var condition = $('.mobile_search_text').val();
        window.location.href = `${document.location.origin}/en/search?search=${condition}`;
    }
</script>
