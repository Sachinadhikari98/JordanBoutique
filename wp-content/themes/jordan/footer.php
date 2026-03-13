<footer class="border-t border-zinc-200 dark:border-zinc-800 pt-16 pb-8 bg-zinc-50 dark:bg-zinc-950/50">

<div class="max-w-[1200px] mx-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

        <!-- BRAND COLUMN -->
        <div class="reveal-on-scroll">
            <div class="flex items-center gap-2 mb-6">
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
// Scroll reveal observer
document.addEventListener('DOMContentLoaded', function() {
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
});
</script>

<?php wp_footer(); ?>

</body>
</html>
