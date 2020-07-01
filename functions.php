<?php
	
	/**
	 * Eigenes CSS laden
	 */
	add_action( 'wp_enqueue_scripts', function() {
		wp_enqueue_style( 
			'eigene-styles', 
			get_stylesheet_directory_uri() . '/style.css', 
			[]
		);
		
	});

	
	/**
	 * Body-CSS-Klassen filtern
	 */
	add_filter( 'body_class', function( $classes ) {
		if ( is_front_page() ) {
			$classes[] = 'startseite';
		}
		return $classes;
	});

	/**
	 * Eigenes Menü registrieren
	 */
	add_action( 'after_setup_theme', function() {
		register_nav_menu( 'hauptmenu', 'Hauptmenü');
	});
	









