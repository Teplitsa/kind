<?php
/**
 * Nav Menu
 */

/**
 * Add arrow to menu item if has children
 */
function kind_primary_menu_item_args( $args, $item ) {

	$args->link_before = '';
	$args->link_after  = '';
	$args->after       = '';

	if ( 'primary' === $args->theme_location && 'main-menu' !== $args->menu_class ) {

		if ( in_array( 'menu-item-has-children', $item->classes ) ) {
			$args->link_before = '<span>';
			$args->link_after  = '</span>';
			$args->after = '<button class="kind-submenu-toggle" aria-label="' . esc_attr__( 'Expand child menu', 'kind' ) . '" role="button" aria-expanded="false">
				<svg viewBox="0 0 320 512" width="9px" height="14px" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
					<path fill="currentColor" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z" />
				</svg>
			</button>';
		}
	}

	if ( 'primary' === $args->theme_location && 'main-menu' === $args->menu_class ) {
		if ( in_array( 'menu-item-has-children', $item->classes, true ) ) {
			$args->link_before = '<span>';
			$args->link_after  = '</span>';
			$args->after = '<button class="kind-mobile-submenu-toggle" aria-label="' . esc_attr__( 'Expand child menu', 'kind' ) . '" role="button" aria-expanded="false">
				<svg viewBox="0 0 320 512" width="9px" height="14px" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
					<path fill="currentColor" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z" />
				</svg>
			</button>';
		}
	}

	return $args;
}
add_filter( 'nav_menu_item_args', 'kind_primary_menu_item_args', 10, 2 );
