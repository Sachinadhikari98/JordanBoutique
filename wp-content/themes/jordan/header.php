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

<div class="max-w-[1200px] mx-auto px-6 h-16 flex items-center justify-between">

<!-- LOGO -->
<div class="flex items-center gap-10">

<a class="jordan-logo flex items-center gap-2.5" href="<?php echo home_url(); ?>">

<div class="logo-icon size-9 bg-primary rounded-lg flex items-center justify-center text-white shadow-lg shadow-red-500/20">
</div>

<h2 class="text-xl font-black tracking-tighter uppercase">
<?php bloginfo('name'); ?>
</h2>

</a>

<!-- DESKTOP NAV -->
<nav class="jordan-nav hidden md:flex items-center">

<?php
wp_nav_menu(array(
'theme_location' => 'primary-menu',
'container' => false,
'menu_class' => 'flex items-center gap-8 text-sm font-medium',
'fallback_cb' => false
));
?>

</nav>

</div>

<!-- RIGHT SIDE ICONS -->
<div class="flex items-center gap-1">

<?php 
// Smart URL retrieval for Auth
$login_page_obj = get_page_by_path('login');
$auth_url = $login_page_obj ? get_permalink($login_page_obj) : wp_login_url();
$profile_page_obj = get_page_by_path('profile');
$profile_url = $profile_page_obj ? get_permalink($profile_page_obj) : admin_url('profile.php');
?>

<!-- User / Login / Profile -->
<div class="flex items-center gap-2">

<?php if ( is_user_logged_in() ) : ?>
    <a href="<?php echo esc_url($profile_url); ?>" class="group flex items-center gap-2 px-3 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-800 rounded-lg transition-all duration-300" title="My Profile">
        <span class="material-symbols-outlined text-xl group-hover:text-primary transition-colors">account_circle</span>
        <span class="hidden sm:inline text-xs font-bold uppercase tracking-widest group-hover:text-primary transition-colors">Profile</span>
    </a>
    <a href="<?php echo wp_logout_url( home_url() ); ?>" class="group flex items-center gap-2 px-3 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-800 rounded-lg transition-all duration-300" title="Logout">
        <span class="material-symbols-outlined text-xl group-hover:text-primary transition-colors">logout</span>
        <span class="hidden sm:inline text-xs font-bold uppercase tracking-widest group-hover:text-primary transition-colors">Logout</span>
    </a>
<?php else : ?>
    <div class="flex items-center gap-4">
        <a href="<?php echo esc_url($auth_url); ?>" 
           class="text-[10px] sm:text-xs font-bold uppercase tracking-widest hover:text-primary transition-colors">
           Login
        </a>
        <a href="<?php echo esc_url( home_url('/register') ); ?>" 
           class="bg-primary text-white text-[10px] sm:text-xs font-black px-4 sm:px-6 py-2 sm:py-2.5 rounded-full hover:bg-red-700 transition-all uppercase italic tracking-wider shadow-lg shadow-red-500/20 active:scale-95">
           Register
        </a>
    </div>
<?php endif; ?>

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
        <div class="space-y-3 mt-2">
            <a href="<?php echo esc_url($auth_url); ?>" 
               class="flex items-center gap-2 py-3 text-sm font-bold uppercase tracking-widest text-zinc-500 hover:text-primary transition-colors">
                <span class="material-symbols-outlined text-lg">login</span>
                Login
            </a>
            <a href="<?php echo esc_url( home_url('/register') ); ?>" 
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
