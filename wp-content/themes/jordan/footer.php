<footer class="border-t border-zinc-200 dark:border-zinc-800 pt-16 pb-8 bg-zinc-50 dark:bg-zinc-950/50">

<div class="max-w-[1200px] mx-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

        <!-- BRAND COLUMN -->
        <div class="reveal-on-scroll">
            <div class="flex flex-col gap-4 mb-6">
                <a href="<?php echo home_url(); ?>" class="group inline-block">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <img src="<?php echo content_url('/uploads/logo.png'); ?>" alt="<?php bloginfo('name'); ?>" class="h-12 w-auto object-contain logo-image transition-transform group-hover:scale-105">
                    <?php endif; ?>
                </a>
                <h2 class="text-xl font-black tracking-tighter uppercase italic">
                    <?php bloginfo('name'); ?>
                </h2>
            </div>
            <p class="text-zinc-500 dark:text-zinc-400 text-sm leading-relaxed mb-8 max-w-xs">
                <?php echo esc_html( get_theme_mod('footer_tagline', "Curating the world's most sought-after silhouettes for the modern collector.") ); ?>
            </p>
            
            <!-- SOCIAL LINKS -->
            <div class="flex items-center gap-4">
                <a href="#" class="social-icon size-10 rounded-full bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 flex items-center justify-center text-zinc-600 dark:text-zinc-400 hover:text-primary hover:border-primary transition-all shadow-sm">
                    <svg class="size-5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.334 3.608 1.308.975.975 1.247 2.242 1.308 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.061 1.366-.333 2.633-1.308 3.608-.975.975-2.242 1.247-3.608 1.308-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.061-2.633-.333-3.608-1.308-.975-.975-1.247-2.242-1.308-3.608-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.061-1.366.334-2.633 1.308-3.608.975-.975 2.242-1.247 3.608-1.308 1.266-.058 1.646-.07 4.85-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.073 4.948.073s3.667-.014 4.947-.072c4.358-.2 6.78-2.618 6.98-6.98.058-1.281.072-1.689.072-4.948s-.014-3.667-.072-4.947c-.2-4.358-2.618-6.78-6.98-6.98-1.28-.058-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
                <a href="#" class="social-icon size-10 rounded-full bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 flex items-center justify-center text-zinc-600 dark:text-zinc-400 hover:text-primary hover:border-primary transition-all shadow-sm">
                    <svg class="size-5 fill-current" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
                <a href="#" class="social-icon size-10 rounded-full bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 flex items-center justify-center text-zinc-600 dark:text-zinc-400 hover:text-primary hover:border-primary transition-all shadow-sm">
                    <svg class="size-5 fill-current" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.324v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                </a>
            </div>
        </div>

        <!-- SHOP COLUMN -->
        <div class="reveal-on-scroll reveal-delay-1">
            <h4 class="font-bold uppercase text-xs tracking-widest mb-6 text-zinc-400 dark:text-zinc-500">
                Shop
            </h4>
            <div class="jordan-footer-links">
                <?php
                wp_nav_menu(array(
                'theme_location' => 'footer-shop',
                'container' => false,
                'menu_class' => 'space-y-4 text-sm font-medium'
                ));
                ?>
            </div>
        </div>

        <!-- BOUTIQUE COLUMN -->
        <div class="reveal-on-scroll reveal-delay-2">
            <h4 class="font-bold uppercase text-xs tracking-widest mb-6 text-zinc-400 dark:text-zinc-500">
                Boutique
            </h4>
            <div class="jordan-footer-links">
                <?php
                wp_nav_menu(array(
                'theme_location' => 'footer-boutique',
                'container' => false,
                'menu_class' => 'space-y-4 text-sm font-medium'
                ));
                ?>
            </div>
        </div>

        <!-- SUPPORT / CONTACT COLUMN -->
        <div class="reveal-on-scroll reveal-delay-3">
            <h4 class="font-bold uppercase text-xs tracking-widest mb-6 text-zinc-400 dark:text-zinc-500">
                Customer Care
            </h4>
            <ul class="space-y-4 text-sm font-medium jordan-footer-links text-zinc-600 dark:text-zinc-400">
                <li><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">Contact Us</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('privacy-policy')); ?>">Privacy Policy</a></li>
                <li><a href="#">Shipping & Returns</a></li>
                <li><a href="#">Terms of Service</a></li>
            </ul>
        </div>

    </div>

    <!-- COPYRIGHT SECTION -->
    <div class="pt-8 border-t border-zinc-200 dark:border-zinc-900 flex flex-col items-center gap-6">
        
        <!-- Back to top -->
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="back-to-top flex items-center gap-2 group text-xs font-bold uppercase tracking-widest text-zinc-400 hover:text-primary transition-colors">
            Back to top
        </button>

        <div class="text-xs text-zinc-500 font-medium uppercase tracking-widest text-center">
            <p>
                © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
            </p>
        </div>
    </div>
</div>

</footer>


<!-- WHATSAPP BUTTON -->
<a class="whatsapp-btn fixed bottom-8 right-8 z-50 group" href="https://wa.me/<?php echo esc_attr( get_theme_mod('footer_whatsapp', '') ); ?>" target="_blank">

    <div class="absolute -top-12 right-0 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white px-4 py-2 rounded-lg text-xs font-bold shadow-xl opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap border border-zinc-100 dark:border-zinc-700">
        Chat with an expert
    </div>

    <div class="size-16 bg-[#25D366] rounded-full flex items-center justify-center text-white shadow-2xl hover:scale-110 transition-transform cursor-pointer relative z-10">
        <svg class="size-8 fill-current" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347"></path>
        </svg>
    </div>

