<?php
/**
 * Template Name: Register Page
 */

if ( is_user_logged_in() ) {
    wp_redirect( home_url() );
    exit;
}

$register_error = '';
$register_success = false;

if ( isset($_POST['jordan_register_nonce']) && wp_verify_nonce($_POST['jordan_register_nonce'], 'jordan_register_action') ) {
    
    $username = sanitize_user($_POST['user_name']);
    $email    = sanitize_email($_POST['user_email']);
    $password = $_POST['user_pass'];
    $confirm  = $_POST['user_pass_confirm'];

    if ( empty($username) || empty($email) || empty($password) ) {
        $register_error = 'Please fill in all required fields.';
    } elseif ( ! is_email($email) ) {
        $register_error = 'Invalid email address.';
    } elseif ( username_exists($username) ) {
        $register_error = 'Username already exists.';
    } elseif ( email_exists($email) ) {
        $register_error = 'Email already registered.';
    } elseif ( $password !== $confirm ) {
        $register_error = 'Passwords do not match.';
    } elseif ( strlen($password) < 6 ) {
        $register_error = 'Password must be at least 6 characters.';
    } else {
        $user_id = wp_create_user($username, $password, $email);
        
        if ( is_wp_error($user_id) ) {
            $register_error = $user_id->get_error_message();
        } else {
            $register_success = true;
            // Optionally log user in immediately or redirect to login
        }
    }
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
                    <h1 class="text-3xl font-black uppercase tracking-tighter italic mb-2">Create Account</h1>
                    <p class="text-zinc-500 dark:text-zinc-400 text-sm font-medium">Join the boutique and start your collection.</p>
                </div>

                <?php if ( $register_error ) : ?>
                    <p class="bg-red-50 dark:bg-red-950/30 text-red-600 dark:text-red-400 p-4 rounded-lg text-xs font-bold mb-6 border border-red-100 dark:border-red-900/50 flex items-center gap-2">
                        <span class="material-symbols-outlined text-sm">error</span>
                        <?php echo esc_html($register_error); ?>
                    </p>
                <?php endif; ?>

                <?php if ( $register_success ) : ?>
                    <div class="bg-green-50 dark:bg-green-950/30 text-green-600 dark:text-green-400 p-6 rounded-xl text-center mb-6 border border-green-100 dark:border-green-900/50">
                        <span class="material-symbols-outlined text-4xl mb-4 block">check_circle</span>
                        <h3 class="font-bold mb-2">Registration Successful!</h3>
                        <p class="text-xs mb-6">Your account has been created. You can now log in.</p>
                        <a href="<?php echo get_permalink(get_page_by_path('login')); ?>" class="auth-btn inline-block bg-primary text-white font-black px-8 py-3 rounded-lg uppercase italic text-xs tracking-wider transition-all">
                            Go to Login
                        </a>
                    </div>
                <?php else : ?>

                <form method="post" action="<?php echo esc_url( get_permalink() ); ?>">
                    
                    <?php wp_nonce_field('jordan_register_action', 'jordan_register_nonce'); ?>

                    <div class="space-y-6">
                        <div>
                            <label for="user_name" class="block text-xs font-bold uppercase tracking-widest text-zinc-400 mb-2">Username</label>
                            <input type="text" name="user_name" id="user_name" class="auth-input w-full px-5 py-4 rounded-xl bg-zinc-50 dark:bg-zinc-800/50 border border-zinc-200 dark:border-zinc-700 text-sm font-medium" placeholder="collector_01" required value="<?php echo isset($_POST['user_name']) ? esc_attr($_POST['user_name']) : ''; ?>">
                        </div>

                        <div>
                            <label for="user_email" class="block text-xs font-bold uppercase tracking-widest text-zinc-400 mb-2">Email Address</label>
                            <input type="email" name="user_email" id="user_email" class="auth-input w-full px-5 py-4 rounded-xl bg-zinc-50 dark:bg-zinc-800/50 border border-zinc-200 dark:border-zinc-700 text-sm font-medium" placeholder="your@email.com" required value="<?php echo isset($_POST['user_email']) ? esc_attr($_POST['user_email']) : ''; ?>">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="user_pass" class="block text-xs font-bold uppercase tracking-widest text-zinc-400 mb-2">Password</label>
                                <input type="password" name="user_pass" id="user_pass" class="auth-input w-full px-5 py-4 rounded-xl bg-zinc-50 dark:bg-zinc-800/50 border border-zinc-200 dark:border-zinc-700 text-sm font-medium" placeholder="••••••••" required>
                            </div>
                            <div>
                                <label for="user_pass_confirm" class="block text-xs font-bold uppercase tracking-widest text-zinc-400 mb-2">Confirm</label>
                                <input type="password" name="user_pass_confirm" id="user_pass_confirm" class="auth-input w-full px-5 py-4 rounded-xl bg-zinc-50 dark:bg-zinc-800/50 border border-zinc-200 dark:border-zinc-700 text-sm font-medium" placeholder="••••••••" required>
                            </div>
                        </div>

                        <div class="text-[10px] text-zinc-500 font-medium leading-relaxed">
                            By clicking Register, you agree to our 
                            <a href="<?php echo get_permalink(get_page_by_path('privacy-policy')); ?>" class="text-primary hover:underline">Terms of Service</a> and 
                            <a href="<?php echo get_permalink(get_page_by_path('privacy-policy')); ?>" class="text-primary hover:underline">Privacy Policy</a>.
                        </div>

                        <button type="submit" class="auth-btn w-full bg-primary text-white font-black py-4 rounded-xl uppercase italic tracking-wider transition-all mt-4">
                            Register Now
                        </button>
                    </div>

                </form>

                <?php endif; ?>

            </div>

            <?php if ( ! $register_success ) : ?>
            <div class="px-8 py-6 bg-zinc-50 dark:bg-zinc-800/30 border-t border-zinc-100 dark:border-zinc-800 text-center">
                <p class="text-sm text-zinc-500 dark:text-zinc-400 font-medium">
                    Already have an account? 
                    <a href="<?php echo get_permalink(get_page_by_path('login')); ?>" class="text-primary font-bold hover:underline">Sign in</a>
                </p>
            </div>
            <?php endif; ?>

        </div>

    </div>

</main>

<?php get_footer(); ?>
