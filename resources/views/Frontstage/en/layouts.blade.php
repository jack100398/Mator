<!DOCTYPE html>

<head>
    @include('Frontstage.en.component.include_js')
    @include('Frontstage.en.component.head')
</head>

<body>
    @include('Frontstage.en.component.topBar')
    {{-- @if (Route::currentRouteName() !== 'index') --}}
    @include('Frontstage.en.component.banner')
    {{-- @endif --}}
    @yield('content')
    @include('Frontstage.en.component.footer')
</body>

</html>
