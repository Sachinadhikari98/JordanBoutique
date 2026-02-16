<?php get_header(); ?>
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
<!-- Breadcrumbs & Title -->
<div class="mb-8">
<nav class="flex text-sm text-slate-500 dark:text-slate-400 mb-2">
<a class="hover:text-primary" href="#">Home</a>
<span class="mx-2">/</span>
<span class="text-slate-900 dark:text-white font-medium">Mids Collection</span>
</nav>
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
<div>
<h2 class="text-4xl font-black tracking-tight text-slate-900 dark:text-white uppercase">Air Jordan Mids</h2>
<p class="mt-2 text-slate-500 dark:text-slate-400 max-w-2xl">The versatile middle ground. Explore our curated selection of iconic mid-top silhouettes featuring premium materials and heritage colorways.</p>
</div>
<div class="flex items-center gap-2 bg-slate-200 dark:bg-white/5 p-1 rounded-lg">
<button class="p-2 bg-white dark:bg-white/10 rounded shadow-sm">
<span class="material-symbols-outlined text-sm">grid_view</span>
</button>
<button class="p-2 hover:bg-white dark:hover:bg-white/10 rounded">
<span class="material-symbols-outlined text-sm">view_list</span>
</button>
</div>
</div>
</div>
<div class="flex flex-col lg:flex-row gap-8">
<!-- Sidebar Filters -->
<aside class="w-full lg:w-64 flex-shrink-0 space-y-8">
<!-- Size Filter -->
<div>
<h3 class="text-sm font-bold uppercase tracking-widest mb-4 flex items-center justify-between">
                        Size (US)
                        <span class="material-symbols-outlined text-xs">keyboard_arrow_up</span>
</h3>
<div class="grid grid-cols-4 gap-2">
<button class="h-10 border border-slate-200 dark:border-white/10 hover:border-primary flex items-center justify-center text-xs rounded transition-colors">7</button>
<button class="h-10 border border-slate-200 dark:border-white/10 hover:border-primary flex items-center justify-center text-xs rounded transition-colors">7.5</button>
<button class="h-10 border border-slate-200 dark:border-white/10 hover:border-primary flex items-center justify-center text-xs rounded transition-colors">8</button>
<button class="h-10 border border-primary bg-primary text-white flex items-center justify-center text-xs rounded transition-colors">8.5</button>
<button class="h-10 border border-slate-200 dark:border-white/10 hover:border-primary flex items-center justify-center text-xs rounded transition-colors">9</button>
<button class="h-10 border border-slate-200 dark:border-white/10 hover:border-primary flex items-center justify-center text-xs rounded transition-colors">9.5</button>
<button class="h-10 border border-slate-200 dark:border-white/10 hover:border-primary flex items-center justify-center text-xs rounded transition-colors">10</button>
<button class="h-10 border border-slate-200 dark:border-white/10 hover:border-primary flex items-center justify-center text-xs rounded transition-colors">10.5</button>
<button class="h-10 border border-slate-200 dark:border-white/10 hover:border-primary flex items-center justify-center text-xs rounded transition-colors">11</button>
<button class="h-10 border border-slate-200 dark:border-white/10 hover:border-primary flex items-center justify-center text-xs rounded transition-colors">12</button>
<button class="h-10 border border-slate-200 dark:border-white/10 hover:border-primary flex items-center justify-center text-xs rounded transition-colors">13</button>
</div>
</div>
<!-- Price Filter -->
<div>
<h3 class="text-sm font-bold uppercase tracking-widest mb-4 flex items-center justify-between">
                        Price Range
                        <span class="material-symbols-outlined text-xs">keyboard_arrow_up</span>
