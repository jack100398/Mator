@extends('Frontstage.zh.layouts')
@section('content')
    <div id="app">
        <div class="wrap">
            <div class="product-detail flex-row">
                <div class="col"><img src="{{ asset('Frontstage/images/product1.png') }}" alt=""></div>
                <div class="col">
                    <div class="sub-title">NIKKI DENSO</div>
                    <h1>精密水平軸線性馬達模組</h1>
                    <div class="type">SQ-450A</div>
                    <h2>特色說明</h2>
                    <p>可以該產品的特色應用 <br>
                        預設五排文字可以寫<br>
                        每排文字最多設定可以輸入三十個字數，可以連續輸入不斷行，無輸入就空白無資料。<br>
                        內容由管理者設定。</p>
                    <h2>備註說明</h2>
                    <p>預設兩排文字輸入，每排文字最多設定可以輸入三十個字數，可以連續輸入不斷行，無輸入就空白無資料。</p>
                    <div class="bottom-btn flex-row">
                        <a href="" class="col hover-scale">PDF 檔案下載</a>
                        <a href="" class="col hover-scale">
                            < 返回上一頁</a>
                    </div>
                </div>
            </div>
            <div class="steps">產品說明</div>
            <div class="editor">
                <img src="{{ asset('Frontstage/images/product-detail1.jpg') }}" alt="">
            </div>
            <div class="steps">產品實績</div>
            <div class="p-video flex-row">
                <div class="col">
                    <div class="youtube">
                        <img src="{{ asset('Frontstage/images/youtube-base.png') }}" alt="">
                        <iframe src="https://www.youtube.com/embed/C1IP05_Hk0Y?list=PLGyv6kOJhxI_FB7C3WLLjO2LUmIus4G88"
                            title="2020年5月14日(1)" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col">
                    <div class="youtube">
                        <img src="{{ asset('Frontstage/images/youtube-base.png') }}" alt="">
                        <iframe src="https://www.youtube.com/embed/C1IP05_Hk0Y?list=PLGyv6kOJhxI_FB7C3WLLjO2LUmIus4G88"
                            title="2020年5月14日(1)" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col">
                    <div class="youtube">
                        <img src="{{ asset('Frontstage/images/youtube-base.png') }}" alt="">
                        <iframe src="https://www.youtube.com/embed/C1IP05_Hk0Y?list=PLGyv6kOJhxI_FB7C3WLLjO2LUmIus4G88"
                            title="2020年5月14日(1)" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col">
                    <div class="youtube">
                        <img src="{{ asset('Frontstage/images/youtube-base.png') }}" alt="">
                        <iframe src="https://www.youtube.com/embed/C1IP05_Hk0Y?list=PLGyv6kOJhxI_FB7C3WLLjO2LUmIus4G88"
                            title="2020年5月14日(1)" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
