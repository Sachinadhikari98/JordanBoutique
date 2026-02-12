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