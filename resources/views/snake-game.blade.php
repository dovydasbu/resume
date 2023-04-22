@extends('layouts.app')

@section('content')
    <div id="page_container" class="page-container bg-move-effect" data-animation="transition-flip-in-right">

        @include('partials.header', ['tab' => 'react-game'])

        <div id="main" class="site-main">
            <div id="snake-game"></div>
        </div>

        @include('partials.footer')

    </div>
@stop

@push('scripts')
    @viteReactRefresh
    @vite('resources/js/app.jsx')
@endpush
