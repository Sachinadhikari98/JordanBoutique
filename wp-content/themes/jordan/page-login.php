<?php
/**
 * Template Name: Login Page
 */

if ( is_user_logged_in() ) {
    wp_redirect( home_url() );
    exit;
}

get_header(); ?>

<main class="min-h-[80vh] flex items-center justify-center px-6 py-20 relative overflow-hidden">
    
    <!-- Background Decor -->
    <div class="absolute top-1/4 -left-20 size-96 bg-primary/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-1/4 -right-20 size-96 bg-primary/5 rounded-full blur-3xl"></div>

    <div class="auth-card w-full max-w-md relative z-10">
        
        <div class="bg-white dark:bg-zinc-900 rounded-2xl shadow-2xl overflow-hidden border border-zinc-100 dark:border-zinc-800">
            
            <div class="p-8 md:p-10">
                
                <div class="text-center mb-10">
                    <h1 class="text-3xl font-black uppercase tracking-tighter italic mb-2">Welcome Back</h1>
                    <p class="text-zinc-500 dark:text-zinc-400 text-sm font-medium">Log in to your account to manage your grails.</p>
                </div>

                <?php 
                if ( isset($_GET['login']) && $_GET['login'] == 'failed' ) {
                    echo '<p class="bg-red-50 dark:bg-red-950/30 text-red-600 dark:text-red-400 p-4 rounded-lg text-xs font-bold mb-6 border border-red-100 dark:border-red-900/50 flex items-center gap-2">
                        <span class="material-symbols-outlined text-sm">error</span>
                        Invalid username or password. Please try again.
                    </p>';
                }
                ?>

                <form name="loginform" id="loginform" action="<?php echo esc_url( site_url( 'wp-login.php', 'login_post' ) ); ?>" method="post">
                    
                    <div class="space-y-6">
                        <div>
                            <label for="user_login" class="block text-xs font-bold uppercase tracking-widest text-zinc-400 mb-2">Username or Email</label>
                            <input type="text" name="log" id="user_login" class="auth-input w-full px-5 py-4 rounded-xl bg-zinc-50 dark:bg-zinc-800/50 border border-zinc-200 dark:border-zinc-700 text-sm font-medium" placeholder="your@email.com" required>
                        </div>

                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <label for="user_pass" class="block text-xs font-bold uppercase tracking-widest text-zinc-400">Password</label>
                                <a href="<?php echo wp_lostpassword_url(); ?>" class="text-[10px] font-bold uppercase tracking-widest text-primary hover:underline">Forgot?</a>
                            </div>
                            <input type="password" name="pwd" id="user_pass" class="auth-input w-full px-5 py-4 rounded-xl bg-zinc-50 dark:bg-zinc-800/50 border border-zinc-200 dark:border-zinc-700 text-sm font-medium" placeholder="••••••••" required>
                        </div>

                        <div class="flex items-center gap-2">
                            <input name="rememberme" type="checkbox" id="rememberme" value="forever" class="rounded border-zinc-300 dark:border-zinc-700 text-primary focus:ring-primary size-4">
                            <label for="rememberme" class="text-sm text-zinc-500 dark:text-zinc-400 font-medium">Remember me</label>
                        </div>

                        <button type="submit" name="wp-submit" id="wp-submit" class="auth-btn w-full bg-primary text-white font-black py-4 rounded-xl uppercase italic tracking-wider transition-all">
                            Sign In
                        </button>
                    </div>

                    <input type="hidden" name="redirect_to" value="<?php echo home_url(); ?>">
                </form>

            </div>

            <div class="px-8 py-6 bg-zinc-50 dark:bg-zinc-800/30 border-t border-zinc-100 dark:border-zinc-800 text-center">
                <p class="text-sm text-zinc-500 dark:text-zinc-400 font-medium">
                    Don't have an account? 
                    <a href="<?php echo get_permalink(get_page_by_path('register')); ?>" class="text-primary font-bold hover:underline">Create one</a>
                </p>
            </div>

        </div>

    </div>

</main>

<?php get_footer(); ?>
