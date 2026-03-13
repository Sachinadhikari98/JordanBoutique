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
<a class="jordan-logo flex items-center gap-2.5 group" href="<?php echo home_url(); ?>">
    <?php if ( has_custom_logo() ) : ?>
        <?php the_custom_logo(); ?>
    <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>" class="h-10 w-auto object-contain logo-image transition-transform group-hover:scale-110">
    <?php endif; ?>
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
    <!-- Cart Button -->
    <button id="cart-toggle" class="group relative flex items-center justify-center p-2 hover:bg-zinc-100 dark:hover:bg-zinc-800 rounded-lg transition-all duration-300" title="View Cart">
        <span class="material-symbols-outlined text-2xl group-hover:text-primary transition-colors">shopping_cart</span>
        <span id="cart-count-badge" class="absolute -top-1 -right-1 size-5 bg-primary text-white text-[10px] font-black flex items-center justify-center rounded-full border-2 border-white dark:border-zinc-900 group-hover:scale-110 transition-transform hidden">0</span>
    </button>

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
            <a href="<?php echo esc_url( home_url('/register') ); ?>" 
               class="bg-primary text-white text-[10px] sm:text-xs font-black px-4 sm:px-6 py-2 sm:py-2.5 rounded-full hover:bg-red-700 transition-all uppercase italic tracking-wider shadow-lg shadow-red-500/20 active:scale-95">
               Register
            </a>
        </div>

        <!-- Cart Button (Guest) -->
        <button id="cart-toggle-guest" class="group relative flex items-center justify-center p-2 hover:bg-zinc-100 dark:hover:bg-zinc-800 rounded-lg transition-all duration-300" title="View Cart">
            <span class="material-symbols-outlined text-2xl group-hover:text-primary transition-colors">shopping_cart</span>
            <span id="cart-count-badge-guest" class="absolute -top-1 -right-1 size-5 bg-primary text-white text-[10px] font-black flex items-center justify-center rounded-full border-2 border-white dark:border-zinc-900 group-hover:scale-110 transition-transform hidden">0</span>
        </button>
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

<!-- CART DRAWER -->
<div id="cart-drawer-overlay" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-[100] opacity-0 pointer-events-none transition-all duration-500"></div>
<div id="cart-drawer" class="fixed top-0 right-0 h-full w-full max-w-sm bg-white dark:bg-zinc-900 z-[101] translate-x-full transition-transform duration-500 shadow-2xl flex flex-col">
    <div class="p-6 border-b border-zinc-100 dark:border-zinc-800 flex items-center justify-between">
        <h2 class="text-xl font-black uppercase italic tracking-tighter">Your <span class="text-primary">Cart</span></h2>
        <button id="cart-close" class="size-10 flex items-center justify-center rounded-full hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>

    <!-- Cart Items Area -->
    <div id="cart-items-container" class="flex-1 overflow-y-auto p-6 space-y-6">
        <!-- JS will populate this -->
        <div class="h-full flex flex-col items-center justify-center text-center opacity-50">
            <span class="material-symbols-outlined text-6xl mb-4">shopping_basket</span>
            <p class="font-bold uppercase tracking-widest text-xs">Your cart is empty</p>
            <button id="continue-shopping" class="mt-4 text-primary font-black uppercase italic text-[10px] tracking-widest hover:underline">Continue Shopping</button>
        </div>
    </div>

    <!-- Cart Footer -->
    <div id="cart-footer" class="p-6 border-t border-zinc-100 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900/50 hidden">
        <div class="flex items-center justify-between mb-6">
            <span class="text-xs font-bold uppercase tracking-widest text-zinc-500">Subtotal</span>
            <span id="cart-total-price" class="text-xl font-black italic text-primary">Rs 0</span>
        </div>
        <a href="#" class="w-full bg-primary text-white font-black py-4 rounded-xl uppercase italic tracking-wider shadow-lg shadow-red-500/20 block text-center active:scale-95 transition-all mb-3 text-sm">
            Checkout Now
        </a>
    </div>
