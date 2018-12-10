<!DOCTYPE html>
<html lang="es">
@include('__partials.head')
<body>
@if(isset(\Illuminate\Support\Facades\Auth::user()->id))
    <div class="container-scroller">
        @include('__partials.nav')
        <div class="container-fluid page-body-wrapper">
            @include('__partials.settings-panel')
            @include('__partials.menu')
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                @include('__partials.footer')
            </div>
        </div>
    </div>
@else
    <div class="container-scroller">
        @yield('content')
    </div>
@endif
@include('__partials.scripts')
</body>
</html>
