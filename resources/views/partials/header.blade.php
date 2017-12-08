<!-- header.blade.php -->
<header class="banner bg-dark">
  <div class="container">
    <nav class="nav-primary">
      <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'list-unstyled list-inline']) !!}
      @endif
    </nav>
  </div>
</header>
