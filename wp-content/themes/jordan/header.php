<!DOCTYPE html>
<html <?php language_attributes(); ?> class="dark">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name'); ?></title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#f20d0d",
                        "background-light": "#f8f5f5",
                        "background-dark": "#0a0a0a",
                    },
                    fontFamily: {
                        display: ["Lexend", "sans-serif"]
                    }
                }
            }
        }
    </script>

    <style>
        body{
            font-family:'Lexend',sans-serif;
        }
    </style>

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-background-light dark:bg-background-dark text-slate-900 dark:text-white min-h-screen'); ?>>

<!-- HEADER -->
<header class="jordan-header sticky top-0 z-50 w-full bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-xl">

<!-- Shimmer accent line -->
<div class="header-shimmer"></div>

<div class="max-w-[1400px] mx-auto px-6 h-20 grid grid-cols-2 md:grid-cols-3 items-center">

<!-- LEFT: LOGO -->
<div class="flex items-center justify-start">
<a class="jordan-logo flex items-center gap-2.5" href="<?php echo home_url(); ?>">
<div class="logo-icon size-9 bg-primary rounded-lg flex items-center justify-center text-white shadow-lg shadow-red-500/20">
</div>
<h2 class="text-xl font-black tracking-tighter uppercase whitespace-nowrap">
<?php bloginfo('name'); ?>
</h2>
</a>
</div>

<!-- CENTER: NAVIGATION -->
<nav class="jordan-nav hidden md:flex items-center justify-center">
<?php
wp_nav_menu(array(
'theme_location' => 'primary-menu',
'container' => false,
'menu_class' => 'flex items-center gap-1 text-sm font-bold uppercase tracking-widest',
'fallback_cb' => false,
'link_before' => '<span class="px-4 py-2 rounded-full transition-all duration-300 hover:scale-110 flex items-center justify-center">',
'link_after' => '</span>'
));
?>
</nav>

<!-- RIGHT: AUTH BUTTONS -->
<div class="flex items-center justify-end gap-3">
<?php 
// Smart URL retrieval for Auth - Dynamic & Permalink Safe
function jordan_get_safe_permalink($slug, $fallback_url) {
    if (!$slug) return esc_url($fallback_url);
    $page_obj = get_page_by_path($slug);
    if ($page_obj) {
        return get_permalink($page_obj);
    }
    // Fallback if slug search fails but site might have it via ID
    return esc_url($fallback_url);
}

$auth_url     = jordan_get_safe_permalink('login', wp_login_url());
$register_url = jordan_get_safe_permalink('register', wp_registration_url());
$profile_url  = jordan_get_safe_permalink('profile', admin_url('profile.php'));
?>

<div class="hidden sm:flex items-center gap-2">
<?php if ( is_user_logged_in() ) : ?>
    <a href="<?php echo esc_url($profile_url); ?>" class="group flex items-center gap-2 px-3 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-800 rounded-lg transition-all duration-300" title="My Profile">
        <span class="material-symbols-outlined text-xl group-hover:text-primary transition-colors">account_circle</span>
        <span class="hidden lg:inline text-[10px] font-bold uppercase tracking-widest group-hover:text-primary transition-colors">Profile</span>
    </a>
    <a href="<?php echo wp_logout_url( home_url() ); ?>" class="group flex items-center gap-2 px-3 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-800 rounded-lg transition-all duration-300" title="Logout">
        <span class="material-symbols-outlined text-xl group-hover:text-primary transition-colors">logout</span>
        <span class="hidden lg:inline text-[10px] font-bold uppercase tracking-widest group-hover:text-primary transition-colors">Logout</span>
    </a>
<?php else : ?>
    <div class="flex items-center gap-3">
        <a href="<?php echo esc_url($auth_url); ?>" 
           class="bg-primary text-white text-[10px] sm:text-xs font-black px-4 sm:px-6 py-2 sm:py-2.5 rounded-full hover:bg-red-700 transition-all uppercase italic tracking-wider shadow-lg shadow-red-500/20 active:scale-95">
           Login
        </a>
        <a href="<?php echo esc_url($register_url); ?>" 
           class="bg-primary text-white text-[10px] sm:text-xs font-black px-4 sm:px-6 py-2 sm:py-2.5 rounded-full hover:bg-red-700 transition-all uppercase italic tracking-wider shadow-lg shadow-red-500/20 active:scale-95">
           Register
        </a>
    </div>
<?php endif; ?>
</div>

<!-- Mobile hamburger -->
<button id="mobile-menu-toggle" class="md:hidden p-2 hover:bg-zinc-100 dark:hover:bg-zinc-800 rounded-lg transition-colors ml-1" aria-label="Toggle menu">
    <div class="flex flex-col gap-1.5 w-5">
        <span class="hamburger-bar block h-0.5 w-full bg-current rounded-full"></span>
        <span class="hamburger-bar block h-0.5 w-full bg-current rounded-full"></span>
        <span class="hamburger-bar block h-0.5 w-full bg-current rounded-full"></span>
    </div>
</button>
</div>

</div>

<!-- MOBILE MENU -->
<div id="mobile-menu" class="mobile-menu md:hidden px-6 pb-4 border-t border-zinc-200/50 dark:border-zinc-800/50">
<?php
wp_nav_menu(array(
'theme_location' => 'primary-menu',
'container' => false,
'menu_class' => 'pt-2 text-sm font-medium',
'fallback_cb' => false
));
?>

<div class="pt-3 mt-1 border-t border-zinc-200/50 dark:border-zinc-800/50">
    <?php if ( is_user_logged_in() ) : ?>
        <a href="<?php echo esc_url($profile_url); ?>" class="flex items-center gap-2 py-3 text-sm font-bold uppercase tracking-widest text-primary">
            <span class="material-symbols-outlined text-lg">account_circle</span>
            My Profile
        </a>
        <a href="<?php echo wp_logout_url( home_url() ); ?>" class="flex items-center gap-2 py-3 text-sm font-bold uppercase tracking-widest text-zinc-500">
            <span class="material-symbols-outlined text-lg">logout</span>
            Logout
        </a>
    <?php else : ?>
        <div class="space-y-3 mt-4">
            <a href="<?php echo esc_url($auth_url); ?>" 
               class="w-full bg-primary text-white text-center font-black py-4 rounded-xl uppercase italic tracking-wider shadow-lg shadow-red-500/20 block active:scale-95 transition-all">
               Login
            </a>
            <a href="<?php echo esc_url($register_url); ?>" 
               class="w-full bg-primary text-white text-center font-black py-4 rounded-xl uppercase italic tracking-wider shadow-lg shadow-red-500/20 block active:scale-95 transition-all">
               Register Now
            </a>
        </div>
    <?php endif; ?>
</div>
</div>

<!-- Bottom border with gradient -->
<div class="h-px bg-gradient-to-r from-transparent via-zinc-300 dark:via-zinc-700 to-transparent"></div>

</header>

<!-- Mobile menu toggle script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('mobile-menu-toggle');
    const menu = document.getElementById('mobile-menu');
    if (toggle && menu) {
        toggle.addEventListener('click', function() {
            menu.classList.toggle('is-open');
            toggle.querySelector('.flex').classList.toggle('hamburger-active');
        });
    }
});
</script>
