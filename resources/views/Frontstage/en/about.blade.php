@extends('Frontstage.en.layouts')
@section('content')
    <div id="app">
        <div class="page-title2">
            <h2 class="tk-century-gothic">ABOUT <br class="mobile hide-in-tablet">NEW MOTECH</h2>
        </div>

        <div class="about">
            <div class="wrap3">
                <div class="top">
                    <div class="flex-row" lang="en">
                        <div class="col"><img src="{{ asset('Frontstage/images/about1.png') }}" alt=""></div>
                        <div class="col">
                            <h2>Our Operational Policy</h2>
                            <ul>
                                <li><img src="{{ asset('Frontstage/images/list_icon.png') }}"
                                        alt=""><span>To provide the best service, we strive to develop innovative products that meet our customers' needs.</span></li>
                                <li><img src="{{ asset('Frontstage/images/list_icon.png') }}"
                                        alt=""><span>We actively provide professional advice to our customers and aim to establish a cooperative relationship built on trust and mutual understanding.</span></li>
                                <li><img src="{{ asset('Frontstage/images/list_icon.png') }}"
                                        alt=""><span>We are committed to continuously developing new and innovative products, while also deepening our relationships with our customers.</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex-row">
                        <div class="col">
                            <h2>New Motech</h2>
                            <p>With the global development of the precision high-tech industry, the demand for high-precision positioning products is increasing day by day.<br>
                                In response to this, new-motech ltd not only provides linear motors and direct drive motors, but also offers high-precision positioning modules that greatly shorten design and development time while also being fast and convenient to assemble.</p>
                        </div>
                        <div class="col"><img src="{{ asset('Frontstage/images/about2.jpg') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-block2">
            <div class="wrap3">
                <h2>Our Company Philosophy</h2>
                <div class="flex-row">
                    <div class="col">
                        <h3>Persistence</h3>
                        <p>We believe in breaking through the status quo and persevering through challenges to achieve our goals.</p>
                    </div>
                    <div class="col">
                        <h3>Refining</h3>
                        <p>We believe in continuous improvement and refinement to foster ongoing creativity and growth.</p>
                    </div>
                    <div class="col">
                        <h3>Momentum</h3>
                        <p>We maintain a positive momentum and never back down from a challenge.</p>
                    </div>
                    <div class="col">
                        <h3>Innovation</h3>
                        <p>We embrace forward-thinking ideas and ambitious dreams, always striving to innovate and create new value.</p>
                    </div>
                    <div class="col">
                        <h3>Ambition</h3>
                        <p>We are committed to contributing our skills and expertise towards the long-term success of the company.</p>
                    </div>
                    <div class="col">
                        <h3>Profit</h3>
                        <p>We strive to create the greatest benefit for our customers through collaborative partnerships and mutual success.</p>
                    </div>
                </div>
                <div class="bottom">
                    <h3>Integrity</h3>
                    <p>We prioritize our customers' needs and work tirelessly to provide the highest quality products and services.</p>
                </div>
            </div>
        </div>

        <div class="about-block3">
            <div class="wrap3">
                <div class="flex">
                    <img src="{{ asset('Frontstage/images/youtube-base.png') }}" alt="">
                    <img src="{{ asset('Frontstage/images/about3-1.jpg') }}" alt="" class="img1">
                    <img src="{{ asset('Frontstage/images/about3-2.jpg') }}" alt="" class="img2">
                    <img src="{{ asset('Frontstage/images/about3-3.jpg') }}" alt="" class="img3">
                </div>
            </div>
        </div>

        <div class="about-block4">
            <div class="wrap3">
                <h2>Vision & Mission</h2>
                <div class="flex-row">
                    <div class="col">
                        <h3>Vision</h3>
                        <p>Our vision is to provide high-quality products that increase product differentiation for equipment manufacturers, while enhancing our customers' competitiveness.</p>
                    </div>
                    <div class="col">
                        <h3>Mission</h3>
                        <p>Our mission is to achieve customer satisfaction through innovation, honesty, and responsibility. We strive to empathize with our customers and provide complete after-sales service to ensure their continued success.</p>
                    </div>
                </div>
                <div class="contact-img">
                    <a href="{{ route('en-contact') }}"><img src="{{ asset('Frontstage/images/icon.png') }}"
                            alt=""><span>CONTACT US</span></a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {


            $(window).scroll(function() {
                var _scrollTop = $(window).scrollTop();

                if (_scrollTop >= 100) {
                    $('#fixed-header.index').addClass('active')
                } else {
                    $('#fixed-header.index').removeClass('active')
                }
            });

            $('.product-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                centerPadding: '0',
                autoplay: false,
                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                }, {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }, ]
            });

            $('.index-block1-slider').flexslider({
                animation: "slide",
                directionNav: true,
                controlNav: true,
                animationLoop: false,
                pauseOnAction: false,
                slideshowSpeed: 5000,
                touch: $('.flexslider li').length > 1,
                after: function(slider) {
                    slider.pause();
                    slider.play();
                }
            });

            wow = new WOW({
                boxClass: 'wow',
                animateClass: 'animated',
                offset: 0,
                mobile: false,
                live: true
            })
            wow.init();

        });
    </script>
@endsection
