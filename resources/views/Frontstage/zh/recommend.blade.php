@extends('Frontstage.zh.layouts')
@section('content')
    <div id="app">
        <form action="">
            <div class="wrap">
                <div class="page-title2">
                    <h2 class="tk-century-gothic">MATCHING</h2>
                </div>
                <div class="steps">步驟一 / 配對篩選</div>
                <div class="fliter">
                    <div class="flex-row">
                        <div class="col">
                            <div class="flex-row">
                                <div class="col">形狀</div>
                                <div class="col"><img src="{{ asset('Frontstage/images/fliter1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="flex-row">
                                <div class="col">解析度</div>
                                <div class="col">
                                    <label class="radio-container">1um
                                        <input type="radio" checked="checked" name="radio1">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col">
                                    <label class="radio-container">0.1um
                                        <input type="radio" name="radio1">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="flex-row">
                                <div class="col">直線尺形式</div>
                                <div class="col">
                                    <label class="radio-container">增量
                                        <input type="radio" name="radio2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col">
                                    <label class="radio-container">絕對
                                        <input type="radio" checked="checked" name="radio2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="flex-row">
                                <div class="col">姿勢</div>
                                <div class="col">
                                    <label class="radio-container"><img src="{{ asset('Frontstage/images/fliter2.jpg') }}"
                                            alt="">
                                        <input type="radio" checked="checked" name="radio3">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col">
                                    <label class="radio-container"><img src="{{ asset('Frontstage/images/fliter3.jpg') }}"
                                            alt="">
                                        <input type="radio" name="radio3">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="flex-row style2">
                                <div class="col">荷重</div>
                                <div class="col">
                                    <input type="range" value="0" min="0" max="10000" id="range"
                                        oninput="rangenumber.value=value" />
                                    <input type="number" id="rangenumber" min="0" max="10000" value="0"
                                        oninput="range.value=value">
                                </div>
                            </div>
                            <div class="flex-row style2">
                                <div class="col">行程</div>
                                <div class="col">
                                    <input type="range" value="0" min="0" max="10000" id="range2"
                                        oninput="rangenumber2.value=value" />
                                    <input type="number" id="rangenumber2" min="0" max="10000"
                                        oninput="range2.value=value" placeholder="請輸入50的倍數數字">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="steps">步驟二 / 選擇換算</div>
                <div class="fliter2">
                    <div class="flex-row">
                        <div class="col">
                            <label class="radio-container">以時間決定
                                <input type="radio" checked="checked" name="radio4">
                                <span class="checkmark"></span>
                            </label>
                            <div class="input">
                                <span>目標時間</span>
                                <input type="text">
                                <span>msec</span>
                            </div>
                            <div class="input">
                                <span>限制速度</span>
                                <input type="text">
                                <span>mm/sec</span>
                            </div>
                        </div>
                        <div class="col">
                            <label class="radio-container">以加速度時間決定
                                <input type="radio" name="radio4">
                                <span class="checkmark"></span>
                            </label>
                            <div class="input">
                                <span>加速度時間</span>
                                <input type="text">
                                <span>msec</span>
                            </div>
                            <div class="input">
                                <span>轉速時間</span>
                                <input type="text">
                                <span>mm/sec</span>
                            </div>
                        </div>
                        <div class="col">
                            <label class="radio-container">以加速度決定
                                <input type="radio" name="radio4">
                                <span class="checkmark"></span>
                            </label>
                            <div class="input">
                                <span>加速度</span>
                                <input type="text">
                                <span>G</span>
                            </div>
                            <div class="input">
                                <span>到達速度</span>
                                <input type="text">
                                <span>mm/sec</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fliter-result">
                <div class="wrap">
                    <div id="result-close"><img src="{{ asset('Frontstage/images/close.png') }}" alt=""></div>
                    <div class="steps" style="color: #fff;">配對結果</div>
                    <div class="flex-row">
                        <div class="col">
                            <img src="{{ asset('Frontstage/images/result_img1.jpg') }}" alt="">
                            <div class="flex-row">
                                <div class="col">
                                    <a class="fancybox" href="{{ asset('Frontstage/images/result_img2.jpg') }}">
                                        <img src="{{ asset('Frontstage/images/result_img2.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="fancybox" href="{{ asset('Frontstage/images/result_img2.jpg') }}">
                                        <img src="{{ asset('Frontstage/images/result_img2.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="fancybox" href="{{ asset('Frontstage/images/result_img2.jpg') }}">
                                        <img src="{{ asset('Frontstage/images/result_img2.jpg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="sub-title">型號</div>
                            <h2>SMDR-35A</h2>
                            <div class="sub-title">產品類別</div>
                            <h2>高性能線性馬達模組 Robot</h2>
                            <div class="flex-row">
                                <div class="col">
                                    <div class="sub-title">額定推力</div>
                                    <div class="num">185</div>
                                </div>
                                <div class="col">
                                    <div class="sub-title">水平最大荷重</div>
                                    <div class="num">60</div>
                                </div>
                                <!--<div class="col">
                                                                        <div class="sub-title">垂直最大荷重</div>
                                                                        <div class="num">60</div>
                                                                    </div>-->
                                <div class="col">
                                    <div class="sub-title">行程</div>
                                    <div class="num">1500</div>
                                </div>
                            </div>
                            <div class="sub-title">PDF下載</div>
                            <div class="download">
                                <a href=""><img src="{{ asset('Frontstage/images/pdf.svg') }}" alt="pdf檔案"
                                        title="pdf檔案"><span>PDF檔名在這點擊後下載</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="submit-content">
                <div class="g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div><br
                    class="mobile">
                <button type="submit" class="hover-scale">配對</button>
                <img src="{{ asset('Frontstage/images/loading.svg') }}" alt="">
            </div>
        </form>
    </div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="{{ asset('Frontstage/js/jquery.fancybox.pack.js') }}"></script>
    <script>
        $(document).ready(function() {

            const rangeInputs = document.querySelectorAll('input[type="range"]')
            const numberInput = document.querySelector('input[type="number"]')

            function handleInputChange(e) {
                let target = e.target
                if (e.target.type !== 'range') {
                    target = document.getElementById('range')
                }
                const min = target.min
                const max = target.max
                const val = target.value

                target.style.backgroundSize = (val - min) * 100 / (max - min) + '% 100%'
            }
            rangeInputs.forEach(input => {
                input.addEventListener('input', handleInputChange)
            })
            numberInput.addEventListener('input', handleInputChange)

            $('#result-close').click(function() {
                $(this).parents('.fliter-result').addClass('hide');
            });
        });

        $('.fancybox').attr('rel', 'media-gallery').fancybox({
            prevEffect: 'none',
            nextEffect: 'none',
            padding: 10,
            arrows: false
        });
    </script>
@endsection
