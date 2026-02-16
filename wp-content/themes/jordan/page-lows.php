<?php get_header(); ?>
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
<!-- Hero Section -->
<div class="relative w-full h-[300px] rounded-xl overflow-hidden mb-12 group">
<div class="absolute inset-0 bg-gradient-to-r from-background-dark via-background-dark/60 to-transparent z-10"></div>
<img class="absolute inset-0 w-full h-full object-cover grayscale opacity-50 group-hover:grayscale-0 transition-all duration-700" data-alt="Close up of classic Air Jordan sneakers" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBk3aV9-2UJfBz_-c9xyKLUf9_9mwRfgtvY-_bLe8ltRNAm-zrDW5hXfeejbZ4u95XwYP_2VwlHlAHF2k4vsqJNdnSKD7z70jHBM1689qStymHHpYTRchIN-yMxu9N1g3LFoX1n3Lf8Ill6vS0RKBiknRPErd07LhGVkvT6JbMXppR0mxMZtcCM-Phy3q8uVebIXmclCTcrE3fADyA54bQ4yJRdYUI8ff1Ob8WhtyEmzr6IiLyBIzRfLsJvIK0BAGaTWGEfSygaP1c"/>
<div class="relative z-20 h-full flex flex-col justify-center px-8 sm:px-12">
<nav class="flex items-center gap-2 mb-4 text-xs font-semibold tracking-widest uppercase text-primary">
<a href="#">Shop</a>
<span>/</span>
<span class="text-white">Jordan Lows</span>
</nav>
<h1 class="text-4xl sm:text-6xl font-black italic uppercase tracking-tighter leading-none mb-4">Jordan Lows<br/><span class="text-primary">Collection</span></h1>
<p class="max-w-md text-slate-400 text-sm sm:text-base">Experience the pinnacle of street style. Curated selection of iconic Jordan 1 Lows and heritage silhouettes.</p>
</div>
</div>
<div class="flex flex-col lg:flex-row gap-8">
<!-- Sidebar Filters -->
<aside class="w-full lg:w-64 space-y-8 flex-shrink-0">
<div>
<h3 class="text-lg font-bold mb-4 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">filter_list</span> Filters
                    </h3>
<!-- Size Filter -->
<div class="mb-8">
<p class="text-sm font-bold uppercase tracking-wider mb-4 opacity-70">Select Size (US Men)</p>
<div class="grid grid-cols-4 gap-2">
<button class="h-10 border border-primary/20 hover:border-primary rounded flex items-center justify-center text-xs font-bold transition-colors">7</button>
<button class="h-10 border border-primary/20 hover:border-primary rounded flex items-center justify-center text-xs font-bold transition-colors">7.5</button>
<button class="h-10 border border-primary/20 hover:border-primary rounded flex items-center justify-center text-xs font-bold transition-colors">8</button>
<button class="h-10 border border-primary/20 hover:border-primary rounded flex items-center justify-center text-xs font-bold transition-colors">8.5</button>
<button class="h-10 bg-primary text-white rounded flex items-center justify-center text-xs font-bold">9</button>
<button class="h-10 border border-primary/20 hover:border-primary rounded flex items-center justify-center text-xs font-bold transition-colors">9.5</button>
<button class="h-10 border border-primary/20 hover:border-primary rounded flex items-center justify-center text-xs font-bold transition-colors">10</button>
<button class="h-10 border border-primary/20 hover:border-primary rounded flex items-center justify-center text-xs font-bold transition-colors">10.5</button>
<button class="h-10 border border-primary/20 hover:border-primary rounded flex items-center justify-center text-xs font-bold transition-colors">11</button>
<button class="h-10 border border-primary/20 hover:border-primary rounded flex items-center justify-center text-xs font-bold transition-colors">12</button>
<button class="h-10 border border-primary/20 hover:border-primary rounded flex items-center justify-center text-xs font-bold transition-colors">13</button>
<button class="h-10 border border-primary/20 hover:border-primary rounded flex items-center justify-center text-xs font-bold transition-colors">14</button>
</div>
</div>
<!-- Price Range -->
<!-- <div class="mb-8">
<p class="text-sm font-bold uppercase tracking-wider mb-4 opacity-70">Price Range</p>
<div class="space-y-3">
<label class="flex items-center gap-3 group cursor-pointer">
<input class="rounded border-primary/20 bg-transparent text-primary focus:ring-primary h-4 w-4" type="checkbox"/>
<span class="text-sm group-hover:text-primary transition-colors">$100 - $200</span>
</label>
<label class="flex items-center gap-3 group cursor-pointer">
<input class="rounded border-primary/20 bg-transparent text-primary focus:ring-primary h-4 w-4" type="checkbox"/>
<span class="text-sm group-hover:text-primary transition-colors">$200 - $500</span>
</label>
<label class="flex items-center gap-3 group cursor-pointer">
<input checked="" class="rounded border-primary/20 bg-transparent text-primary focus:ring-primary h-4 w-4" type="checkbox"/>
<span class="text-sm group-hover:text-primary transition-colors">$500 - $1,000</span>
</label>
<label class="flex items-center gap-3 group cursor-pointer">
<input class="rounded border-primary/20 bg-transparent text-primary focus:ring-primary h-4 w-4" type="checkbox"/>
<span class="text-sm group-hover:text-primary transition-colors">$1,000+</span>
</label>
</div>
</div> -->
<!-- Clear Filter -->
<button class="w-full py-3 border border-dashed border-primary/30 rounded-lg text-xs font-bold uppercase tracking-widest hover:bg-primary/10 transition-colors">
                        Clear All Filters
                    </button>
