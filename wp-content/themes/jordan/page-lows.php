<?php get_header(); ?>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

<!-- Hero Section -->
<div class="relative w-full h-[300px] rounded-xl overflow-hidden mb-12 group">
<div class="absolute inset-0 bg-gradient-to-r from-background-dark via-background-dark/60 to-transparent z-10"></div>

<img class="absolute inset-0 w-full h-full object-cover grayscale opacity-50 group-hover:grayscale-0 transition-all duration-700"
src="<?php echo esc_url( get_theme_mod('lows_hero_image', 'https://lh3.googleusercontent.com/aida-public/AB6AXuBk3aV9-2UJfBz_-c9xyKLUf9_9mwRfgtvY-_bLe8ltRNAm-zrDW5hXfeejbZ4u95XwYP_2VwlHlAHF2k4vsqJNdnSKD7z70jHBM1689qStymHHpYTRchIN-yMxu9N1g3LFoX1n3Lf8Ill6vS0RKBiknRPErd07LhGVkvT6JbMXppR0mxMZtcCM-Phy3q8uVebIXmclCTcrE3fADyA54bQ4yJRdYUI8ff1Ob8WhtyEmzr6IiLyBIzRfLsJvIK0BAGaTWGEfSygaP1c') ); ?>"
alt="<?php echo esc_attr( get_theme_mod('lows_hero_title', 'Jordan Lows') ); ?>">

<div class="relative z-20 h-full flex flex-col justify-center px-8 sm:px-12">

<nav class="flex items-center gap-2 mb-4 text-xs font-semibold tracking-widest uppercase text-primary">
<a href="<?php echo site_url(); ?>">Shop</a>
<span>/</span>
<span class="text-white"><?php echo esc_html( get_theme_mod('lows_hero_title', 'Jordan Lows') ); ?></span>
</nav>

<h1 class="text-4xl sm:text-6xl font-black italic uppercase tracking-tighter leading-none mb-4">
<?php echo esc_html( get_theme_mod('lows_hero_title', 'Jordan Lows') ); ?> <br><span class="text-primary">Collection</span>
</h1>

<p class="max-w-md text-slate-400 text-sm sm:text-base">
<?php echo esc_html( get_theme_mod('lows_hero_subtitle', 'Experience the pinnacle of street style. Curated selection of iconic Jordan 1 Lows.') ); ?>
</p>

</div>
</div>


<div class="flex flex-col lg:flex-row gap-8">


<!-- Products -->
<div class="flex-1">

<div class="flex items-center justify-between mb-8 pb-4 border-b border-primary/10">
<p class="text-sm font-medium">
<span class="text-primary font-bold">Collection</span>
</p>

<div class="flex items-center gap-2">
</div>
</div>


<!-- Product Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

<?php

$args = array(
'post_type' => 'post',
'posts_per_page' => -1,
'meta_query' => array(
array(
'key' => 'shoe_category',
'value' => 'lows',
'compare' => '='
)
)
);

$query = new WP_Query($args);

if($query->have_posts()):
while($query->have_posts()): $query->the_post();

$name = get_post_meta(get_the_ID(),'shoe_name',true);
$price = get_post_meta(get_the_ID(),'shoe_price',true);
$img_id = get_post_meta(get_the_ID(),'shoe_image',true);
$img_url = wp_get_attachment_url($img_id);

?>

<div class="group bg-primary/5 border border-primary/10 rounded-xl overflow-hidden hover:border-primary/40 transition-all duration-300">

<div class="relative aspect-square overflow-hidden bg-white/5 p-8 flex items-center justify-center">

<img class="w-full h-auto object-contain transition-transform duration-500 group-hover:scale-110 -rotate-12 group-hover:rotate-0"
src="<?php echo esc_url($img_url); ?>"
alt="<?php echo esc_attr($name); ?>">

</div>

<div class="p-5">

<h3 class="text-lg font-bold leading-tight mb-1">
<?php echo esc_html($name); ?>
</h3>

<p class="text-xs text-slate-400 mb-4">
Jordan Low Collection
</p>

<div class="flex items-center justify-between">

<span class="text-xl font-black text-primary">
Rs <?php echo esc_html($price); ?>
</span>

</div>

</div>

</div>

<?php
endwhile;
wp_reset_postdata();
else:
?>

<p class="text-white">No lows found.</p>

<?php endif; ?>

</div>


</div>
</div>


</main>

<?php get_footer(); ?>
