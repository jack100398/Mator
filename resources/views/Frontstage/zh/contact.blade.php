@extends('Frontstage.zh.layouts')
@section('content')
    <div id="app">


        <div class="page-title2">
            <h2 class="tk-century-gothic">CONTACT US</h2>
        </div>

        <div class="contact">
            <div class="wrap">
                <div class="steps" style="color: #fff;">親愛的顧客您好</div>
                <p>非常感謝您！如果您有任何的問題或建議或對我們公司的產品及服務有任何疑問，請您不吝賜教
                    將您的意見填寫於下列表單，我們會盡快處理並給您答覆！(*為必填項目)</p>
                <div class="form">
                    <form action="javascript:;">
                        <div class="title"><span>*</span>主旨</div>
                        <div class="block"><input v-model="data.title" type="text"></div>
                        <div class="flex-row">
                            <div class="col">
                                <div class="title"><span>*</span>姓名</div>
                                <div class="block gender">
                                    <input v-model="data.name" type="text">
                                    <div class="gender-select">
                                        <label class="radio-container">先生
                                            <input v-model="data.sex" type="radio" name="radio1" value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">小姐
                                            <input v-model="data.sex" type="radio" name="radio1" value="0">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="title"><span>*</span>聯絡電話</div>
                                <div class="block"><input v-model="data.phone" type="text"></div>
                            </div>
                        </div>
                        <div class="title"><span>*</span>Mail</div>
                        <div class="block"><input v-model="data.mail" type="email"></div>
                        <div class="title"><span>*</span>諮詢內容</div>
                        <div class="block">
                            <textarea v-model="data.text"></textarea>
                        </div>
                        <div class="submit-content">
                            <div class="tips">
                                <label class="checkbox-container">本人已確認聯絡項目與內容，並同意本人對貴公司所為電子表示之效力與書面表示相同。
                                    <input v-model="checker" type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="g-api">
                                <div class="g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                            </div>
                            <button v-on:click="sendContact" class="hover-scale real-btn"
                                style="background-color: black;">送出
                            </button>
                            <button type="submit" class="hover-scale fake-btn"
                                style="background-color: #bfbfbf;">送出</button>
                            <img v-show="is_loading" src="{{ asset('Frontstage/images/loading2.svg') }}" alt="">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="wrap">
            <div class="googlemap">
                <img src="{{ asset('Frontstage/images/google-map.png') }}" alt="">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14457.300678136502!2d121.576075!3d25.0569657!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442ab51643cc50b%3A0xf44aa5565a112232!2z5qyj6IyC6YGU56eR5oqA6IKh5Lu95pyJ6ZmQ5YWs5Y-4!5e0!3m2!1szh-TW!2stw!4v1682708615435!5m2!1szh-TW!2stw"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="company-info">
                <a href="" class="logo"><img src="{{ asset('Frontstage/images/logo.png') }}" alt=""></a>
                <h2>欣茂達科技股份有限公司</h2>
                <div class="info">
                    <span>
                        <img src="{{ asset('Frontstage/images/location.svg') }}" alt="">
                        <i>11469台北市內湖區行善路58號4樓之2</i>
                    </span>
                    <span>
                        <img src="{{ asset('Frontstage/images/phone.svg') }}" alt="">
                        <i>+886-2-8792-3073</i>
                    </span>
                    <span>
                        <img src="{{ asset('Frontstage/images/printer.svg') }}" alt="">
                        <i>+886-2-8792-9997</i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            grecaptcha.ready(function() {
                checkGrecaptcha = function() {
                    var cha_response = grecaptcha.getResponse();
                    if (cha_response.length == 0) {
                        $('.g-recaptcha').show();
                        $('.real-btn').hide();
                        $('.fake-btn').show();
                    } else {
                        $('.g-recaptcha').hide();
                        $('.real-btn').show();
                        $('.fake-btn').hide();
                    }
                };
                checkGrecaptcha();

                var myVar = setInterval(function() {
                    checkGrecaptcha();
                }, 1000);
            });
        });

        const {
            createApp
        } = Vue
        createApp({
            data() {
                return {
                    data: {
                        title: null,
                        name: null,
                        sex: 1,
                        phone: null,
                        mail: null,
                        text: null,
                    },
                    checker: false,
                    is_loading: false
                }
            },
            methods: {
                async sendContact() {
                    if (this.checkConsent()) {
                        this.is_loading = true;
                        await sendApiAjax('post', 'send_mail', this.data)
                            .then(value => {
                                alert('發送成功');
                                window.location.href = window.location.href
                            })
                            .catch(error => {
                                let fail_string = '發送失敗\n';
                                let string_map = {
                                    'title': '請確認主旨是否正確',
                                    'name': '請確認姓名是否正確',
                                    'phone': '請確認手機號碼是否正確',
                                    'mail': '請確認電子信箱是否正確',
                                    'text': '請確認諮詢內容是否正確寫入',
                                };
                                Object.entries(error.responseJSON.errors).forEach(element => {
                                    fail_string += '\n' + string_map[element[0]];
                                });
                                alert(fail_string);
                            });
                        this.is_loading = false;
                    }
                },
                checkConsent() {
                    if (!this.checker) {
                        alert('請勾選同意書');
                    }

                    return this.checker;
                },
            }
        }).mount('#app')
    </script>
@endsection
