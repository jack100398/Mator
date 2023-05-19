<!DOCTYPE html>
<html lang="en">

<head>
    @include('Backstage.component.head')
</head>

<body id="page-top">

    <div id="wrapper">
        @include('Backstage.component.sideBar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('Backstage.component.topBar')
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('Backstage.component.footer')
        </div>
    </div>
    @include('Backstage.component.include_js')
    @include('Backstage.component.popup')
</body>

</html>
