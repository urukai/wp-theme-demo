<?php
	// Den Kopfbereich einbetten
	get_header();


	// "The Loop"
	while( have_posts() ) {
		// ein Post aufbereiten
		the_post();
		// Post-Titel schreiben
		the_title( '<h1 class="mein-haupttitel">', '</h1>');
		// Inhalt ausgeben
		the_content();
	}



	// Fusszeile einfügen
	get_footer();