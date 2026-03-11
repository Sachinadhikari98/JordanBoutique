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
<header class="sticky top-0 z-50 w-full border-b border-zinc-200 dark:border-zinc-800 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md">

<div class="max-w-[1200px] mx-auto px-6 h-16 flex items-center justify-between">

<!-- LOGO -->
<div class="flex items-center gap-10">

<a class="flex items-center gap-2" href="<?php echo home_url(); ?>">

<div class="size-8 bg-primary rounded flex items-center justify-center text-white">
<span class="material-symbols-outlined">straighten</span>
</div>

<h2 class="text-xl font-black tracking-tighter uppercase">
<?php bloginfo('name'); ?>
</h2>

</a>

<!-- DYNAMIC MENU -->
<nav class="hidden md:flex items-center">

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

<!-- USER ICON -->
<div class="flex gap-2">

<button class="p-2 hover:bg-zinc-100 dark:hover:bg-zinc-800 rounded-lg transition-colors">
<span class="material-symbols-outlined">person</span>
</button>

</div>

</div>

</header>
