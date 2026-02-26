<?php get_header(); ?>

<main class="max-w-[1440px] mx-auto px-4 lg:px-20 py-8">
    <section class="mb-12">
        <div class="flex flex-col gap-2">
            <div class="flex items-center gap-2 text-xs font-bold text-primary uppercase tracking-widest">
                <span>Authentic</span>
                <span class="w-1 h-1 bg-white/20 rounded-full"></span>
                <span>Curated</span>
                <span class="w-1 h-1 bg-white/20 rounded-full"></span>
                <span>Exclusive</span>
            </div>
            <h2 class="text-4xl md:text-6xl font-black tracking-tight uppercase italic">The Mid Collection</h2>
            <p class="text-white/60 max-w-2xl text-lg">Explore our curated selection of Jordan Mids.</p>
        </div>
    </section>

    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'meta_query' => array(
                array(
                    'key' => 'shoe_category',
                    'value' => 'mids',
                    'compare' => '='
                )
            )
        );
        $query = new WP_Query($args);
        if ($query->have_posts()):
            while ($query->have_posts()): $query->the_post();
                $name = get_post_meta(get_the_ID(),'shoe_name',true);
                $price = get_post_meta(get_the_ID(),'shoe_price',true);
                $img_id = get_post_meta(get_the_ID(),'shoe_image',true);
                $img_url = wp_get_attachment_url($img_id);
        ?>
        <div class="group relative bg-white/5 rounded-xl overflow-hidden border border-white/5 hover:border-primary/50 transition-all duration-300">
            <div class="relative aspect-square overflow-hidden bg-[#1a1a1a]">
                <img class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110" src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($name); ?>"/>
                <button class="absolute bottom-4 right-4 translate-y-12 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300 bg-white text-black p-3 rounded-full flex items-center justify-center shadow-2xl">
                    <span class="material-symbols-outlined">add_shopping_cart</span>
                </button>
            </div>
            <div class="p-5">
                <div class="flex justify-between items-start mb-1">
                    <h3 class="font-bold text-lg group-hover:text-primary transition-colors"><?php echo esc_html($name); ?></h3>
                    <span class="font-black text-primary">$<?php echo esc_html($price); ?></span>
                </div>
            </div>
        </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else:
            echo "<p class='text-white'>No mids found.</p>";
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>