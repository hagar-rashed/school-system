
<!DOCTYPE html>
<html lang="en">
<head>
{{-- START HEAD SECTION --}}
@include('layouts.includes.dashboard.head')
{{-- END HEAD SECTION --}}

</head>
<body class=" layout-fluid">

    <div class="page">
        {{-- START SIDEBAR SECTION --}}
        @include('layouts.includes.dashboard.sidebar')
        {{-- END SIDEBAR SECTION --}}

        <div class="page-wrapper">
            {{-- START HEADER SECTION --}}
            @include('layouts.includes.dashboard.header')
            {{-- END HEADER SECTION --}}

            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-deck row-cards">
                        {{-- START ALERT SECTION --}}
                        @include('layouts.includes.dashboard.alerts')
                        {{-- END ALERT SECTION --}}

                        @yield('content')
                    </div>
                </div>
            </div>

            {{-- START FOOTER SECTION --}}
            @include('layouts.includes.dashboard.footer')
            {{-- END FOOTER SECTION --}}
        </div>
    </div>

    {{-- START JAVASCRIPTS SECTION --}}
    @include('layouts.includes.dashboard.scripts')
    {{-- END JAVASCRIPTS SECTION --}}


    {{-- START MODALS SECTION --}}
    @include('layouts.includes.dashboard.modals')
    {{-- END MODALS SECTION --}}

</body>
</html>