</div>
</aside>
<!-- Product Grid -->
<div class="flex-1">
<!-- Sorting & Count -->
<div class="flex items-center justify-between mb-8 pb-4 border-b border-primary/10">
<p class="text-sm font-medium"><span class="text-primary font-bold">12</span> items found</p>
<div class="flex items-center gap-2">
<span class="text-xs uppercase font-bold opacity-60">Sort By:</span>
<select class="bg-transparent border-none focus:ring-0 text-sm font-bold text-primary cursor-pointer">
<option>Newest Arrivals</option>
<option>Price: Low to High</option>
<option>Price: High to Low</option>
<option>Trending</option>
</select>
</div>
</div>
<!-- Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- Product 1 -->
<div class="group bg-primary/5 border border-primary/10 rounded-xl overflow-hidden hover:border-primary/40 transition-all duration-300">
<div class="relative aspect-square overflow-hidden bg-white/5 p-8 flex items-center justify-center">
<img class="w-full h-auto object-contain transition-transform duration-500 group-hover:scale-110 -rotate-12 group-hover:rotate-0" data-alt="Air Jordan 1 Low Travis Scott Reverse Mocha" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCU4V_oqrevQSza-Acp5sQoAOo8FBh8BRJAIyQJvY3lky2_X3A0Xuh0dTGRBZW5gENfZ89rY_OAzDHf2WmuOZBNriKqepAxNFKivXkJc02F8lBagT-C0CSLfv0m_jJcw8HqfLxHSxeQE1ghABfQdKYvzln6a_2I2UMQaop_mxppvHGIi2_XdJfenc5xZTJxWokYONnQyKyFzghp65UXvPMVrAkYJYys_xfVDJEBd4O6F9jhtWgZFLcotasZy81qnt7OC7m7jG5bIl0"/>
<div class="absolute top-4 left-4">
<span class="bg-primary text-white text-[10px] font-black uppercase px-2 py-1 rounded">Hype</span>
</div>
</div>
<div class="p-5">
<h3 class="text-lg font-bold leading-tight mb-1">AJ1 Low 'Reverse Mocha'</h3>
<p class="text-xs text-slate-400 mb-4">Travis Scott x Jordan Brand</p>
<div class="flex items-center justify-between">
<span class="text-xl font-black text-primary">$1,250</span>
<button class="bg-primary p-2 rounded-lg text-white hover:scale-110 transition-transform">
<span class="material-symbols-outlined">add_shopping_cart</span>
</button>
</div>
</div>
</div>
<!-- Product 2 -->
<div class="group bg-primary/5 border border-primary/10 rounded-xl overflow-hidden hover:border-primary/40 transition-all duration-300">
<div class="relative aspect-square overflow-hidden bg-white/5 p-8 flex items-center justify-center">
<img class="w-full h-auto object-contain transition-transform duration-500 group-hover:scale-110 -rotate-12 group-hover:rotate-0" data-alt="Jordan 1 Low OG Chicago Red and White" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWtCemRgowuoa3jFKLu0Rf0zUo1L0itUuJeM3pPpNMlM9eUbpxEoBBnziAScXcWOMerY8OCzSDbJ2jCdcwmNWpPer8KABs7TEW7s94IPkYClBdpCZEgdvih47j_CbNaYZ7nBbTMu9e_Xi6XpL--S3tW04xkZTdwDFrYi7BWaaru5fbsvVZKj3mGxRK0LZgreMRLCK84lk0dudAb7UxdxP4MvVQG9goHTPBtABYVc2TQeIwRFuVtsMMsqG0veTms314zKKjZr-jlJQ"/>
</div>
<div class="p-5">
<h3 class="text-lg font-bold leading-tight mb-1">AJ1 Low OG 'Chicago'</h3>
<p class="text-xs text-slate-400 mb-4">Varsity Red/White-Black</p>
<div class="flex items-center justify-between">
<span class="text-xl font-black text-primary">$680</span>
<button class="bg-primary p-2 rounded-lg text-white hover:scale-110 transition-transform">
<span class="material-symbols-outlined">add_shopping_cart</span>
</button>
</div>
</div>
</div>
<!-- Product 3 -->
<div class="group bg-primary/5 border border-primary/10 rounded-xl overflow-hidden hover:border-primary/40 transition-all duration-300">
<div class="relative aspect-square overflow-hidden bg-white/5 p-8 flex items-center justify-center">
<img class="w-full h-auto object-contain transition-transform duration-500 group-hover:scale-110 -rotate-12 group-hover:rotate-0" data-alt="Air Jordan 1 Low Wolf Grey" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoX2kntwqgr1G__y5Dy2j9m4GBN5PsbM4QRq28KI4ZfRA1NTiAH-3RJDWHu-fiUSu0xPhyAjvmE9SH5e9d2ImmyJOwqfNuBQzm4X3GLLf7nc6R1op62xsZJytrTYaE6e-XmqvR7bN343p46PML_FWPigi9ksK8tj9Twx4HXCMYbDyGgrvRpkqWhFjscq-cguvfFeKjnbq9wplgOF2ESZ7i16HVs_0Mq03FIx05cVFKPhZ3vJLXTk10ORKm9eXChH6kLgg3loPRaxY"/>
</div>
<div class="p-5">
<h3 class="text-lg font-bold leading-tight mb-1">AJ1 Low 'Wolf Grey'</h3>
<p class="text-xs text-slate-400 mb-4">Clean Aesthetic / Minimalist</p>
<div class="flex items-center justify-between">
<span class="text-xl font-black text-primary">$210</span>
<button class="bg-primary p-2 rounded-lg text-white hover:scale-110 transition-transform">
<span class="material-symbols-outlined">add_shopping_cart</span>
</button>
</div>
</div>
</div>
<!-- Product 4 -->
<div class="group bg-primary/5 border border-primary/10 rounded-xl overflow-hidden hover:border-primary/40 transition-all duration-300">
<div class="relative aspect-square overflow-hidden bg-white/5 p-8 flex items-center justify-center">
<img class="w-full h-auto object-contain transition-transform duration-500 group-hover:scale-110 -rotate-12 group-hover:rotate-0" data-alt="Jordan 1 Low Bred Toe" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAjbQj0ONhivzJ99FzgPvbunvTXNGfqMWLzBX9yn7He_21QeAQUx0fkS4sng5zGleooZoyimAkfTI8Sm_mmOKN1GqahZb7D9zDj9FZQEHyTwWoVyLlRCkj7RZi8JTDofQ0i5nYkQWYUda9SYQYFt6HPjiKsBSVLE4cQ3HuMmR3yuMybJDZOcDmPEVVoB9ppbgzJdrgBYJK4UergjyH5S5OAfkktVM-p4Ch10K8MzZSiiuRVhUSddtn2CTWBL-3JRtz5ytHM3_NMkGc"/>
<div class="absolute top-4 left-4">
<span class="bg-primary text-white text-[10px] font-black uppercase px-2 py-1 rounded">Sold Out</span>
</div>
</div>
<div class="p-5 opacity-50">
<h3 class="text-lg font-bold leading-tight mb-1">AJ1 Low 'Bred Toe'</h3>
<p class="text-xs text-slate-400 mb-4">Classic Jordan Colorway</p>
<div class="flex items-center justify-between">
<span class="text-xl font-black text-primary">$180</span>
<button class="bg-slate-700 p-2 rounded-lg text-white cursor-not-allowed" disabled="">
<span class="material-symbols-outlined text-sm">block</span>
</button>
</div>
</div>
</div>
<!-- Product 5 -->
<div class="group bg-primary/5 border border-primary/10 rounded-xl overflow-hidden hover:border-primary/40 transition-all duration-300">
<div class="relative aspect-square overflow-hidden bg-white/5 p-8 flex items-center justify-center">
<img class="w-full h-auto object-contain transition-transform duration-500 group-hover:scale-110 -rotate-12 group-hover:rotate-0" data-alt="Jordan 1 Low Black and White Panda" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCkcNXU5_03ps-7ByLvK8EFqeSS0Sl3oA8OtO7ebrB4j2TtEcv1FOhUVI1JSb9k2vb0Q1LXVr7Qa9yMFNd70JMqauDlBrOpwvgeimK4a1qS_m6FI0J-9jyzqmiH3LwS61nEHaKxcOhH3FmJmoeaZ3T5FqXM4tLyibPUDcAIgZa66mHUlnJ1vM6bWEEQs2oqrkBTo296SMxqBPjZ8F-R5LNYeawwLNRvNc0Z03f-KqNdQugwg5sNyh2h7ZmzkWlvq-ScW8_WucHBb8I"/>
</div>
<div class="p-5">
<h3 class="text-lg font-bold leading-tight mb-1">AJ1 Low 'Panda'</h3>
<p class="text-xs text-slate-400 mb-4">Black / White Essential</p>
<div class="flex items-center justify-between">
<span class="text-xl font-black text-primary">$165</span>
<button class="bg-primary p-2 rounded-lg text-white hover:scale-110 transition-transform">
<span class="material-symbols-outlined">add_shopping_cart</span>
</button>
</div>
</div>
</div>
<!-- Product 6 -->
<div class="group bg-primary/5 border border-primary/10 rounded-xl overflow-hidden hover:border-primary/40 transition-all duration-300">
<div class="relative aspect-square overflow-hidden bg-white/5 p-8 flex items-center justify-center">
<img class="w-full h-auto object-contain transition-transform duration-500 group-hover:scale-110 -rotate-12 group-hover:rotate-0" data-alt="Jordan 1 Low University Blue" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_Q9-g27OPTTrnNYBAwuecXvsn83jKRyAtWIq6JAJrfSMBZOjjvlEFSsu1oasZa7hOD_99bgsgGjwZ1vHar7rJ3sVVPa793kFRPadLILxiDinSZFiJUl7cjw0wvPa2GKawQzhIYsqcZW_IS-Ukjkm7RYNH3Dvfl6yJUWHhsJHBHYwrwX1DAnAoT5t85GxbH5k4JHD7937X3OX_nONfO-NGwBusloE1QDx7sW7b8o82NgQZeufMAmmE1oHbRwDRaZXyO_E5J5xpxm8"/>
</div>
<div class="p-5">
<h3 class="text-lg font-bold leading-tight mb-1">AJ1 Low 'UNC'</h3>
<p class="text-xs text-slate-400 mb-4">University Blue / White</p>
<div class="flex items-center justify-between">
<span class="text-xl font-black text-primary">$240</span>
<button class="bg-primary p-2 rounded-lg text-white hover:scale-110 transition-transform">
<span class="material-symbols-outlined">add_shopping_cart</span>
</button>
</div>
</div>
</div>
</div>
<!-- Pagination -->
<div class="mt-12 flex justify-center items-center gap-2">
<button class="w-10 h-10 rounded border border-primary/20 flex items-center justify-center hover:bg-primary/10 transition-colors">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="w-10 h-10 rounded bg-primary text-white font-bold">1</button>
<button class="w-10 h-10 rounded border border-primary/20 flex items-center justify-center hover:bg-primary/10 transition-colors">2</button>
<button class="w-10 h-10 rounded border border-primary/20 flex items-center justify-center hover:bg-primary/10 transition-colors">3</button>
<button class="w-10 h-10 rounded border border-primary/20 flex items-center justify-center hover:bg-primary/10 transition-colors">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
</div>
</main>
<!-- Footer -->
<?php get_footer(); ?>