</a>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // --- MOBILE MENU ---
    const toggle = document.getElementById('mobile-menu-toggle');
    const menu = document.getElementById('mobile-menu');
    if (toggle && menu) {
        toggle.addEventListener('click', function() {
            menu.classList.toggle('is-open');
            toggle.querySelector('.flex').classList.toggle('hamburger-active');
        });
    }

    // --- SCROLL REVEAL ---
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.reveal-on-scroll').forEach(el => {
        observer.observe(el);
    });

    // --- CART SYSTEM JS ---
    const cartToggles = document.querySelectorAll('#cart-toggle, #cart-toggle-guest, #cart-toggle-mobile');
    const cartDrawer = document.getElementById('cart-drawer');
    const cartOverlay = document.getElementById('cart-drawer-overlay');
    const cartClose = document.getElementById('cart-close');
    const continueShopping = document.getElementById('continue-shopping');
    const itemsContainer = document.getElementById('cart-items-container');
    const cartFooter = document.getElementById('cart-footer');
    const cartTotalPrice = document.getElementById('cart-total-price');
    const cartBadges = document.querySelectorAll('#cart-count-badge, #cart-count-badge-guest, #cart-count-badge-mobile');

    console.log('Cart System Initialized', {
        togglesCount: cartToggles.length,
        drawerExists: !!cartDrawer,
        overlayExists: !!cartOverlay
    });

    function toggleCart(e) {
        if (e && typeof e.preventDefault === 'function') {
            e.preventDefault();
        }
        
        if (!cartDrawer || !cartOverlay) {
            console.error('Cart drawer or overlay missing!', { cartDrawer, cartOverlay });
            return;
        }

        const isOpen = cartDrawer.classList.toggle('is-open');
        cartOverlay.classList.toggle('is-visible');
        
        console.log('Cart Toggled', { isOpen });

        if (isOpen) {
            refreshCart();
        }
    }

    cartToggles.forEach(btn => {
        btn.addEventListener('click', toggleCart);
    });
    
    if (cartClose) cartClose.addEventListener('click', toggleCart);
    if (cartOverlay) cartOverlay.addEventListener('click', toggleCart);
    if (continueShopping) continueShopping.addEventListener('click', toggleCart);

    window.updateCartUI = function(data) {
        if (!data || !data.cart) return;
        const cart = data.cart;
        const count = data.count;

        // Update badges
        cartBadges.forEach(badge => {
            badge.innerText = count;
            count > 0 ? badge.classList.remove('hidden') : badge.classList.add('hidden');
        });

        // Update container
        if (!itemsContainer) return;
        if (Object.keys(cart).length === 0) {
            itemsContainer.innerHTML = `
        <div class="h-full flex flex-col items-center justify-center text-center py-12">
            <div class="size-24 bg-zinc-100 dark:bg-zinc-800/50 rounded-full flex items-center justify-center mb-6 relative">
                <span class="material-symbols-outlined text-4xl text-zinc-400 dark:text-zinc-600">shopping_basket</span>
                <div class="absolute -top-1 -right-1 size-4 bg-primary rounded-full animate-ping opacity-25"></div>
            </div>
            <p class="font-black uppercase tracking-widest text-xs mb-2">Your collection is empty</p>
            <p class="text-zinc-500 text-[10px] uppercase tracking-widest mb-6">Add some heat to your cart</p>
            <a href="${jordan_cart_params.categories_url || '#'}" id="re-continue" class="px-8 py-3 bg-primary text-white font-black uppercase italic text-[11px] tracking-widest rounded-xl shadow-lg shadow-red-500/20 hover:scale-105 active:scale-95 transition-all text-center">Start Shopping</a>
        </div>`;
            if (cartFooter) cartFooter.classList.add('hidden');
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
            if (cartTotalPrice) cartTotalPrice.innerText = `Rs ${total.toLocaleString()}`;
            if (cartFooter) cartFooter.classList.remove('hidden');

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
        if (typeof jordan_cart_params === 'undefined' || !jordan_cart_params.ajax_url) return;
        jQuery.ajax({
            url: jordan_cart_params.ajax_url,
            type: 'POST',
            data: {
                action: 'jordan_get_cart'
            },
            success: (response) => {
                if (response.success) updateCartUI(response.data);
            }
        });
    }

    function removeFromCart(id) {
        if (typeof jordan_cart_params === 'undefined' || !jordan_cart_params.nonce) return;
        jQuery.ajax({
            url: jordan_cart_params.ajax_url,
            type: 'POST',
            data: {
                action: 'jordan_remove_from_cart',
                post_id: id,
                nonce: jordan_cart_params.nonce
            },
            success: (response) => {
                if (response.success) updateCartUI(response.data);
            }
        });
    }

    // Add to cart event delegation
    window.jordanAddToCart = function(productId) {
        if (typeof jordan_cart_params === 'undefined' || !jordan_cart_params.nonce) return;
        jQuery.ajax({
            url: jordan_cart_params.ajax_url,
            type: 'POST',
            data: {
                action: 'jordan_add_to_cart',
                post_id: productId,
                nonce: jordan_cart_params.nonce
            },
            success: (response) => {
                if (response.success) {
                    updateCartUI(response.data);
                    if (cartDrawer && !cartDrawer.classList.contains('is-open')) toggleCart();
                }
            }
        });
    };

    // Initial count check
    refreshCart();
});
</script>

<?php wp_footer(); ?>

</body>
</html>
