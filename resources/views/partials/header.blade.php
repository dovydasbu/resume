<!-- Header -->
<header id="site_header" class="header">
    <div class="header-content clearfix">

        <!-- Text Logo -->
        <div class="text-logo">
            <a href="{{ route('page') }}">
                <div class="logo-symbol">D</div>
                <div class="logo-text">Dovydas <span>Bukauskas</span></div>
            </a>
        </div>
        <!-- /Text Logo -->

        <!-- Navigation -->
        <div class="site-nav mobile-menu-hide">
            <ul class="leven-classic-menu site-main-menu">
                <li @class(['menu-item', 'current-menu-item' => $tab === 'home'])>
                    <a href="{{ route('page') }}">{{ __('About Me') }}</a>
                </li>

                <li @class(['menu-item', 'current-menu-item' => $tab === 'resume'])>
                    <a href="{{ route('page', 'resume') }}">{{ __('Resume') }}</a>
                </li>

                <li @class(['menu-item', 'current-menu-item' => $tab === 'contacts'])>
                    <a href="{{ route('page', 'contacts') }}">Contacts</a>
                </li>

                <li @class(['menu-item', 'menu-item-snake-game', 'current-menu-item' => $tab === 'snake-game'])>
                    <a href="{{ route('page', 'snake-game') }}">Let's play!</a>
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
