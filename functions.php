<?php
// Fonctionnalités du thème enfant Mindly.
// Charge le composant carte sur le site et dans l'éditeur
function mindly_charger_composants() {
    wp_enqueue_style(
        'mindly-card',
        get_stylesheet_directory_uri() . '/assets/css/components/card.css',
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'mindly_charger_composants' );

function mindly_style_editeur() {
    add_editor_style( 'assets/css/components/card.css' );
}
add_action( 'after_setup_theme', 'mindly_style_editeur' );