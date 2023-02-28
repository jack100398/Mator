<!DOCTYPE html>

<head>
    @include('Frontstage.zh.component.include_js')
    @include('Frontstage.zh.component.head')
</head>

<body>
    @include('Frontstage.zh.component.topBar')
    {{-- @if (Route::currentRouteName() !== 'index') --}}
    @include('Frontstage.zh.component.banner')
    {{-- @endif --}}
    @yield('content')
    @include('Frontstage.zh.component.footer')
</body>

</html>
