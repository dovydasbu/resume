<!-- Header -->
<header id="site_header" class="header">
    <div class="header-content clearfix">

        <!-- Text Logo -->
        <div class="text-logo">
            <a href="{{ route('home') }}">
                <div class="logo-symbol">D</div>
                <div class="logo-text">Dovydas <span>Bukauskas</span></div>
            </a>
        </div>
        <!-- /Text Logo -->

        <!-- Navigation -->
        <div class="site-nav mobile-menu-hide">
            <ul class="leven-classic-menu site-main-menu">
                <li @class(['menu-item', 'current-menu-item' => $tab === 'home'])>
                    <a href="{{ route('home') }}">{{ __('About Me') }}</a>
                </li>

                <li @class(['menu-item', 'current-menu-item' => $tab === 'resume'])>
                    <a href="{{ route('page', 'resume') }}">{{ __('Resume') }}</a>
                </li>

                <li @class(['menu-item', 'current-menu-item' => $tab === 'contacts'])>
                    <a href="{{ route('page', 'contacts') }}">Contact</a>
                </li>
            </ul>
        </div>

        <!-- Mobile Menu Toggle -->
        <a class="menu-toggle mobile-visible">
            <i class="fa fa-bars"></i>
        </a>
        <!-- Mobile Menu Toggle -->
    </div>
</header>
<!-- /Header -->
