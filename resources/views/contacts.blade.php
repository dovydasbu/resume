@extends('layouts.app', [
    'title' => __('Contacts')
])

@section('content')
    <div id="page_container" class="page-container bg-move-effect" data-animation="transition-flip-in-right">

        @include('partials.header', ['tab' => 'contacts'])

        <div id="main" class="site-main">
            <div id="main-content" class="single-page-content">
                <div id="primary" class="content-area">

                    <div class="page-title">
                        <h1>Contact</h1>
                        <div class="page-subtitle">
                            <h4> Get in Touch</h4>
                        </div>
                    </div>

                    <div id="content" class="page-content site-content single-post" role="main">

                        <div class="row">
                            <div class=" col-xs-12 col-sm-4 ">

                                <div id="info_list_1" class="info-list-w-icon">
                                    <div class="info-block-w-icon">
                                        <div class="ci-icon">
                                            <i class="linecons linecons-mail"></i>
                                        </div>
                                        <div class="ci-text">
                                            <h4 class="contacts-email-head"><a href="mailto:dovydasbukauskas@gmail.com">dovydasbukauskas@gmail.com</a></h4>
                                            <p>Let's build something cool!</p>
                                        </div>
                                    </div>

                                    <div class="info-block-w-icon">
                                        <div class="ci-icon">
                                            <svg fill="#007ced" width="52" height="52" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><path d="M62.1992 31.0002C61.5992 15.5002 48.8992 2.8002 33.2992 2.2002C24.8992 1.9002 17.0992 4.9002 10.9992 10.6002C4.99922 16.4002 1.69922 24.1002 1.69922 32.4002C1.69922 46.1002 10.8992 58.1002 24.0992 61.6002C24.4992 61.7002 24.7992 61.7002 25.1992 61.7002C26.0992 61.7002 26.9992 61.4002 27.6992 60.8002C28.6992 60.0002 29.2992 58.8002 29.2992 57.5002V54.3002C29.2992 53.4002 29.3992 49.6002 29.3992 48.9002C29.4992 48.4002 29.5992 48.0002 29.8992 47.7002C30.4992 46.9002 30.5992 45.8002 30.1992 44.9002C29.7992 44.1002 28.9992 43.5002 28.0992 43.5002C27.4992 43.4002 26.7992 43.3002 26.2992 43.1002C25.4992 42.9002 24.7992 42.6002 23.9992 42.2002C23.3992 41.9002 22.8992 41.4002 22.3992 40.8002C22.0992 40.5002 21.6992 39.8002 21.2992 38.5002C20.8992 37.3002 20.7992 36.1002 20.7992 34.8002C20.7992 33.0002 21.2992 31.6002 22.3992 30.4002C22.9992 29.7002 23.1992 28.8002 22.7992 28.0002C22.4992 27.3002 22.3992 26.5002 22.5992 25.5002C23.9992 26.0002 24.3992 26.3002 24.4992 26.4002L24.5992 26.5002C24.9992 26.7002 25.2992 26.9002 25.5992 27.1002L25.8992 27.3002C26.3992 27.6002 27.0992 27.7002 27.6992 27.5002C29.2992 27.1002 30.9992 26.8002 32.5992 26.8002C34.2992 26.8002 35.8992 27.0002 37.4992 27.5002C38.0992 27.7002 38.6992 27.6002 39.2992 27.3002L40.3992 26.6002C41.0992 26.2002 41.8992 25.8002 42.5992 25.5002C42.7992 26.4002 42.6992 27.3002 42.3992 28.1002C42.0992 28.9002 42.2992 29.8002 42.7992 30.4002C43.8992 31.6002 44.3992 33.0002 44.3992 34.8002C44.3992 36.2002 44.1992 37.4002 43.8992 38.4002C43.4992 39.4002 43.1992 40.2002 42.6992 40.8002C42.2992 41.3002 41.6992 41.7002 40.8992 42.2002C40.0992 42.6002 39.3992 42.9002 38.5992 43.1002C38.0992 43.2002 37.3992 43.4002 36.6992 43.5002H36.5992C35.6992 43.7002 34.9992 44.3002 34.5992 45.1002C34.2992 45.9002 34.2992 46.8002 34.8992 47.6002C35.2992 48.1002 35.4992 48.9002 35.4992 49.8002V57.3002C35.4992 58.6002 36.0992 59.9002 37.1992 60.6002C38.2992 61.4002 39.5992 61.6002 40.7992 61.2002C54.1992 57.4002 62.8992 44.8002 62.1992 31.0002ZM40.1992 57.0002V50.0002C40.1992 49.1002 40.0992 48.3002 39.8992 47.6002H39.9992C40.9992 47.3002 42.0992 46.9002 43.1992 46.3002C43.1992 46.3002 43.2992 46.3002 43.2992 46.2002C44.4992 45.5002 45.4992 44.7002 46.1992 43.8002C47.1992 42.7002 47.6992 41.3002 48.1992 40.0002C48.6992 38.5002 48.8992 36.9002 48.8992 34.9002C48.8992 32.5002 48.1992 30.3002 46.8992 28.5002C47.2992 26.6002 47.0992 24.5002 46.1992 22.3002C45.9992 21.7002 45.3992 21.2002 44.7992 21.0002C43.6992 20.6002 42.4992 20.8002 40.8992 21.3002C39.8992 21.7002 38.8992 22.2002 37.8992 22.7002L37.6992 23.0002C34.2992 22.2002 30.6992 22.2002 27.2992 23.0002C27.1992 22.9002 27.0992 22.9002 26.8992 22.8002C26.2992 22.4002 25.4992 22.0002 24.1992 21.5002C22.5992 20.8002 21.2992 20.6002 20.0992 21.0002C19.4992 21.2002 18.8992 21.7002 18.6992 22.4002C17.8992 24.7002 17.6992 26.7002 18.0992 28.6002C16.7992 30.4002 16.0992 32.6002 16.0992 35.0002C16.0992 36.8002 16.2992 38.4002 16.7992 40.0002C17.2992 41.6002 17.8992 42.9002 18.6992 43.8002C19.5992 44.9002 20.5992 45.7002 21.6992 46.3002C22.6992 46.9002 23.7992 47.3002 24.8992 47.6002C24.9992 47.6002 24.9992 47.6002 25.0992 47.6002C24.9992 47.9002 24.9992 48.3002 24.8992 48.6002C24.8992 48.7002 24.8992 48.8002 24.8992 48.8002C24.8992 48.8002 24.8992 50.1002 24.8992 51.5002C22.6992 50.7002 20.8992 49.6002 19.2992 48.0002C18.0992 46.6002 16.6992 45.3002 15.9992 44.9002C14.5992 44.2002 13.6992 45.6002 13.8992 46.4002C14.1992 47.4002 15.5992 48.0002 16.4992 48.8002C17.3992 49.7002 17.5992 50.9002 18.1992 51.9002C19.0992 53.2002 22.1992 54.9002 24.7992 54.9002V57.2002C13.8992 54.1002 6.29922 44.0002 6.29922 32.5002C6.29922 25.4002 9.09922 18.8002 14.1992 13.9002C18.9992 9.2002 25.3992 6.7002 32.0992 6.7002C32.3992 6.7002 32.7992 6.7002 33.0992 6.7002C46.3992 7.2002 57.1992 18.0002 57.6992 31.2002C58.2992 42.8002 51.0992 53.4002 40.1992 57.0002Z"/></svg>
                                        </div>
                                        <div class="ci-text">
                                            <h4><a href="https://github.com/dovydasbu">Github</a></h4>
                                            <p>For some coders who stumbled upon</p>
                                        </div>
                                    </div>

                                    <div class="info-block-w-icon">
                                        <div class="ci-icon">
                                            <svg fill="#007ced" width="52" height="52" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_412_71)"><path d="M14.6 63H5.7C2.6 63 0 60.5 0 57.5V28C0 24.9 2.5 22.5 5.7 22.5H14.6C17.7 22.5 20.3 25 20.3 28V57.5C20.4 60.5 17.8 63 14.6 63ZM5.7 27.4C5.4 27.4 5.1 27.5 5.1 27.8V57.3C5.1 57.4 5.2 57.7 5.7 57.7H14.6C14.9 57.7 15.2 57.6 15.2 57.3V28C15.2 27.9 14.9 27.6 14.6 27.6H5.7V27.4Z"/><path d="M58.7984 63H49.7984C46.6984 63 44.0984 60.5 44.0984 57.5V45.3C44.0984 44.7 43.6984 44.3 42.8984 44.3C42.2984 44.3 41.6984 44.7 41.6984 45.3V57.4C41.6984 60.5 39.1984 62.9 35.9984 62.9H27.0984C23.9984 62.9 21.3984 60.4 21.3984 57.4V28C21.3984 24.9 23.8984 22.5 27.0984 22.5H35.9984C37.8984 22.5 39.4984 23.4 40.4984 24.8C40.8984 24.7 41.3984 24.4 41.6984 24.2C44.7984 22.7 48.2984 22.3 51.4984 22.7C58.4984 23.6 63.8984 29.4 63.9984 36.4V57.7C64.2984 60.5 61.7984 63 58.7984 63ZM42.9984 39.4C46.3984 39.4 49.0984 42.2 49.0984 45.4V57.5C49.0984 57.6 49.1984 57.9 49.6984 57.9H58.5984C58.8984 57.9 59.1984 57.8 59.1984 57.5V36.3C59.0984 31.9 55.5984 28.1 50.9984 27.7C48.6984 27.4 45.9984 27.8 43.6984 28.9C42.4984 29.3 41.4984 30.1 40.4984 30.7L36.5984 33.5V28C36.5984 27.9 36.4984 27.6 35.9984 27.6H27.0984C26.7984 27.6 26.4984 27.7 26.4984 28V57.5C26.4984 57.6 26.5984 57.9 27.0984 57.9H36.0984C36.3984 57.9 36.6984 57.8 36.6984 57.5V45.3C36.8984 42 39.4984 39.4 42.9984 39.4Z"/><path d="M10.7992 21.9C4.99922 21.9 0.199219 17.2 0.199219 11.4C0.199219 5.6 4.79922 1 10.7992 1C16.7992 1 21.3992 5.7 21.3992 11.5C21.3992 17.3 16.5992 21.9 10.7992 21.9ZM10.7992 6.1C7.69922 6.1 5.09922 8.6 5.09922 11.5C5.09922 14.6 7.59922 16.9 10.7992 16.9C13.9992 16.9 16.4992 14.4 16.4992 11.5C16.4992 8.4 13.9992 6.1 10.7992 6.1Z"/></g><defs><clipPath id="clip0_412_71"><rect width="64" height="64" fill="white"/></clipPath></defs></svg>
                                        </div>
                                        <div class="ci-text">
                                            <h4 class="margin-0"><a href="https://www.linkedin.com/in/dovydas-bukauskas/">LinkedIn</a></h4>
                                            <p>See everything in familiar format ;)</p>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class=" col-xs-12 col-sm-8 ">

                                <div class="block-title">
                                    <h2>How Can I Help You?</h2>
                                </div>

                                <form id="contact_form" class="contact-form" action="contact_form/contact_form.php" method="post">

                                    <div class="messages"></div>

                                    <div class="controls two-columns">
                                        <div class="fields clearfix">
                                            <div class="left-column">
                                                <div class="form-group form-group-with-icon">
                                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                                                    <div class="form-control-border"></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group form-group-with-icon">
                                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                                                    <div class="form-control-border"></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group form-group-with-icon">
                                                    <input id="form_name" type="text" name="subject" class="form-control" placeholder="Subject" required="required" data-error="Subject is required.">
                                                    <div class="form-control-border"></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="right-column">
                                                <div class="form-group form-group-with-icon">
                                                    <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="7" required="required" data-error="Please, leave me a message."></textarea>
                                                    <div class="form-control-border"></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"></div>

                                        <input type="submit" class="button btn-send disabled" value="Send message">
                                    </div>
                                </form>

                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>

        @include('partials.footer')

    </div>
@stop
