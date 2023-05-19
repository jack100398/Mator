<footer class="footer">
    <div class="wrap">
        <a href="{{ route('index') }}" class="footer_logo"><img src="{{ asset('Frontstage/images/footer_logo.png') }}"
                alt=""></a>
        <ul>
            <li><a href="{{ route('about') }}">關於欣茂達</a></li>
            <li><a href="{{ route('news') }}">最新消息</a></li>
            <li><a href="{{ route('product') }}">產品介紹</a></li>
            <li><a href="{{ route('recommend') }}">自動選型</a></li>
            <li><a href="{{ route('contact') }}">聯絡我們</a></li>
        </ul>
        <div class="links">
            <span class="company">欣茂達科技股份有限公司</span>
            <a href="{{ $settings['line']['value'] }}" class="line">
                <img src="{{ asset('Frontstage/images/line.png') }}" alt="">
            </a>
            <a href="{{ $settings['facebook']['value'] }}" class="facebook">
                <img src="{{ asset('Frontstage/images/facebook.png') }}" alt="">
            </a>
        </div>
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
</footer>

<div class="copy-right">
    <span>Copyright © 2021 All Rights Reserved. Design by</span><a href="https://www.ecmd.com.tw/" target="_blank" rel="noopener noreferrer nofollow"><img
            src="{{ asset('Frontstage/images/designer.png') }}" alt=""></a>
</div>

<div id="goTop">
    <span>TOP</span>
</div>
