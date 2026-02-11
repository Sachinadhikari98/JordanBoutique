<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Jordan Boutique | Premium Sneakers</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f20d0d",
                        "background-light": "#f8f5f5",
                        "background-dark": "#0a0a0a",
                    },
                    fontFamily: {
                        "display": ["Lexend", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            font-family: 'Lexend', sans-serif;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white min-h-screen relative">
<!-- Top Navigation Bar -->
<header class="sticky top-0 z-50 w-full border-b border-zinc-200 dark:border-zinc-800 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md">
<div class="max-w-[1200px] mx-auto px-6 h-16 flex items-center justify-between">
<div class="flex items-center gap-10">
<a class="flex items-center gap-2" href="#">
<div class="size-8 bg-primary rounded flex items-center justify-center text-white">
<span class="material-symbols-outlined">straighten</span>
</div>
<h2 class="text-xl font-black tracking-tighter uppercase">Jordan Boutique</h2>
</a>
<nav class="hidden md:flex items-center gap-8">
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Home</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Services</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">About</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Contact</a>
</nav>
</div>
<div class="flex items-center gap-4">
<div class="relative hidden sm:block">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-zinc-400 text-sm">search</span>
<input class="bg-zinc-100 dark:bg-zinc-900 border-none rounded-lg pl-10 pr-4 py-2 text-sm focus:ring-1 focus:ring-primary w-64 transition-all" placeholder="Search collection..." type="text"/>
</div>
<div class="flex gap-2">
<button class="p-2 hover:bg-zinc-100 dark:hover:bg-zinc-800 rounded-lg transition-colors relative">
<span class="material-symbols-outlined">shopping_bag</span>
<span class="absolute top-1 right-1 size-2 bg-primary rounded-full"></span>
</button>
<button class="p-2 hover:bg-zinc-100 dark:hover:bg-zinc-800 rounded-lg transition-colors">
<span class="material-symbols-outlined">person</span>
</button>
</div>
</div>
</div>
</header>
<main class="max-w-[1200px] mx-auto px-6 py-8">
<!-- Hero Section -->
<section class="relative rounded-xl overflow-hidden bg-zinc-100 dark:bg-zinc-900 mb-16">
<div class="grid grid-cols-1 @[864px]:grid-cols-2 gap-0">
<div class="p-10 md:p-16 flex flex-col justify-center order-2 md:order-1">
<span class="text-primary font-bold tracking-widest text-xs uppercase mb-4 block">New Arrival Drop</span>
<h1 class="text-5xl md:text-7xl font-black leading-[0.9] tracking-tighter mb-6 uppercase">
                        Legends <br/> <span class="text-primary">Never Die.</span>
</h1>
<p class="text-zinc-600 dark:text-zinc-400 text-lg mb-8 max-w-md">
                        The definitive Jordan 1 'Chicago' Reimagined. A tribute to the icon that changed everything. Limited stock available.
                    </p>
<div class="flex gap-4">
<button class="bg-primary text-white font-bold px-8 py-4 rounded-lg hover:bg-red-700 transition-all flex items-center gap-2">
                            Shop Now <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
<button class="border border-zinc-300 dark:border-zinc-700 font-bold px-8 py-4 rounded-lg hover:bg-zinc-200 dark:hover:bg-zinc-800 transition-all">
                            Details
                        </button>
</div>
</div>
<div class="bg-cover bg-center min-h-[400px] order-1 md:order-2" data-alt="Close up shot of Air Jordan 1 Chicago sneakers on a minimalist background" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBLJ-K9y4EgHYRGLJmomWdx0l_WnBP1sLazc8v6YC8qlYRONZSMz1TUpfTVjGNjV4_IvHJDIx1nRws05VqLKZW6qmDSMJAOOHG-dB4gZDoKre8eF6ElYPPi51bFEKqLdXys_9aepXrrF9l4abMr57U73f7Fb5T1hgpt7mBlLLSof1IOGefhNdqFoOItkNggfxm3yAyTPM6m4bVxDqM2LY1vi4zJBlp5fkELHIO7xsOespGblBR8iLwT3nyuArmztRfoY4_gR33BhnM");'>
</div>
</div>
</section>
<!-- Section Header -->
<div class="flex items-end justify-between mb-8">
<div>
<h2 class="text-3xl font-black uppercase tracking-tighter italic">Featured Collections</h2>
<div class="h-1 w-20 bg-primary mt-2"></div>
</div>
<a class="text-sm font-bold text-primary flex items-center gap-1 hover:underline" href="#">
                View All Categories <span class="material-symbols-outlined text-xs">open_in_new</span>
</a>
</div>
<!-- Image Grid for Collections -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-20">
<!-- Retros -->
<div class="group relative aspect-[3/4] overflow-hidden rounded-xl bg-zinc-900">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110 opacity-70" data-alt="Air Jordan Retro collection sneakers stacked neatly" style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0) 50%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDFAT42cvlASozWQs1t63THqV_BYQJ8zfneuC0B-rfRsJsdW7C_XZ8C9qyAElLn3jsdv-XiML-Lb7p8yLMNurLWIhCe-i_y1taugc_4YMUob3b9OqPLC8oVmSrtRKpbVjCnBvWP9feSihvqkVFEHHOZSXbjldL0Padz4AeFlYTrOjQH9sSiftH8qyutVxZSDD92Y6OJDIt5O3KLfiv0a6sKM9UhAyCBWTGNQm0Jgzz_g32wYaRai9iFn2c8yrDyQWLdey-XNihPnfg");'>
</div>
<div class="absolute bottom-0 left-0 p-8">
<p class="text-primary font-bold text-xs uppercase mb-1">The Classics</p>
<h3 class="text-3xl font-black text-white uppercase italic tracking-tighter">Retros</h3>
<p class="text-zinc-400 text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity">Built for the culture.</p>
</div>
<a class="absolute inset-0 z-10" href="#"></a>
</div>
<!-- Lows -->
<div class="group relative aspect-[3/4] overflow-hidden rounded-xl bg-zinc-900">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110 opacity-70" data-alt="Air Jordan Low sneakers in a street photography setting" style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0) 50%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuC9Crh6kATMkkDUaUDOOZXsq-nIwNe8DmOITapNKOLaqxKzQOSbiKIy__JLNMmiJFepTVWftsvPLuavnnlj_ym3BlmkRdKEQOxyysWTlpYN27WN0PSWm5-L5sgOEZAm_z146L6hfjNU9N2AR5m_PpyAaR9Z0W8J6mYBx3FJd0H2P1MoaMQLU8GTtmZgH7gvUnCD5uS4CTeZoiVbn2xYt1cu7jdrO65EHRcLoiINLl82QDqpOCdr2ZXV_2W3M9ztzC3tHTUUoJAjtAM");'>
</div>
<div class="absolute bottom-0 left-0 p-8">
<p class="text-primary font-bold text-xs uppercase mb-1">Street Ready</p>
<h3 class="text-3xl font-black text-white uppercase italic tracking-tighter">Lows</h3>
<p class="text-zinc-400 text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity">Low profile, high impact.</p>
</div>
<a class="absolute inset-0 z-10" href="#"></a>
</div>
<!-- Mids -->
<div class="group relative aspect-[3/4] overflow-hidden rounded-xl bg-zinc-900">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110 opacity-70" data-alt="Air Jordan Mid sneakers showcased on a pedestal" style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0) 50%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBujLOVBokG9KDwzbB6WRHcx6z5tNT6K9FsdUNJe6hx4pVU3uytjLpt1BJZ9JLawnu7ZqAti8jZ58e0P3GOW23ojBmK5XGojwJ-IUMN4Gyguyagc5pjNLt3cquoiJhmXZZNtR_U4z1nj14TWPUfs3vn4JDmgWcXxkLPzqARQPtItwihiF1t9UmmfnBAHZjp3E8fficA8TehcnDUYOIz-7UkioS99Ul0qdA7cUxx93szUxX_8Py5PAi86ebgSt4TckGVql3fi26CcQw");'>
</div>
<div class="absolute bottom-0 left-0 p-8">
<p class="text-primary font-bold text-xs uppercase mb-1">Everyday Icon</p>
<h3 class="text-3xl font-black text-white uppercase italic tracking-tighter">Mids</h3>
<p class="text-zinc-400 text-sm mt-2 opacity-0 group-hover:opacity-100 transition-opacity">The perfect balance.</p>
</div>
<a class="absolute inset-0 z-10" href="#"></a>
</div>
</div>
<!-- CTA Section -->
<section class="bg-primary rounded-2xl p-12 text-center relative overflow-hidden">
<div class="absolute top-0 right-0 p-4 opacity-10">
<span class="material-symbols-outlined text-[200px] rotate-12">bolt</span>
</div>
<div class="relative z-10 max-w-2xl mx-auto">
<h2 class="text-4xl md:text-5xl font-black text-white uppercase tracking-tighter mb-4 italic">Stay in the Loop</h2>
<p class="text-white/90 text-lg mb-8 font-medium">Join our inner circle for early access to the next limited release drop. Never miss a win again.</p>
<div class="flex flex-col sm:flex-row gap-3 justify-center">
<input class="px-6 py-4 rounded-lg bg-white/20 border-white/30 text-white placeholder:text-white/60 focus:ring-white focus:border-white min-w-[300px]" placeholder="Enter your email" type="email"/>
<button class="bg-white text-primary font-black px-10 py-4 rounded-lg hover:bg-zinc-100 transition-all uppercase italic">Join Now</button>
</div>
<p class="text-white/50 text-xs mt-6">By joining, you agree to receive marketing messages. Opt-out at any time.</p>
</div>
</section>
</main>
<!-- Footer -->
<footer class="border-t border-zinc-200 dark:border-zinc-800 py-12 bg-zinc-50 dark:bg-zinc-950">
<div class="max-w-[1200px] mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12">
<div class="col-span-1 md:col-span-1">
<div class="flex items-center gap-2 mb-6">
<div class="size-6 bg-primary rounded flex items-center justify-center text-white">
<span class="material-symbols-outlined text-xs">straighten</span>
</div>
<h2 class="text-lg font-black tracking-tighter uppercase italic">Jordan Boutique</h2>
</div>
<p class="text-zinc-500 text-sm leading-relaxed mb-6">Curating the world's most sought-after silhouettes for the modern collector.</p>
<div class="flex gap-4">
<a class="text-zinc-400 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">public</span></a>
<a class="text-zinc-400 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">alternate_email</span></a>
<a class="text-zinc-400 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">share</span></a>
</div>
</div>
<div>
<h4 class="font-bold uppercase text-xs tracking-widest mb-6 text-zinc-400">Shop</h4>
<ul class="space-y-4 text-sm font-medium">
<li><a class="hover:text-primary transition-colors" href="#">All Sneakers</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Latest Drops</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Cleaning Kits</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Accessories</a></li>
</ul>
</div>
<div>
<h4 class="font-bold uppercase text-xs tracking-widest mb-6 text-zinc-400">Support</h4>
<ul class="space-y-4 text-sm font-medium">
<li><a class="hover:text-primary transition-colors" href="#">Shipping Info</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Returns &amp; Exchanges</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Authentication Policy</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Sizing Guide</a></li>
</ul>
</div>
<div>
<h4 class="font-bold uppercase text-xs tracking-widest mb-6 text-zinc-400">Boutique</h4>
<ul class="space-y-4 text-sm font-medium">
<li><a class="hover:text-primary transition-colors" href="#">Our Story</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Store Locations</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Careers</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Privacy Policy</a></li>
</ul>
</div>
</div>
<div class="max-w-[1200px] mx-auto px-6 mt-16 pt-8 border-t border-zinc-200 dark:border-zinc-900 flex justify-between items-center text-xs text-zinc-500 font-medium uppercase tracking-widest">
<p>© 2024 Jordan Boutique. All rights reserved.</p>
<div class="flex gap-6">
<a href="#">Terms</a>
<a href="#">Sitemap</a>
</div>
</div>
</footer>
<!-- Floating WhatsApp Button -->
<a class="fixed bottom-8 right-8 z-50 group" href="https://wa.me/" target="_blank">
<div class="absolute -top-12 right-0 bg-white dark:bg-zinc-800 text-zinc-900 dark:text-white px-4 py-2 rounded-lg text-xs font-bold shadow-xl opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
            Chat with an expert
        </div>
<div class="size-16 bg-[#25D366] rounded-full flex items-center justify-center text-white shadow-2xl hover:scale-110 transition-transform cursor-pointer">
<svg class="size-8 fill-current" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.937 3.659 1.432 5.628 1.433h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"></path>
</svg>
</div>
</a>
</body></html>