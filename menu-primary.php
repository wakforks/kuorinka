<?php if ( has_nav_menu( 'primary' ) ) : ?>

	<button id="nav-toggle"><?php _e( 'Menu', 'kuorinka' ); ?></button>
	
	<nav id="menu-primary" class="menu main-navigation" role="navigation" aria-label="<?php _e( 'Primary Menu', 'kuorinka' ); ?>">	
		<div class="wrap">
			
			<?php

				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'menu_id'         => 'menu-primary-items',
						'depth'           => 4,
						'menu_class'      => 'menu-items',
						'fallback_cb'     => ''
					)
				);
			
			?>
		
		</div><!-- .wrap -->
	</nav><!-- #menu-primary -->

<?php endif; ?>