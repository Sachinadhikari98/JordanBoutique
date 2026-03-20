<?php
/**
 * Quick diagnostic + fix for the broken logo
 */
define('WP_USE_THEMES', false);
require_once( dirname(__FILE__) . '/../../../wp-load.php' );

echo "<pre style='font-family:monospace;background:#000;color:#0f0;padding:20px'>";

$logo_id = get_theme_mod('custom_logo');
echo "custom_logo theme mod value: " . var_export($logo_id, true) . "\n";

if ($logo_id) {
    $url = wp_get_attachment_url($logo_id);
    echo "Attachment URL: " . var_export($url, true) . "\n";
    
    if (!$url) {
        echo "\n*** CONFIRMED: custom_logo points to non-existent attachment (ID: $logo_id) ***\n";
        echo "Removing broken custom_logo theme mod...\n";
        remove_theme_mod('custom_logo');
        echo "DONE - custom_logo theme mod removed. Logo will now use static fallback.\n";
    } else {
        echo "Attachment URL exists: $url\n";
        echo "has_custom_logo(): " . (has_custom_logo() ? 'YES' : 'NO') . "\n";
    }
} else {
    echo "No custom_logo set. Using static file fallback.\n";
}

echo "\nTemplate directory URI: " . get_template_directory_uri() . "\n";
echo "</pre>";
?>
