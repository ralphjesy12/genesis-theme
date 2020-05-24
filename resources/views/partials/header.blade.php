<header>
  <nav class="navbar sticky-top navbar-expand-lg navbar-light">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-menu" aria-controls="navbar-main-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand mr-auto ml-auto ml-lg-0" href="{{ home_url('/') }}">
        @php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        if ( has_custom_logo() ) {
          echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
        } else {
          echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
        }
        @endphp
      </a>
      <div class="collapse navbar-collapse" id="navbar-main-menu">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container_class' => 'ml-auto mt-2 mt-lg-0','menu_class' => 'navbar-nav']) !!}
        @endif
      </div>
    </div>
  </nav>
</header>
