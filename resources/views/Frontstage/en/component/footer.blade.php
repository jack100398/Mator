<footer class="footer">
    <div class="wrap">
        <a href="{{ route('en-index') }}" class="footer_logo"><img src="{{ asset('Frontstage/images/footer_logo.png') }}"
                alt=""></a>
        <ul>
            <li><a href="{{ route('en-about') }}">ABOUT US</a></li>
            <li><a href="{{ route('en-news') }}">NEWS</a></li>
            <li><a href="{{ route('en-product') }}">PRODUCT</a></li>
            <li><a href="{{ route('en-recommend') }}">MATCHING</a></li>
            <li><a href="{{ route('en-contact') }}">CONTACT US</a></li>
        </ul>
        <div class="links">
            <span class="company">NEWMOTECH CO., LTD.</span>
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
                <i>4F.-2, No. 58, Xingshan Rd., Neihu Dist., Taipei City 11469, Taiwan (R.O.C.)</i>
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
    <span>Copyright © 2022 All Rights Reserved. Design by</span><a href="https://www.ecmd.com.tw/" target="_blank" rel="noopener noreferrer nofollow"><img
            src="{{ asset('Frontstage/images/designer.png') }}" alt=""></a>
</div>

<div id="goTop">
    <span>TOP</span>
</div>
