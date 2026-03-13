<?php
/**
 * Setup Authentication Pages
 * 
 * Run this script once to automatically create Login, Register, and Profile pages
 * in the WordPress database and assign them the correct templates.
 * 
 * To run: Access YOUR_SITE_URL/setup-auth-pages.php in your browser, 
 * then DELETE this file for security.
 */

// Load WordPress environment
require_once( dirname(__FILE__) . '/../../../wp-load.php' );

// TEMPORARY: Disabled security check so you can fix your login if you are locked out.
// IMPORTANT: DELETE THIS FILE IMMEDIATELY AFTER RUNNING.
/*
if ( ! current_user_can('manage_options') ) {
    wp_die('Unauthorized. Please log in as an administrator first.');
}
*/

$pages = array(
    'login' => array(
        'title'    => 'Login',
        'template' => 'page-login.php',
    ),
    'register' => array(
        'title'    => 'Register',
        'template' => 'page-register.php',
    ),
    'profile' => array(
        'title'    => 'Profile',
        'template' => 'page-profile.php',
    ),
);

echo '<h1>Jordan Boutique: Auth Setup</h1>';
echo '<ul style="font-family: sans-serif; line-height: 1.6;">';

foreach ( $pages as $slug => $data ) {
    
    // Check if page already exists
    $page_exists = get_page_by_path($slug);

    if ( $page_exists ) {
        // Update template just in case
        update_post_meta( $page_exists->ID, '_wp_page_template', $data['template'] );
        echo "<li>✅ Page <strong>{$data['title']}</strong> already exists (updated template).</li>";
    } else {
        // Create the page
        $page_id = wp_insert_post( array(
            'post_title'   => $data['title'],
            'post_name'    => $slug,
            'post_content' => '',
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ) );

        if ( ! is_wp_error($page_id) ) {
            update_post_meta( $page_id, '_wp_page_template', $data['template'] );
            echo "<li>🚀 Created <strong>{$data['title']}</strong> page (ID: $page_id).</li>";
        } else {
            echo "<li>❌ Error creating <strong>{$data['title']}</strong>: " . $page_id->get_error_message() . "</li>";
        }
    }
}

// Flush rewrite rules to ensure slugs work
flush_rewrite_rules();
echo "<li>🔄 Flushed permalink rewrite rules.</li>";

echo '</ul>';
echo '<p style="color: red; font-weight: bold;">⚠️ Setup complete! Please DELETE this file (setup-auth-pages.php) from your server now.</p>';
echo '<p><a href="' . home_url() . '">Go to Homepage</a></p>';
