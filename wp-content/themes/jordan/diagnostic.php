<?php
/**
 * Jordan Boutique: Auth Diagnostic Tool
 * 
 * Run this to see why your login/register pages might not be working.
 */

require_once( dirname(__FILE__) . '/../../../wp-load.php' );

echo '<style>body { font-family: monospace; background: #000; color: #0f0; padding: 20px; line-height: 1.5; } .err { color: #f00; font-weight: bold; } .ok { color: #0f0; } h2 { color: #fff; border-bottom: 1px solid #333; padding-bottom: 10px; }</style>';
echo '<h1>Jordan Boutique Diagnostic</h1>';

// 1. Check Permalinks
$permalink_structure = get_option('permalink_structure');
echo "<h2>1. Permalinks</h2>";
echo "Structure: " . ($permalink_structure ? $permalink_structure : "PLAIN (Not recommended)") . "<br>";
if (!$permalink_structure) {
    echo "<span class='err'>⚠ WARNING: Plain permalinks can cause issues with custom slugs. Please set Permalinks to 'Post name' in WP Settings.</span><br>";
} else {
    echo "<span class='ok'>✓ Permalinks are enabled.</span><br>";
}

// 2. Check Pages
echo "<h2>2. Page Status</h2>";
$pages_to_check = array('login', 'register', 'profile');
foreach ($pages_to_check as $slug) {
    $page = get_page_by_path($slug);
    echo "Slug [<strong>$slug</strong>]: ";
    if ($page) {
        $template = get_post_meta($page->ID, '_wp_page_template', true);
        $url = get_permalink($page);
        echo "<span class='ok'>FOUND</span> (ID: {$page->ID})<br>";
        echo " &nbsp; URL: $url<br>";
        echo " &nbsp; Template: " . ($template ? $template : "DEFAULT") . " ";
        if ($template != "page-$slug.php") {
            echo "<span class='err'>⚠ WRONG TEMPLATE (Expected page-$slug.php)</span>";
        } else {
            echo "<span class='ok'>✓ Correct</span>";
        }
        echo "<br>";
    } else {
        echo "<span class='err'>NOT FOUND</span><br>";
    }
}

// 3. Environment
echo "<h2>3. Environment</h2>";
echo "Site URL: " . get_site_url() . "<br>";
echo "Home URL: " . home_url() . "<br>";
echo "Theme Dir: " . get_template_directory() . "<br>";
echo "Registration Enabled: " . (get_option('users_can_register') ? "YES" : "NO") . "<br>";

echo "<h2>4. Fixes</h2>";
echo "If pages are NOT FOUND, run the setup script: <a href='setup-auth-pages.php' style='color:cyan'>setup-auth-pages.php</a><br>";
echo "If permalinks are PLAIN, go to Settings -> Permalinks and select 'Post name'.<br>";
?>
