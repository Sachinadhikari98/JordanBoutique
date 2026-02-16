<!-- <!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Contact &amp; Location Map | Flight Lab Sneakers</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f20d0d",
                        "background-light": "#f8f5f5",
                        "background-dark": "#121212",
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
        body {
            font-family: 'Lexend', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white transition-colors duration-300">
<div class="relative flex min-h-screen flex-col overflow-x-hidden">
 Top Navigation -->
<!-- <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-zinc-800 px-10 py-4 bg-background-light dark:bg-background-dark sticky top-0 z-50">
<div class="flex items-center gap-4">
<div class="size-8 text-primary">
<svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M44 11.2727C44 14.0109 39.8386 16.3957 33.69 17.6364C39.8386 18.877 44 21.2618 44 24C44 26.7382 39.8386 29.123 33.69 30.3636C39.8386 31.6043 44 33.9891 44 36.7273C44 40.7439 35.0457 44 24 44C12.9543 44 4 40.7439 4 36.7273C4 33.9891 8.16144 31.6043 14.31 30.3636C8.16144 29.123 4 26.7382 4 24C4 21.2618 8.16144 18.877 14.31 17.6364C8.16144 16.3957 4 14.0109 4 11.2727C4 7.25611 12.9543 4 24 4C35.0457 4 44 7.25611 44 11.2727Z"></path>
</svg>
</div>
<h2 class="text-xl font-black leading-tight tracking-[-0.015em]">FLIGHT LAB</h2>
</div>
<div class="flex flex-1 justify-end gap-8">
<nav class="hidden md:flex items-center gap-9">
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Shop</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">New Arrivals</a>
<a class="text-sm font-medium hover:text-primary transition-colors" href="#">Release Calendar</a>
<a class="text-sm font-bold text-primary" href="#">Contact</a>
</nav>
<div class="flex gap-2">
<button class="flex size-10 items-center justify-center rounded-lg bg-zinc-200 dark:bg-zinc-800 hover:bg-zinc-300 dark:hover:bg-zinc-700 transition-colors">
<span class="material-symbols-outlined">shopping_cart</span>
</button>
<button class="flex size-10 items-center justify-center rounded-lg bg-zinc-200 dark:bg-zinc-800 hover:bg-zinc-300 dark:hover:bg-zinc-700 transition-colors">
<span class="material-symbols-outlined">person</span>
</button>
</div>
</div>
</header> --> 
<?php get_header(); ?>
<main class="flex-1">
<!-- Page Heading -->
<div class="mx-auto max-w-[1200px] px-6 pt-10 pb-6">
<div class="flex flex-col gap-3">
<h1 class="text-4xl md:text-5xl font-black leading-tight tracking-tight">Visit the Lab</h1>
<p class="text-slate-500 dark:text-zinc-400 text-lg max-w-2xl font-normal">Connect with our sneaker specialists or visit our Chicago flagship store. We're here to help you secure the latest heat.</p>
</div>
</div>
<!-- Main Content Grid -->
<div class="mx-auto max-w-[1200px] px-6 py-5 grid grid-cols-1 lg:grid-cols-2 gap-8 items-start mb-20">
<!-- Left: Map Section -->
<div class="flex flex-col gap-4 h-full">
<div class="relative w-full h-[500px] rounded-xl overflow-hidden border border-zinc-200 dark:border-zinc-800 shadow-xl">
<!-- Simulated Map Background -->
<div class="absolute inset-0 bg-zinc-300 dark:bg-zinc-900 bg-cover bg-center flex flex-col justify-between p-6" data-alt="Dark themed city map showing Chicago streets" data-location="Chicago, IL" style='background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.2)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAJX6Kf--Rp7lzkxN9CQAUd01DtnPYCwk3ul8bRNwfcovgfjbwBQ5rHOxGl8JpkoKoSgpPUUmy3WphQobphKr-ma0jJHnG_HhXpfnuuxHHQSBasnQhhfbuyspJ91gfgfbHopEIkdo8t_iyL5RQ_jNGVjjF_qoW9o9rDlyqC2KT5j4UYUm1p0mhqdvmpZOPp3wzH14QCHdSek2qnzDqTYHSBLe-8-70TcyzhrEz5v8dH9F-nEhbDSgEH-GUMV0o7TOhkSndOQyQpmfs");'>
<!-- Map Search Overlay -->
<div class="flex w-full max-w-sm">
<div class="flex w-full items-stretch rounded-lg overflow-hidden bg-white/95 dark:bg-zinc-900/95 backdrop-blur shadow-lg h-12">
<div class="flex items-center justify-center pl-4">
<span class="material-symbols-outlined text-zinc-500">search</span>
</div>
<input class="w-full border-none bg-transparent focus:ring-0 text-sm font-medium px-4" placeholder="Find our store" value="23 Jumpman St, Chicago, IL"/>
</div>
</div>
<!-- Map Controls -->
<div class="flex flex-col items-end gap-3 self-end">
<div class="flex flex-col gap-0.5 shadow-lg rounded-lg overflow-hidden">
<button class="flex size-10 items-center justify-center bg-white dark:bg-zinc-900 hover:bg-zinc-100 dark:hover:bg-zinc-800">
<span class="material-symbols-outlined text-sm">add</span>
</button>
<button class="flex size-10 items-center justify-center bg-white dark:bg-zinc-900 hover:bg-zinc-100 dark:hover:bg-zinc-800">
<span class="material-symbols-outlined text-sm">remove</span>
</button>
</div>
<button class="flex size-10 items-center justify-center rounded-lg bg-primary text-white shadow-lg hover:brightness-110 transition-all">
<span class="material-symbols-outlined">navigation</span>
</button>
</div>
<!-- Custom Pin Marker -->
<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 group">
<div class="relative flex flex-col items-center">
<div class="absolute -top-16 bg-white dark:bg-zinc-800 px-3 py-1.5 rounded-lg text-xs font-bold shadow-xl whitespace-nowrap border border-primary">
                                        Flight Lab Flagship
                                    </div>
<span class="material-symbols-outlined text-primary text-5xl drop-shadow-[0_4px_4px_rgba(0,0,0,0.5)]" style="font-variation-settings: 'FILL' 1;">location_on</span>
</div>
</div>
</div>
</div>
<!-- Location Info Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2">
<div class="p-5 rounded-xl bg-zinc-100 dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800">
<h3 class="font-bold text-lg mb-2 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">store</span> Store Address
                            </h3>
<p class="text-zinc-600 dark:text-zinc-400 text-sm leading-relaxed">
                                23 Jumpman Street<br/>
                                Chicago, IL 60601<br/>
                                United States
                            </p>
</div>
<div class="p-5 rounded-xl bg-zinc-100 dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800">
<h3 class="font-bold text-lg mb-2 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">schedule</span> Hours
                            </h3>
<ul class="text-zinc-600 dark:text-zinc-400 text-sm space-y-1">
<li class="flex justify-between"><span>Mon - Sat</span> <span>10am - 8pm</span></li>
<li class="flex justify-between"><span>Sunday</span> <span>12pm - 6pm</span></li>
</ul>
</div>
</div>
</div>
<!-- Right: Contact Form -->
<div class="flex flex-col gap-6 bg-zinc-100 dark:bg-zinc-900/50 p-8 rounded-2xl border border-zinc-200 dark:border-zinc-800 shadow-sm">
<div>
<h2 class="text-2xl font-bold mb-2">Send us a Message</h2>
<p class="text-zinc-500 dark:text-zinc-400 text-sm">Have a question about a release or an order? Drop us a line.</p>
</div>
<form class="flex flex-col gap-4">
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<label class="flex flex-col gap-2">
<span class="text-sm font-semibold pl-1">Full Name</span>
<input class="w-full rounded-lg bg-white dark:bg-zinc-800 border-zinc-300 dark:border-zinc-700 focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 transition-all" placeholder="Michael Jordan" type="text"/>
</label>
<label class="flex flex-col gap-2">
<span class="text-sm font-semibold pl-1">Email Address</span>
<input class="w-full rounded-lg bg-white dark:bg-zinc-800 border-zinc-300 dark:border-zinc-700 focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 transition-all" placeholder="mj@flightlab.com" type="email"/>
</label>
</div>
<label class="flex flex-col gap-2">
<span class="text-sm font-semibold pl-1">Subject</span>
<select class="w-full rounded-lg bg-white dark:bg-zinc-800 border-zinc-300 dark:border-zinc-700 focus:border-primary focus:ring-1 focus:ring-primary h-12 px-4 transition-all">
<option>Order Status Inquiry</option>
<option>Release Information</option>
<option>Authenticity Guarantee</option>
<option>Sell Your Sneakers</option>
<option>Other</option>
</select>
</label>
<label class="flex flex-col gap-2">
<span class="text-sm font-semibold pl-1">Message</span>
<textarea class="w-full rounded-lg bg-white dark:bg-zinc-800 border-zinc-300 dark:border-zinc-700 focus:border-primary focus:ring-1 focus:ring-primary min-h-[150px] p-4 transition-all" placeholder="Tell us how we can help..."></textarea>
</label>
<button class="mt-4 w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 rounded-xl shadow-lg shadow-primary/20 transition-all active:scale-[0.98]" type="submit">
                            Send Message
                        </button>
</form>
<!-- Contact Footer & Socials -->
<div class="mt-4 pt-6 border-t border-zinc-200 dark:border-zinc-800 flex flex-col md:flex-row justify-between items-center gap-6">
<div class="flex flex-col gap-1 text-center md:text-left">
<p class="text-xs uppercase font-bold text-zinc-400 tracking-widest">Direct Line</p>
<a class="text-lg font-bold hover:text-primary transition-colors" href="tel:+13125550023">+1 (312) 555-0023</a>
</div>
<div class="flex flex-col gap-3">
<p class="text-xs uppercase font-bold text-zinc-400 tracking-widest text-center">Follow the Culture</p>
<div class="flex gap-4">
<a class="size-10 flex items-center justify-center rounded-full bg-zinc-200 dark:bg-zinc-800 hover:bg-primary hover:text-white transition-all" href="#">
<svg class="size-5" fill="currentColor" viewbox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.791-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.209-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.441 1.441 1.441c.795 0 1.439-.645 1.439-1.441s-.644-1.44-1.439-1.44z"></path></svg>
</a>
<a class="size-10 flex items-center justify-center rounded-full bg-zinc-200 dark:bg-zinc-800 hover:bg-primary hover:text-white transition-all" href="#">
<svg class="size-5" fill="currentColor" viewbox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.84 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"></path></svg>
</a>
<a class="size-10 flex items-center justify-center rounded-full bg-zinc-200 dark:bg-zinc-800 hover:bg-primary hover:text-white transition-all" href="#">
<svg class="size-5" fill="currentColor" viewbox="0 0 24 24"><path d="M12.525.023C5.606.023 0 5.629 0 12.548c0 6.919 5.606 12.525 12.525 12.525s12.525-5.606 12.525-12.525C25.05 5.629 19.444.023 12.525.023zm0 2.163c5.717 0 10.362 4.645 10.362 10.362s-4.645 10.362-10.362 10.362S2.163 18.265 2.163 12.548 6.808 2.186 12.525 2.186zm-2.162 4.325v12.075l7.775-6.037-7.775-6.038z"></path></svg>
</a>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- Floating WhatsApp Button -->
<div class="fixed bottom-8 right-8 z-[100] group">
<div class="absolute inset-0 bg-green-500 rounded-full blur-xl opacity-20 group-hover:opacity-40 transition-opacity"></div>
<button class="relative flex items-center gap-3 bg-green-500 hover:bg-green-600 text-white px-5 py-3 rounded-full shadow-2xl transition-all hover:scale-105">
<div class="size-6 flex items-center justify-center">
<svg fill="currentColor" viewbox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"></path></svg>
</div>
<span class="font-bold text-sm">Chat with a Specialist</span>
</button>
</div>
<!-- Minimal Footer -->
<footer class="mt-auto border-t border-zinc-200 dark:border-zinc-800 py-8 text-center text-zinc-500 dark:text-zinc-500 text-xs">
<p>© 2024 Flight Lab Sneakers. All Rights Reserved. Not affiliated with Nike Inc.</p>
</footer>
</div>
</body></html>