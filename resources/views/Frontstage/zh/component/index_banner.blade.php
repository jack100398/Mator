<div class="banner flexslider no-direction animated zoomIn2">
    <ul class="slides">
        @foreach ($slider_images as $item)
            <li>
                <a href="#">
                    <img src="{{ $item['desktop_image'] }}" alt="" class="pc">
                    <img src="{{ $item['mobile_image'] }}" alt="" class="mobile">
                </a>
            </li>
        @endforeach
    </ul>
</div>
