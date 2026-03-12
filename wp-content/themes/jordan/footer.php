<footer class="border-t border-zinc-200 dark:border-zinc-800 py-12 bg-zinc-50 dark:bg-zinc-950">

<div class="max-w-[1200px] mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12">

<!-- BRAND -->
<div>

<div class="flex items-center gap-2 mb-6">

<div class="size-6 bg-primary rounded flex items-center justify-center text-white">
<span class="material-symbols-outlined text-xs">straighten</span>
</div>

<h2 class="text-lg font-black tracking-tighter uppercase italic">
<?php bloginfo('name'); ?>
</h2>

</div>

<p class="text-zinc-500 text-sm leading-relaxed mb-6">
Curating the world's most sought-after silhouettes for the modern collector.
</p>

</div>

<!-- FOOTER MENU -->
<div>

<div>

<h4 class="font-bold uppercase text-xs tracking-widest mb-6 text-zinc-400">
Shop
</h4>

<?php
wp_nav_menu(array(
'theme_location' => 'footer-shop',
'container' => false,
'menu_class' => 'space-y-4 text-sm font-medium'
));
?>

</div>
<div>

<h4 class="font-bold uppercase text-xs tracking-widest mb-6 text-zinc-400">
Boutique
</h4>

<?php
wp_nav_menu(array(
'theme_location' => 'footer-boutique',
'container' => false,
'menu_class' => 'space-y-4 text-sm font-medium'
));
?>

</div>


</div>

<!-- COPYRIGHT -->

<div class="max-w-[1200px] mx-auto px-6 mt-16 pt-8 border-t border-zinc-200 dark:border-zinc-900 flex justify-between items-center text-xs text-zinc-500 font-medium uppercase tracking-widest">

<p>
© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
</p>

</div>

</footer>


<!-- WHATSAPP BUTTON -->

<a class="fixed bottom-8 right-8 z-50 group" href="https://wa.me/" target="_blank">

<div class="absolute -top-12 right-0 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white px-4 py-2 rounded-lg text-xs font-bold shadow-xl opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
Chat with an expert
</div>

<div class="size-16 bg-[#25D366] rounded-full flex items-center justify-center text-white shadow-2xl hover:scale-110 transition-transform cursor-pointer">

<svg class="size-8 fill-current" viewBox="0 0 24 24">
<path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347"></path>
</svg>

</div>

</a>

<?php wp_footer(); ?>

</body>
</html>
