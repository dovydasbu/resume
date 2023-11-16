@extends('layouts.app', [
    'title' => __('Contacts'),
    'bodyClass' => 'contacts'
])

@section('content')
    <div id="page_container" class="page-container bg-move-effect" data-animation="transition-flip-in-right">

        @include('partials.header', ['tab' => 'contacts'])

        <div id="main" class="site-main site-main--contacts">
            <div id="main-content" class="single-page-content">
                <div id="primary" class="content-area">

                    <div class="page-title">
                        <h1>Contacts</h1>
                        <div class="page-subtitle">
                            <h4> Get in Touch</h4>
                        </div>
                    </div>

                    @include('contacts-form.' . config('view.versions.contact_form'))
                </div>
            </div>
        </div>

        @include('partials.footer')

    </div>
@stop

{{--@push('scripts')--}}
{{--    <script src="https://www.google.com/recaptcha/enterprise.js?render=6Leyc6olAAAAAPV8lXHcsEf9mzIURup0g8wuZVwJ"></script>--}}
{{--@endpush--}}
