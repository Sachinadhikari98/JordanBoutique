<?php
/**
 * Template Name: Profile Page
 */

if ( ! is_user_logged_in() ) {
    wp_redirect( get_permalink( get_page_by_path('login') ) );
    exit;
}

$current_user = wp_get_current_user();
$join_date = date('F Y', strtotime($current_user->user_registered));

get_header(); ?>

<main class="min-h-[80vh] px-6 py-12 md:py-20">
    
    <div class="max-w-[1200px] mx-auto">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Sidebar / Stats -->
            <div class="lg:col-span-4 space-y-8">
                
                <div class="reveal-on-scroll bg-white dark:bg-zinc-900 rounded-3xl p-10 border border-zinc-100 dark:border-zinc-800 shadow-xl shadow-zinc-200/50 dark:shadow-none text-center">
                    
                    <div class="size-32 bg-primary/10 rounded-full flex items-center justify-center text-primary mx-auto mb-6 border-4 border-white dark:border-zinc-800 shadow-lg">
                        <span class="material-symbols-outlined text-6xl">person</span>
                    </div>

                    <h1 class="text-3xl font-black uppercase tracking-tighter italic mb-1">
                        <?php echo esc_html($current_user->display_name); ?>
                    </h1>
                    <p class="text-zinc-500 font-bold text-xs uppercase tracking-widest mb-6 italic">
                        Elite Collector
                    </p>

                    <div class="flex justify-center gap-4 pt-6 border-t border-zinc-100 dark:border-zinc-800">
                        <div class="text-center">
                            <span class="block text-xl font-black italic">12</span>
                            <span class="text-[10px] uppercase tracking-widest text-zinc-400 font-bold">Grails</span>
                        </div>
                        <div class="w-px h-8 bg-zinc-100 dark:border-zinc-800 self-center"></div>
                        <div class="text-center">
                            <span class="block text-xl font-black italic">3</span>
                            <span class="text-[10px] uppercase tracking-widest text-zinc-400 font-bold">Drops</span>
                        </div>
                    </div>

                </div>

                <div class="reveal-on-scroll reveal-delay-1 bg-zinc-900 border border-zinc-800 rounded-3xl p-8 text-white">
                    <h3 class="text-sm font-black uppercase tracking-widest italic mb-6 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">verified</span>
                        Database Verified
                    </h3>
                    <ul class="space-y-4">
                        <li class="flex justify-between items-center text-xs">
                            <span class="text-zinc-500 uppercase tracking-widest font-bold">Username</span>
                            <span class="font-bold"><?php echo esc_html($current_user->user_login); ?></span>
                        </li>
                        <li class="flex justify-between items-center text-xs">
                            <span class="text-zinc-500 uppercase tracking-widest font-bold">Email</span>
                            <span class="font-bold"><?php echo esc_html($current_user->user_email); ?></span>
                        </li>
                        <li class="flex justify-between items-center text-xs">
                            <span class="text-zinc-500 uppercase tracking-widest font-bold">Member Since</span>
                            <span class="font-bold"><?php echo esc_html($join_date); ?></span>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Main Content Area -->
            <div class="lg:col-span-8 space-y-12">
                
                <!-- Welcome Section -->
                <div class="reveal-on-scroll reveal-delay-2 p-10 bg-primary rounded-3xl text-white relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4 opacity-10">
                        <span class="material-symbols-outlined text-[150px] rotate-12">bolt</span>
                    </div>
                    <div class="relative z-10 max-w-lg">
                        <h2 class="text-4xl font-black uppercase tracking-tighter italic mb-4">Welcome to the Lab, <?php echo esc_html($current_user->first_name ? : $current_user->display_name); ?>.</h2>
                        <p class="text-white/80 font-medium mb-8">This is your private vault. From here you can track your orders, manage your notification preferences, and get early access to exclusive drops.</p>
                        <a href="<?php echo home_url(); ?>" class="inline-block bg-white text-primary font-black px-10 py-4 rounded-xl uppercase italic tracking-wider hover:bg-zinc-100 transition-all">
                            Browse Collection
                        </a>
                    </div>
                </div>

                <!-- Collection Placeholder -->
                <div class="reveal-on-scroll reveal-delay-3">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h2 class="text-2xl font-black uppercase tracking-tighter italic">My Collection</h2>
                            <div class="h-1 w-12 bg-primary mt-2"></div>
                        </div>
                        <button class="text-xs font-bold uppercase tracking-widest text-zinc-400 hover:text-primary transition-colors">View All</button>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="aspect-square bg-zinc-100 dark:bg-zinc-900 rounded-3xl flex items-center justify-center border-2 border-dashed border-zinc-200 dark:border-zinc-800 group hover:border-primary transition-colors cursor-pointer">
                            <div class="text-center group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-4xl text-zinc-300 dark:text-zinc-700 mb-2">add_circle</span>
                                <span class="block text-[10px] font-bold uppercase tracking-widest text-zinc-400">Add First Grail</span>
                            </div>
                        </div>
                        <div class="aspect-square bg-zinc-50 dark:bg-zinc-800/20 rounded-3xl border border-zinc-100 dark:border-zinc-800 flex items-center justify-center opacity-50 grayscale">
                             <span class="material-symbols-outlined text-zinc-200 dark:text-zinc-800 text-6xl">shopping_bag</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</main>

<?php get_footer(); ?>
