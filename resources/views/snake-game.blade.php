@extends('layouts.app')

@section('content')
    <div id="page_container" class="page-container bg-move-effect" data-animation="transition-flip-in-right">

        @include('partials.header', ['tab' => 'react-game'])

        <div id="main" class="site-main">
            <div class="page-title smaller-padding text-center">
                <p>
                    Once I had an idea to make a nostalgic old school snake game, which we used to play as kids on our Nokia phones. Then I understood that while developing it I could learn some new technology and I went with React.js. Here is the result, enjoy!
                </p>
            </div>

            <div id="snake-game"></div>
        </div>

        @include('partials.footer')

    </div>
@stop

@push('scripts')
    @viteReactRefresh
    @vite('resources/js/app.jsx')
@endpush
