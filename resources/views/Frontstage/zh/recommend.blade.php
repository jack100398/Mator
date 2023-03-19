@extends('Frontstage.zh.layouts')
@section('content')
    <div id="app">
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
                                    <input type="radio" name="radio1" v-model="data.resolution" value="0.001">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col">
                                <label class="radio-container">0.1um
                                    <input type="radio" name="radio1" v-model="data.resolution" value="0.0001">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="flex-row">
                            <div class="col">直線尺形式</div>
                            <div class="col">
                                <label class="radio-container">增量
                                    <input type="radio" name="radio2" v-model="data.linear_ruler" value="0">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col">
                                <label class="radio-container">絕對
                                    <input type="radio" name="radio2" v-model="data.linear_ruler" value="1">
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
                                    <input type="radio" name="radio3" v-model="data.direction" value="1">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col">
                                <label class="radio-container"><img src="{{ asset('Frontstage/images/fliter3.jpg') }}"
                                        alt="">
                                    <input type="radio" name="radio3" v-model="data.direction" value="0">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="flex-row style2">
                            <div class="col">荷重</div>
                            <div class="col">
                                <input type="range" min="0" max="10000" id="range" v-model="data.weight">
                                <input type="number" id="rangenumber" min="0" max="10000" v-model="data.weight">
                            </div>
                        </div>
                        <div class="flex-row style2">
                            <div class="col">行程</div>
                            <div class="col">
                                <input type="range" min="0" max="10000" id="range2" v-model="data.distance">
                                <input type="number" id="rangenumber2" min="0" max="10000"
                                    v-model="data.distance" placeholder="請輸入50的倍數數字">
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
                            <input type="radio" checked="checked" name="radio4" v-model="data.video" value="option1">
                            <span class="checkmark"></span>
                        </label>
                        <div class="input">
                            <span>目標時間</span>
                            <input type="text" v-model="byTime.time">
                            <span>msec</span>
                        </div>
                        <div class="input">
                            <span>限制速度</span>
                            <input type="text" v-model="byTime.speed">
                            <span>mm/sec</span>
                        </div>
                    </div>
                    <div class="col">
                        <label class="radio-container">以加速度時間決定
                            <input type="radio" name="radio4" v-model="data.video" value="option2">
                            <span class="checkmark"></span>
                        </label>
                        <div class="input">
                            <span>加速度時間</span>
                            <input type="text" v-model="byAccelerationTime.time">
                            <span>msec</span>
                        </div>
                        <div class="input">
                            <span>轉速時間</span>
                            <input type="text" v-model="byAccelerationTime.speed">
                            <span>mm/sec</span>
                        </div>
                    </div>
                    <div class="col">
                        <label class="radio-container">以加速度決定
                            <input type="radio" name="radio4" v-model="data.video" value="option3">
                            <span class="checkmark"></span>
                        </label>
                        <div class="input">
                            <span>加速度</span>
                            <input type="text" v-model="byAcceleration.acceleration">
                            <span>G</span>
                        </div>
                        <div class="input">
                            <span>到達速度</span>
                            <input type="text" v-model="byAcceleration.speed">
                            <span>mm/sec</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fliter-result has_result" hidden>
            <div class="wrap">
                <div id="result-close" class="result-close"><img src="{{ asset('Frontstage/images/close.png') }}"
                        alt=""></div>
                <div class="steps" style="color: #fff;">配對結果</div>
                <div class="flex-row">
                    <div class="col">
                        <img :src="result.picture_one" alt="">
                        <div class="flex-row">
                            <div class="col">
                                <a class="fancybox" href="{{ asset('Frontstage/images/result_img2.jpg') }}">
                                    <img :src="result.picture_two" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a class="fancybox" href="{{ asset('Frontstage/images/result_img2.jpg') }}">
                                    <img :src="result.picture_three" alt="">
                                </a>
                            </div>
                            <div class="col">
                                <a class="fancybox" href="{{ asset('Frontstage/images/result_img2.jpg') }}">
                                    <img :src="result.picture_four" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">型號</div>
                        <h2>@{{ result.name }}</h2>
                        <div class="sub-title">產品類別</div>
                        <h2>@{{ result.type }}</h2>
                        <div class="flex-row">
                            <div class="col">
                                <div class="sub-title">額定推力</div>
                                <div class="num">@{{ result.rated_thrust }}</div>
                            </div>
                            <div class="col">
                                <div class="sub-title">水平最大荷重</div>
                                <div class="num">@{{ result.horizontal_load }}</div>
                            </div>
                            <div class="col">
                                <div class="sub-title">行程</div>
                                <div class="num">@{{ result.travel }}@{{ result.pdf }}</div>
                            </div>
                        </div>
                        <div v-show="result.pdf !== null" class="sub-title">PDF下載</div>
                        <div v-show="result.pdf !== null" class="download">
                            <a :href="result.pdf" :download="result.name + '.pdf'"><img
                                    src="{{ asset('Frontstage/images/pdf.svg') }}" alt="pdf檔案"
                                    title="pdf檔案"><span>PDF檔名在這點擊後下載</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fliter-result no_result" hidden>
            <div class="wrap">
                <div id="result-close" class="result-close"><img src="{{ asset('Frontstage/images/close.png') }}"
                        alt=""></div>
                <div class="steps" style="color: #fff;">沒有符合條件的產品</div>
            </div>
        </div>

        <div class="submit-content">
            <div class="g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR">
            </div><br class="mobile">
            <button v-on:click="send" class="hover-scale" hidden>配對</button>
            <img v-show="is_loading" src="{{ asset('Frontstage/images/loading.svg') }}" alt="">
        </div>
    </div>

    <script src="{{ asset('Frontstage/js/jquery.fancybox.pack.js') }}"></script>
    <script>
        const {
            createApp
        } = Vue
        createApp({
            data() {
                return {
                    is_loading: false,
                    result: {},
                    data: {
                        video: 'option1',
                        show_search: true,
                        show_recaptcha: true,
                        direction: 1, //垂直0 水平1
                        resolution: 0.0001, //解析度
                        weight: 100,
                        acceleration: 0, //加速度
                        acceleration_time: 0, //加速時間
                        constant_time: 0, //定速移動時間
                        distance: 1500,
                        linear_ruler: 0
                    },
                    byTime: {
                        time: 15000,
                        speed: 1000,
                    },
                    byAccelerationTime: {
                        time: 125,
                        speed: 800,
                    },
                    byAcceleration: {
                        acceleration: 0.65,
                        speed: 800,
                    }
                }
            },
            methods: {
                async send() {
                    switch (this.data.video) {
                        case 'option3':
                            await this.countByAcceleration();
                            break;
                        case 'option2':
                            await this.countByAccelerationTime();
                            break;
                        case 'option1':
                            await this.countByTime();
                            break;
                    }
                    await this.search(this.data)
                        .then(value => {
                            $('.search_answer').html(value);
                        })
                        .catch(error => {
                            alert('請確認荷重與行程不可為空值');
                        });

                },
                async search(data) {
                    this.is_loading = true;
                    $('.fliter-result').hide();
                    url = 'client-commodity';

                    await sendAjax('get', url, data).then(response => {
                        if (response === '沒有符合的產品') {
                            $('.no_result').show();
                        } else {
                            this.result = response;
                            $('.has_result').show();
                        }

                    });

                    this.is_loading = false;
                },
                async countByTime() {
                    let Stroke = this.data.distance / 1000
                    let MokuhyouJikan = this.byTime.time / 1000
                    let SeigenSokudo = this.byTime.speed / 1000

                    let temporary_acceleration = (Stroke * 4) / (MokuhyouJikan * MokuhyouJikan)
                    let highest_speed = temporary_acceleration * (MokuhyouJikan / 2)
                    if (SeigenSokudo < highest_speed) {
                        if (SeigenSokudo * MokuhyouJikan <= Stroke) {
                            alert('不可能');
                        } else {
                            let Kasokudo = (SeigenSokudo * SeigenSokudo) / (SeigenSokudo * MokuhyouJikan -
                                Stroke)
                            this.setSpeedData(
                                Kasokudo,
                                highest_speed / Kasokudo,
                                Math.max(MokuhyouJikan - (highest_speed / Kasokudo * 2, 0))
                            );
                        }
                    } else {
                        this.setSpeedData(temporary_acceleration / 9.8, MokuhyouJikan / 2 * 1000)
                    }
                },
                async countByAccelerationTime() {
                    let IdoSokudo = this.byAccelerationTime.speed / 1000
                    let TachiagariJikan = this.byAccelerationTime.time / 1000
                    let Stroke = this.data.distance / 1000
                    let Kasokudo = IdoSokudo / TachiagariJikan
                    let KasokuKyori = Kasokudo * TachiagariJikan * TachiagariJikan / 2

                    let TeisokuKyori = Stroke - 2 * KasokuKyori
                    let TeisokuJikan = TeisokuKyori / IdoSokudo

                    this.setSpeedData(Kasokudo / 9.8, this.byAccelerationTime.time, Math.max(TeisokuJikan *
                        1000, 0))
                },
                async countByAcceleration() {
                    let Stroke = this.data.distance / 1000
                    let Kasokudo = this.byAcceleration.acceleration * 9.8
                    let IdoSokudo = this.byAcceleration.speed / 1000
                    let KasokuKyori = IdoSokudo * IdoSokudo / Kasokudo / 2
                    if (KasokuKyori * 2 > Stroke) {
                        KasokuKyori = Stroke / 2
                        let KasokuJikan = (2 * KasokuKyori / Kasokudo) ^ 0.5
                        let ToutatsuSokudo = Kasokudo * KasokuJikan

                        this.setSpeedData(Kasokudo / 9.8, KasokuJikan * 1000)
                    } else {
                        let KasokuJikan = IdoSokudo / Kasokudo
                        let ToutatsuSokudo = IdoSokudo
                        let TeisokuKyori = Stroke - 2 * KasokuKyori

                        let TeisokuJikan = TeisokuKyori / ToutatsuSokudo

                        this.setSpeedData(Kasokudo / 9.8, KasokuJikan * 1000, TeisokuJikan * 1000)
                    }
                },
                setSpeedData(acceleration = 0, acceleration_time = 0, constant_time = 0) {
                    this.data.acceleration = acceleration;
                    this.data.acceleration_time = acceleration_time;
                    this.data.constant_time = constant_time;
                }
            }
        }).mount('#app')


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

            $('.result-close').click(function() {
                $('.fliter-result').hide();
            });

            grecaptcha.ready(function() {
                checkGrecaptcha = function() {
                    var cha_response = grecaptcha.getResponse();
                    if (cha_response.length == 0) {
                        $('.hover-scale').hide();
                        $('.g-recaptcha').show();
                    } else {
                        $('.hover-scale').show();
                        $('.g-recaptcha').hide();
                    }
                };
                checkGrecaptcha();

                var myVar = setInterval(function() {
                    checkGrecaptcha();
                }, 1000);
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
