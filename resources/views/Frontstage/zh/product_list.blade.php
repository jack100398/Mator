@extends('Frontstage.zh.layouts')
@section('content')
    <div id="app">
        <div class="wrap">
            <div class="plist-banner">
                <img src="{{ asset('Frontstage/images/plist_banner.jpg') }}" alt="">
                <div class="youtube">
                    <img src="{{ asset('Frontstage/images/youtube-base.png') }}" alt="">
                    <iframe src="https://www.youtube.com/embed/C1IP05_Hk0Y?list=PLGyv6kOJhxI_FB7C3WLLjO2LUmIus4G88"
                        title="2020年5月14日(1)" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="plist">
                <div class="flex-row">
                    <div class="col left">
                        <h2 class="tk-century-gothic">PRODUCT CATAGORY</h2>
                        <ul>
                            <li class="current"><a href="">線性馬達模組</a></li>
                            <li><a href="">精密Z軸線性馬達模組</a></li>
                            <li><a href="">精密水平軸線性馬達模組</a></li>
                            <li><a href="">精密多動子線性馬達模組</a></li>
                            <li><a href="">龍門同動專用線性馬達模組</a></li>
                            <li><a href="">精密線性馬達微型STAGE</a></li>
                        </ul>
                    </div>
                    <div class="col right">
                        <div class="title">精密Z軸線性馬達模組</div>
                        <img src="{{ asset('Frontstage/images/plist_banner2.jpg') }}" alt="">
                        <div class="product-list">
                            <div class="flex-row">
                                <div class="col">
                                    <a href="{{ route('product-detail', ['id' => 1]) }}" class="inner hover-scale">
                                        <div class="img"><img src="{{ asset('Frontstage/images/product6.png') }}"
                                                alt=""></div>
                                        <div class="name">JDBN-65</div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{ route('product-detail', ['id' => 1]) }}" class="inner hover-scale">
                                        <div class="img"><img src="{{ asset('Frontstage/images/product6-2.png') }}"
                                                alt=""></div>
                                        <div class="name">JDB-240</div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{ route('product-detail', ['id' => 1]) }}" class="inner hover-scale">
                                        <div class="img"><img src="{{ asset('Frontstage/images/product6-3.png') }}"
                                                alt=""></div>
                                        <div class="name">JDB-180</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="pager">
                            <a href="" class="page-prev">上一頁</a>
                            <a href="" class="current">1</a>
                            <span>/</span>
                            <a href="">2</a>
                            <a href="" class="page-next">下一頁</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
