<!DOCTYPE html>

<head>
    @include('Frontstage.zh.component.include_js')
    @include('Frontstage.zh.component.head')
</head>

<body>
    @include('Frontstage.zh.component.topBar')
    @if (!in_array(Route::currentRouteName(), ['index']))
        @include('Frontstage.zh.component.banner')
    @else
        @include('Frontstage.zh.component.index_banner')
    @endif
    @yield('content')
    @include('Frontstage.zh.component.footer')
</body>

</html>