</div>

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

    // --- CART SYSTEM JS ---
    const cartToggles = document.querySelectorAll('#cart-toggle, #cart-toggle-guest');
    const cartDrawer = document.getElementById('cart-drawer');
    const cartOverlay = document.getElementById('cart-drawer-overlay');
    const cartClose = document.getElementById('cart-close');
    const continueShopping = document.getElementById('continue-shopping');
    const itemsContainer = document.getElementById('cart-items-container');
    const cartFooter = document.getElementById('cart-footer');
    const cartTotalPrice = document.getElementById('cart-total-price');
    const cartBadges = document.querySelectorAll('#cart-count-badge, #cart-count-badge-guest');

    function toggleCart() {
        cartDrawer.classList.toggle('is-open');
        cartOverlay.classList.toggle('is-visible');
        if(cartDrawer.classList.contains('is-open')) {
            refreshCart();
        }
    }

    cartToggles.forEach(btn => btn.addEventListener('click', toggleCart));
    cartClose.addEventListener('click', toggleCart);
    cartOverlay.addEventListener('click', toggleCart);
    if(continueShopping) continueShopping.addEventListener('click', toggleCart);

    function updateCartUI(data) {
        const cart = data.cart;
        const count = data.count;

        // Update badges
        cartBadges.forEach(badge => {
            badge.innerText = count;
            count > 0 ? badge.classList.remove('hidden') : badge.classList.add('hidden');
        });

        // Update container
        if(Object.keys(cart).length === 0) {
            itemsContainer.innerHTML = `
                <div class="h-full flex flex-col items-center justify-center text-center opacity-50">
                    <span class="material-symbols-outlined text-6xl mb-4">shopping_basket</span>
                    <p class="font-bold uppercase tracking-widest text-xs">Your cart is empty</p>
                    <button id="re-continue" class="mt-4 text-primary font-black uppercase italic text-[10px] tracking-widest hover:underline">Continue Shopping</button>
                </div>`;
            document.getElementById('re-continue')?.addEventListener('click', toggleCart);
            cartFooter.classList.add('hidden');
        } else {
            itemsContainer.innerHTML = '';
            let total = 0;
            Object.values(cart).forEach(item => {
                total += item.price * item.qty;
                itemsContainer.innerHTML += `
                    <div class="cart-item">
                        <img src="${item.image}" alt="${item.name}">
                        <div class="cart-item-info">
                            <h4>${item.name}</h4>
                            <p>Rs ${item.price.toLocaleString()} x ${item.qty}</p>
                        </div>
                        <button class="remove-item material-symbols-outlined" data-id="${item.id}">delete</button>
                    </div>  
                `;
            });
            cartTotalPrice.innerText = `Rs ${total.toLocaleString()}`;
            cartFooter.classList.remove('hidden');

            // Attach remove events
            document.querySelectorAll('.remove-item').forEach(btn => {
                btn.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    removeFromCart(id);
                });
            });
        }
    }

    function refreshCart() {
        jQuery.ajax({
            url: jordan_cart_params.ajax_url,
            type: 'POST',
            data: { action: 'jordan_get_cart' },
            success: (response) => {
                if(response.success) updateCartUI(response.data);
            }
        });
    }

    function removeFromCart(id) {
        jQuery.ajax({
            url: jordan_cart_params.ajax_url,
            type: 'POST',
            data: { 
                action: 'jordan_remove_from_cart',
                post_id: id,
                nonce: jordan_cart_params.nonce
            },
            success: (response) => {
                if(response.success) updateCartUI(response.data);
            }
        });
    }

    // Add to cart event delegation
    window.jordanAddToCart = function(productId) {
        jQuery.ajax({
            url: jordan_cart_params.ajax_url,
            type: 'POST',
            data: { 
                action: 'jordan_add_to_cart',
                post_id: productId,
                nonce: jordan_cart_params.nonce
            },
            success: (response) => {
                if(response.success) {
                    updateCartUI(response.data);
                    if(!cartDrawer.classList.contains('is-open')) toggleCart();
                }
            }
        });
    };

    // Initial count check
    refreshCart();
});
</script>
