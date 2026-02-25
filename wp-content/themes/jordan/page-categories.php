<?php get_header(); ?>

<main class="max-w-7xl mx-auto px-6 py-12">

<!-- Header -->
<div class="mb-16 text-center animate-fade-in">
    <span class="text-primary font-bold tracking-[0.3em] uppercase text-xs mb-4 block">
        Featured Collection
    </span>

    <h1 class="text-5xl md:text-7xl font-bold tracking-tighter uppercase italic">
        All Categories
    </h1>

    <div class="h-1 w-24 bg-primary mx-auto mt-4 rounded-full"></div>
</div>


<!-- Categories Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">


<!-- RETROS -->
<a href="<?php echo home_url('/retros'); ?>" class="group">

<div class="relative group h-[600px] overflow-hidden rounded-xl border border-neutral-muted/50">

<div class="absolute inset-0 bg-cover bg-center transition duration-700 group-hover:scale-110"
style="background-image: linear-gradient(to top, rgba(18,8,8,0.9), rgba(18,8,8,0)),
url('https://lh3.googleusercontent.com/aida-public/AB6AXuBNoUWE0l341YpDI_7URp-G3AQeqwV5KyZDADX-1y4_zIEEQpWGOIQiosS1ZE4M_LKTPJjS9GKNSfI6S-uhAteNw1wViSKE-kFukOznOW1VQhj8OE9ULVCQzVdl58b9gIIbSvrl1ZnxW1fFgPhiisa93TS6G4bapOn_BHMHjuRJmQkU15xaKWH1BSwo2p4dZxrqgMOwOKK-QN0NiaUbhbGmR5lFzOIYW38rrNViJK_t95-NnDuBFln7HDTON-Q5yiprwIQw2RCar9s');">
</div>

<div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition"></div>

<div class="absolute bottom-0 left-0 p-8 w-full">

<h3 class="text-4xl font-bold italic uppercase text-white mb-2">
Retros
</h3>

<p class="text-gray-300 mb-4">
Iconic silhouettes from the golden era.
</p>

<span class="bg-primary text-white px-6 py-3 rounded-lg font-bold">
Shop Now →
</span>

</div>

</div>

</a>



<!-- LOWS -->
<a href="<?php echo home_url('/lows'); ?>" class="group">

<div class="relative group h-[600px] overflow-hidden rounded-xl border">

<div class="absolute inset-0 bg-cover bg-center transition duration-700 group-hover:scale-110"
style="background-image: linear-gradient(to top, rgba(18,8,8,0.9), rgba(18,8,8,0)),
url('https://lh3.googleusercontent.com/aida-public/AB6AXuCexampleLOWIMAGE');">
</div>

<div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition"></div>

<div class="absolute bottom-0 left-0 p-8 w-full">

<h3 class="text-4xl font-bold italic uppercase text-white mb-2">
Lows
</h3>

<p class="text-gray-300 mb-4">
Modern low profile classics.
</p>

<span class="bg-primary text-white px-6 py-3 rounded-lg font-bold">
Shop Now →
</span>

</div>

</div>

</a>



<!-- MIDS -->
<a href="<?php echo home_url('/mids'); ?>" class="group">

<div class="relative group h-[600px] overflow-hidden rounded-xl border">

<div class="absolute inset-0 bg-cover bg-center transition duration-700 group-hover:scale-110"
style="background-image: linear-gradient(to top, rgba(18,8,8,0.9), rgba(18,8,8,0)),
url('https://lh3.googleusercontent.com/aida-public/AB6AXuCexampleMIDIMAGE');">
</div>

<div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition"></div>

<div class="absolute bottom-0 left-0 p-8 w-full">

<h3 class="text-4xl font-bold italic uppercase text-white mb-2">
Mids
</h3>

<p class="text-gray-300 mb-4">
Perfect balance between high and low.
</p>

<span class="bg-primary text-white px-6 py-3 rounded-lg font-bold">
Shop Now →
</span>

</div>

</div>

</a>


</div>

</main>

<?php get_footer(); ?>