</h3>
<div class="space-y-3">
<label class="flex items-center gap-3 cursor-pointer group">
<input class="rounded border-slate-300 dark:border-white/10 text-primary focus:ring-primary bg-transparent" type="checkbox"/>
<span class="text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">Under $150</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<input checked="" class="rounded border-slate-300 dark:border-white/10 text-primary focus:ring-primary bg-transparent" type="checkbox"/>
<span class="text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">$150 - $250</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<input class="rounded border-slate-300 dark:border-white/10 text-primary focus:ring-primary bg-transparent" type="checkbox"/>
<span class="text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">$250 - $500</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<input class="rounded border-slate-300 dark:border-white/10 text-primary focus:ring-primary bg-transparent" type="checkbox"/>
<span class="text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">Premium ($500+)</span>
</label>
</div>
</div>
<!-- Color Filter (Extra) -->
<div>
<h3 class="text-sm font-bold uppercase tracking-widest mb-4">Colorway</h3>
<div class="flex flex-wrap gap-3">
<button class="w-8 h-8 rounded-full bg-red-600 border-2 border-transparent hover:border-white outline outline-1 outline-white/10"></button>
<button class="w-8 h-8 rounded-full bg-black border-2 border-transparent hover:border-white outline outline-1 outline-white/10"></button>
<button class="w-8 h-8 rounded-full bg-white border-2 border-transparent hover:border-slate-400 outline outline-1 outline-white/10"></button>
<button class="w-8 h-8 rounded-full bg-blue-600 border-2 border-transparent hover:border-white outline outline-1 outline-white/10"></button>
<button class="w-8 h-8 rounded-full bg-gray-500 border-2 border-transparent hover:border-white outline outline-1 outline-white/10"></button>
</div>
</div>
</aside>
<!-- Product Grid -->
<div class="flex-1">
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- Product Card 1 -->
<div class="group relative bg-white dark:bg-white/5 rounded-xl overflow-hidden border border-slate-200 dark:border-white/5 hover:border-primary/50 transition-all duration-300">
<div class="aspect-square overflow-hidden bg-slate-100 dark:bg-zinc-900 relative">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Air Jordan 1 Mid Bred Toe sneaker" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDU1egowp_9IKtPhlbaYqxtCMkyHzCDnjFJ4DnPeN2e-lofquE5aeBHKXwlwKxUn-_dw9zW4DBj1_DKVjn8pc6e8IvNUI7bzCTZJsoI_5_d8Q9NNKO3s0LCJK0_SkSJQLJp_v33odBvcP7Ge362lnAJ_XiGwF0PJMCPyZWd0bkZbEQmp8aXpeNWNB6kAajR67wzwBwwKUA2ExL9am1e0OPPeKm_filxmyONAbv-ZWGO_sd0MM6WJW5f0GKsYzDnTRnETkq0zrLBNjQ"/>
<span class="absolute top-4 left-4 bg-primary text-white text-[10px] font-bold px-2 py-1 uppercase rounded">New Arrival</span>
<button class="absolute top-4 right-4 p-2 bg-white/80 dark:bg-black/40 backdrop-blur rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
<span class="material-symbols-outlined text-sm">favorite</span>
</button>
</div>
<div class="p-4">
<p class="text-[10px] uppercase tracking-widest text-slate-500 dark:text-slate-400 font-bold">Jordan Brand</p>
<h3 class="text-lg font-bold mt-1 group-hover:text-primary transition-colors">AJ1 Mid 'Bred Toe'</h3>
<div class="flex items-center justify-between mt-4">
<p class="text-primary font-black text-xl">$165.00</p>
<button class="flex items-center gap-2 bg-slate-900 dark:bg-white text-white dark:text-black px-4 py-2 rounded-lg text-xs font-bold hover:bg-primary dark:hover:bg-primary dark:hover:text-white transition-colors">
<span class="material-symbols-outlined text-sm">add_shopping_cart</span>
                                    ADD
                                </button>
</div>
</div>
</div>
<!-- Product Card 2 -->
<div class="group relative bg-white dark:bg-white/5 rounded-xl overflow-hidden border border-slate-200 dark:border-white/5 hover:border-primary/50 transition-all duration-300">
<div class="aspect-square overflow-hidden bg-slate-100 dark:bg-zinc-900 relative">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Air Jordan 1 Mid Royal Blue sneaker" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCo1pv0mtjQY0-4NDYXJHZ5g4ssrAEXdWM6a3WSyPEF_bXVuNCRv2EfCs_F-aopvfLnRI4nxrRcT76m4CY5-qAhkoDL8LBEldmQbbNV4XvmzKG8obwDpAH7ypEmsx9j7rsh3YoXivWuKsOo9g926FUfNhlzXel6kMZ1O9Fs1bCuGLJpXMVgfIICW0GbyT5OpPXw-A7c3nK4yoZyveTtQ-OFq9P4xZmH6mdkoGj35gOAuPbKWRwoawMVLixSsSVphxihunibWI9A1ag"/>
<button class="absolute top-4 right-4 p-2 bg-white/80 dark:bg-black/40 backdrop-blur rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
<span class="material-symbols-outlined text-sm">favorite</span>
</button>
</div>
<div class="p-4">
<p class="text-[10px] uppercase tracking-widest text-slate-500 dark:text-slate-400 font-bold">Jordan Brand</p>
<h3 class="text-lg font-bold mt-1 group-hover:text-primary transition-colors">AJ1 Mid 'Hyper Royal'</h3>
<div class="flex items-center justify-between mt-4">
<p class="text-primary font-black text-xl">$155.00</p>
<button class="flex items-center gap-2 bg-slate-900 dark:bg-white text-white dark:text-black px-4 py-2 rounded-lg text-xs font-bold hover:bg-primary dark:hover:bg-primary dark:hover:text-white transition-colors">
<span class="material-symbols-outlined text-sm">add_shopping_cart</span>
                                    ADD
                                </button>
</div>
</div>
</div>
<!-- Product Card 3 -->
<div class="group relative bg-white dark:bg-white/5 rounded-xl overflow-hidden border border-slate-200 dark:border-white/5 hover:border-primary/50 transition-all duration-300">
<div class="aspect-square overflow-hidden bg-slate-100 dark:bg-zinc-900 relative">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Air Jordan 1 Mid Carbon Fiber" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCtV33WBBhY26Jlz4hoSYB3bbmUUnbhecvqW8WYshZe8iYFGe4DfBuPB8nLy4GuxXwry5t9YXxGt-I1ftJLojp9_aaeDX6yyXOuqYdR4ms_eZsKLWeNA4aEFF_-b0912oQgpj9xCznf3M3Au9CaWnm5SOWXtNcf1oGWyevrFzF4_2hJV9j9HM_lOAWUjmxQ-FT4Kf8nlaoGV23HdVGi-6s6d7eSK7hyNaiXs0V1PHLbuV8in1RSpbuklDAriG3SbSXrE4-ztD9KWms"/>
<span class="absolute top-4 left-4 bg-slate-800 text-white text-[10px] font-bold px-2 py-1 uppercase rounded">Limited</span>
<button class="absolute top-4 right-4 p-2 bg-white/80 dark:bg-black/40 backdrop-blur rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
<span class="material-symbols-outlined text-sm">favorite</span>
</button>
</div>
<div class="p-4">
<p class="text-[10px] uppercase tracking-widest text-slate-500 dark:text-slate-400 font-bold">Jordan Brand</p>
<h3 class="text-lg font-bold mt-1 group-hover:text-primary transition-colors">AJ1 Mid 'Shadow'</h3>
<div class="flex items-center justify-between mt-4">
<p class="text-primary font-black text-xl">$180.00</p>
<button class="flex items-center gap-2 bg-slate-900 dark:bg-white text-white dark:text-black px-4 py-2 rounded-lg text-xs font-bold hover:bg-primary dark:hover:bg-primary dark:hover:text-white transition-colors">
<span class="material-symbols-outlined text-sm">add_shopping_cart</span>
                                    ADD
                                </button>
</div>
</div>
</div>
<!-- Product Card 4 -->
<div class="group relative bg-white dark:bg-white/5 rounded-xl overflow-hidden border border-slate-200 dark:border-white/5 hover:border-primary/50 transition-all duration-300">
<div class="aspect-square overflow-hidden bg-slate-100 dark:bg-zinc-900 relative">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Air Jordan 1 Mid University Blue" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDt3e53EwKvFzNRt87giXL9sCDW5tmw5kJzYV_Zx-5657Bv17HsNgCRDVzC4mvHWdyOWGLQ5Wau1H6EL2KJo6WX7YuzRIJG3pLX0_b3tUY__JaITkAySjh4P5zElW01p4K7RIEq3zVZZbOSwue7KF1MRZxaRvdvmBtSrQETOE1TOuA7GJFm_Uax1X_2mE2NfhSAcL9zx1wFUv_xAak5nv6k2p9fWKGzYdZKDzNJZsdJmxR7X5N6rcBLqLuqcPtJH1GJrrXnUiA-Rg0"/>
<button class="absolute top-4 right-4 p-2 bg-white/80 dark:bg-black/40 backdrop-blur rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
<span class="material-symbols-outlined text-sm">favorite</span>
</button>
</div>
<div class="p-4">
<p class="text-[10px] uppercase tracking-widest text-slate-500 dark:text-slate-400 font-bold">Jordan Brand</p>
<h3 class="text-lg font-bold mt-1 group-hover:text-primary transition-colors">AJ1 Mid 'University Blue'</h3>
<div class="flex items-center justify-between mt-4">
<p class="text-primary font-black text-xl">$170.00</p>
<button class="flex items-center gap-2 bg-slate-900 dark:bg-white text-white dark:text-black px-4 py-2 rounded-lg text-xs font-bold hover:bg-primary dark:hover:bg-primary dark:hover:text-white transition-colors">
<span class="material-symbols-outlined text-sm">add_shopping_cart</span>
                                    ADD
                                </button>
