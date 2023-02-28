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
                    <form action="">
                        <div class="title"><span>*</span>主旨</div>
                        <div class="block"><input type="text"></div>
                        <div class="flex-row">
                            <div class="col">
                                <div class="title"><span>*</span>姓名</div>
                                <div class="block gender">
                                    <input type="text">
                                    <div class="gender-select">
                                        <label class="radio-container">先生
                                            <input type="radio" name="radio1">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">小姐
                                            <input type="radio" name="radio1">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="title"><span>*</span>聯絡電話</div>
                                <div class="block"><input type="text"></div>
                            </div>
                        </div>
                        <div class="title"><span>*</span>Mail</div>
                        <div class="block"><input type="email"></div>
                        <div class="title"><span>*</span>諮詢內容</div>
                        <div class="block">
                            <textarea name="" id=""></textarea>
                        </div>
                        <div class="submit-content">
                            <div class="tips">
                                <label class="checkbox-container">本人已確認聯絡項目與內容，並同意本人對貴公司所為電子表示之效力與書面表示相同。
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="g-api">
                                <div class="g-recaptcha" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                            </div>
                            <button type="submit" class="hover-scale" style="background-color: black;">送出</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="wrap">
            <div class="googlemap">
                <img src="{{ asset('Frontstage/images/google-map.png') }}" alt="">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.325026689142!2d121.57388631524736!3d25.056970543523637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442ab84971d1bed%3A0x483fd6830e15b048!2zMTE05Y-w5YyX5biC5YWn5rmW5Y2A6KGM5ZaE6LevNTjomZ8gNOiZn-S5iyAy!5e0!3m2!1szh-TW!2stw!4v1675441553925!5m2!1szh-TW!2stw"
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection
