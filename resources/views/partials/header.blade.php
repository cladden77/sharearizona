<header class="banner">
    <nav class="navbar navbar-expand-lg py-3">
      <div class="container">
      <a class="navbar-brand" href="{{ home_url('/') }}"><img alt="Share Arizona" src="/app/uploads/2022/05/sharearizona-logo.svg" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
      </div>
    </nav>
</header>
