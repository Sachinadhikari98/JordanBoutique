<?php get_header(); ?>

<main class="max-w-7xl mx-auto px-6 py-12">

<!-- Page Header -->
<div class="mb-16 text-center">
    <span class="text-primary font-bold tracking-[0.3em] uppercase text-xs mb-4 block">
        Our Collections
    </span>
    <h1 class="text-5xl md:text-7xl font-bold tracking-tighter mb-6 uppercase italic">
        All Categories
    </h1>
    <div class="h-1 w-24 bg-primary mx-auto rounded-full"></div>
</div>

<!-- Category Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">

<!-- ================= RETROS ================= -->
<div class="category-card relative group h-[600px] overflow-hidden rounded-xl border border-neutral-muted/50">

    <!-- Background -->
    <div class="absolute inset-0 bg-cover bg-center pointer-events-none"
         style="background-image: linear-gradient(to top, rgba(18,8,8,0.9), rgba(18,8,8,0)), url('YOUR-IMAGE-URL');">
    </div>

    <!-- Hover Overlay -->
    <div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"></div>

    <!-- Content -->
    <div class="absolute bottom-0 left-0 p-8 w-full z-10">
        <h3 class="text-4xl font-bold tracking-tighter mb-2 italic uppercase">
            Retro(High-top)
        </h3>
        <p class="text-gray-300 mb-6 font-light leading-relaxed">
            The Classics that Defined an Era. Iconic silhouettes from the golden age of basketball.
        </p>

        <a href="<?php echo site_url('/retros/'); ?>" 
           class="w-full bg-primary hover:bg-primary/90 text-white py-4 rounded-lg font-bold uppercase tracking-widest transition-all shadow-xl shadow-primary/20 flex items-center justify-center gap-2">
            Shop Now
            <span class="material-symbols-outlined text-sm">arrow_forward</span>
        </a>
    </div>
</div>


<!-- ================= LOWS ================= -->
<div class="category-card relative group h-[600px] overflow-hidden rounded-xl border border-neutral-muted/50">

    <div class="absolute inset-0 bg-cover bg-center pointer-events-none"
         style="background-image: linear-gradient(to top, rgba(18,8,8,0.9), rgba(18,8,8,0)), url('YOUR-IMAGE-URL');">
    </div>

    <div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"></div>

    <div class="absolute bottom-0 left-0 p-8 w-full z-10">
        <h3 class="text-4xl font-bold tracking-tighter mb-2 italic uppercase">
            Retro Low
        </h3>
        <p class="text-gray-300 mb-6 font-light leading-relaxed">
            Versatility Meets Iconography. Effortless style for everyday street fashion.
        </p>

        <a href="<?php echo site_url('/lows/'); ?>" 
           class="w-full bg-primary hover:bg-primary/90 text-white py-4 rounded-lg font-bold uppercase tracking-widest transition-all shadow-xl shadow-primary/20 flex items-center justify-center gap-2">
            Shop Now
            <span class="material-symbols-outlined text-sm">arrow_forward</span>
        </a>
    </div>
</div>


<!-- ================= MIDS ================= -->
<div class="category-card relative group h-[600px] overflow-hidden rounded-xl border border-neutral-muted/50">

    <div class="absolute inset-0 bg-cover bg-center pointer-events-none"
         style="background-image: linear-gradient(to top, rgba(18,8,8,0.9), rgba(18,8,8,0)), url('YOUR-IMAGE-URL');">
    </div>

    <div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"></div>

    <div class="absolute bottom-0 left-0 p-8 w-full z-10">
        <h3 class="text-4xl font-bold tracking-tighter mb-2 italic uppercase">
            Mid
        </h3>
        <p class="text-gray-300 mb-6 font-light leading-relaxed">
            Bold Style for the Streets. The perfect balance of comfort and heritage design.
        </p>

        <a href="<?php echo site_url('/mids/'); ?>" 
           class="w-full bg-primary hover:bg-primary/90 text-white py-4 rounded-lg font-bold uppercase tracking-widest transition-all shadow-xl shadow-primary/20 flex items-center justify-center gap-2">
            Shop Now
            <span class="material-symbols-outlined text-sm">arrow_forward</span>
        </a>
    </div>
</div>

</div>
</main>

<?php get_footer(); ?>
