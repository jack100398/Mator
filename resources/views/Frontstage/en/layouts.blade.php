<!DOCTYPE html>

<head>
    @include('Frontstage.en.component.include_js')
    @include('Frontstage.en.component.head')
</head>

<body>
    @include('Frontstage.en.component.topBar')
    @if (!in_array(Route::currentRouteName(), ['en-index']))
        @include('Frontstage.en.component.banner')
    @else
        @include('Frontstage.en.component.index_banner')
    @endif
    @yield('content')
    @include('Frontstage.en.component.footer')
</body>

</html>
