<!DOCTYPE html>
<html lang="en">

<head>
    @include('component.include_js')
    @include('component.head')
</head>

<body id="page-top">
    <div id="wrapper">
        @include('component.sideBar')
        <div id="content-wrapper" class="d-flex flex-column">

            @include('component.topBar')
            <div class="container-fluid">
                @yield('content')
            </div>
            @include('component.footer')
        </div>
    </div>

    @include('component.popup')



</body>

</html>
