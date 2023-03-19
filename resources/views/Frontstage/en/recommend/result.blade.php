<div class="wrap">
    <div id="result-close"><img src="{{ asset('Frontstage/images/close.png') }}" alt=""></div>
    <div class="steps" style="color: #fff;">配對結果</div>
    <div class="flex-row">
        <div class="col">
            <img src="{{ asset($picture_one) }}" alt="">
            <div class="flex-row">
                <div class="col">
                    <a class="fancybox" href="{{ asset('Frontstage/images/result_img2.jpg') }}">
                        <img src="{{ asset($picture_two) }}" alt="">
                    </a>
                </div>
                <div class="col">
                    <a class="fancybox" href="{{ asset('Frontstage/images/result_img2.jpg') }}">
                        <img src="{{ asset($picture_three) }}" alt="">
                    </a>
                </div>
                <div class="col">
                    <a class="fancybox" href="{{ asset('Frontstage/images/result_img2.jpg') }}">
                        <img src="{{ asset($picture_four) }}" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="sub-title">型號</div>
            <h2>{{ $name }}</h2>
            <div class="sub-title">產品類別</div>
            <h2>{{ $type }}</h2>
            <div class="flex-row">
                <div class="col">
                    <div class="sub-title">額定推力</div>
                    <div class="num">{{ $rated_thrust }}</div>
                </div>
                <div class="col">
                    <div class="sub-title">水平最大荷重</div>
                    <div class="num">{{ $horizontal_load }}</div>
                </div>
            </div>-->
            <div class="col">
                <div class="sub-title">行程</div>
                <div class="num">{{ $travel }}</div>
            </div>
        </div>
        <div class="sub-title">PDF下載</div>
        <div class="download">
            <a href=""><img src="{{ asset('Frontstage/images/pdf.svg') }}" alt="pdf檔案"
                    title="pdf檔案"><span>PDF檔名在這點擊後下載</span></a>
        </div>
    </div>
</div>