</div>
</div>
</div>
<!-- Product Card 5 -->
<div class="group relative bg-white dark:bg-white/5 rounded-xl overflow-hidden border border-slate-200 dark:border-white/5 hover:border-primary/50 transition-all duration-300">
<div class="aspect-square overflow-hidden bg-slate-100 dark:bg-zinc-900 relative">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Air Jordan 1 Mid White Red" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUp0KVf6IKGUHbuMlfzieso_MDTjOp2ziitUj_ENnDH9Qo2QP6vV4WABDfrXhgvCMlEYKBUrN1MCVJwKAm3YLrXU1SWIm3dIovYqWKKIvUX7uxLChftdXY8baggOqKZYKKU1tiHsJU7w-cVvkP1ZvMf0A8oa_tgFCsMLub6XUHiEfUKvoaWn56KVQX9k6EnlhyrwjSFmKC6aLB4oK4yPbXuAgrB65NUXJfpWymTgvQJyL-yk6dBZHVUYy8uegEMpOoxAhhP1_V4pk"/>
<button class="absolute top-4 right-4 p-2 bg-white/80 dark:bg-black/40 backdrop-blur rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
<span class="material-symbols-outlined text-sm">favorite</span>
</button>
</div>
<div class="p-4">
<p class="text-[10px] uppercase tracking-widest text-slate-500 dark:text-slate-400 font-bold">Jordan Brand</p>
<h3 class="text-lg font-bold mt-1 group-hover:text-primary transition-colors">AJ1 Mid 'Chicago'</h3>
<div class="flex items-center justify-between mt-4">
<p class="text-primary font-black text-xl">$190.00</p>
<button class="flex items-center gap-2 bg-slate-900 dark:bg-white text-white dark:text-black px-4 py-2 rounded-lg text-xs font-bold hover:bg-primary dark:hover:bg-primary dark:hover:text-white transition-colors">
<span class="material-symbols-outlined text-sm">add_shopping_cart</span>
                                    ADD
                                </button>
</div>
</div>
</div>
<!-- Product Card 6 -->
<div class="group relative bg-white dark:bg-white/5 rounded-xl overflow-hidden border border-slate-200 dark:border-white/5 hover:border-primary/50 transition-all duration-300">
<div class="aspect-square overflow-hidden bg-slate-100 dark:bg-zinc-900 relative">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="Air Jordan 1 Mid White/Silver" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXEH601b3_eQsk20wNnGrS-mBEw-tiq7ltz0-vI0ahb2iLSFCbXXn5gfIMMC2WUUNnMON4Y6aZEfTtja6xFhitffFM-yDeFtOauzGYkqlZERSKfGnk-ItvrJAr3SL_EJCSL82Ty87HsA_BMomJa65pZTauBY71qH2BY8YaO9nvpyEZCm_4Qc5W1RL4YHaPZ65NEyPlOpJ2CAbx8nK4DK-CIA3ciyrFODicxmt9oScklRX5xcJilPQ_XayyOoTtIYP8JF4D3XZYUXQ"/>
<span class="absolute top-4 left-4 bg-primary text-white text-[10px] font-bold px-2 py-1 uppercase rounded">Restock</span>
<button class="absolute top-4 right-4 p-2 bg-white/80 dark:bg-black/40 backdrop-blur rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
<span class="material-symbols-outlined text-sm">favorite</span>
</button>
</div>
<div class="p-4">
<p class="text-[10px] uppercase tracking-widest text-slate-500 dark:text-slate-400 font-bold">Jordan Brand</p>
<h3 class="text-lg font-bold mt-1 group-hover:text-primary transition-colors">AJ1 Mid 'Metallic Silver'</h3>
<div class="flex items-center justify-between mt-4">
<p class="text-primary font-black text-xl">$160.00</p>
<button class="flex items-center gap-2 bg-slate-900 dark:bg-white text-white dark:text-black px-4 py-2 rounded-lg text-xs font-bold hover:bg-primary dark:hover:bg-primary dark:hover:text-white transition-colors">
<span class="material-symbols-outlined text-sm">add_shopping_cart</span>
                                    ADD
                                </button>
</div>
</div>
</div>
</div>
<!-- Pagination -->
<div class="mt-12 flex justify-center items-center gap-4">
<button class="p-2 border border-slate-200 dark:border-white/10 rounded hover:bg-primary hover:text-white transition-colors disabled:opacity-50" disabled="">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<span class="text-sm font-bold">Page 1 of 4</span>
<button class="p-2 border border-slate-200 dark:border-white/10 rounded hover:bg-primary hover:text-white transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
</div>
</main>
<!-- Footer -->
<?php get_footer(); ?>