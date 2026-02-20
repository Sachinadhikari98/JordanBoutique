<?php get_header(); ?>
<main class="pt-16">
    <!-- Hero Section -->
    <section class="relative h-[80vh] flex flex-col items-center justify-center px-4">
        <div class="absolute inset-0 z-0">
            <div class="w-full h-full bg-cover bg-center bg-no-repeat" data-alt="Close up of a classic red and white sneaker wing logo" style='background-image: linear-gradient(rgba(24, 17, 17, 0.7) 0%, rgba(24, 17, 17, 0.9) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuB6cmgte-3Z7Ct901lIM20B0vF43jaAHrQ70wuiy55uv_H5fcSN_VkVoRz8Kub_ZphpkhZdQrVNyp2OctMQ6FzMy-23l6aEy0uWri1NQLj8RjdExn_S3gfdgq_czKBZrziLvvD-eseWvLRMCKGvYHdtlm2L7yU9P3jec1SnVzQ2DorVB53qJDBObpZlpg2XeanV8sMqUug64Kc1QhT5Mlc8fFRNOEkG_9PJdyQc-QqSu-Qfm_4i2JaTip0aKvR50mSH1dHRrpUjOII");'>
            </div>
        </div>
        <div class="relative z-10 text-center max-w-[800px] animate-fade-in">
            <h1 class="text-white text-5xl md:text-7xl font-black leading-tight tracking-tight mb-6">
                OUR SNEAKER STORY
            </h1>
            <p class="text-white/80 text-lg md:text-xl font-light leading-relaxed mb-8 max-w-2xl mx-auto">
                How a lifelong obsession with the Jumpman evolved from a bedroom collection to the city's premier sneaker destination.
            </p>
            <a href="<?php echo get_permalink(get_page_by_path('categories')); ?>"
                class="bg-primary hover:bg-primary/90 text-white px-8 py-4 rounded-lg font-bold tracking-wide transition-all transform hover:scale-105 inline-block">
                VIEW THE COLLECTION
            </a>
        </div>
    </section>
    <!-- The Legend Intro -->
    <section class="py-20 px-4 md:px-20 lg:px-40 max-w-[1200px] mx-auto text-center">
        <h2 class="text-primary text-sm font-bold tracking-[0.3em] uppercase mb-4">The Jumpman Legacy</h2>
        <h3 class="text-3xl md:text-5xl font-bold mb-8 dark:text-white">More Than Just Footwear</h3>
        <p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed max-w-3xl mx-auto">
            In 1985, a single pair of shoes changed everything. For us, the Air Jordan line represents more than athletic excellence—it’s a symbol of culture, defiance, and the relentless pursuit of greatness. We don't just sell sneakers; we preserve history.
        </p>
    </section>
    <!-- Narrative Section 1 -->
    <section class="py-12 px-4 md:px-20 lg:px-40 max-w-[1200px] mx-auto grid md:grid-cols-2 gap-12 items-center">
        <div class="order-2 md:order-1">
            <div class="aspect-[4/5] rounded-xl overflow-hidden bg-slate-200 dark:bg-zinc-800">
                <div class="w-full h-full bg-cover bg-center" data-alt="A shelf filled with vintage sneaker boxes" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA0LMZMHhqm5i93TeFZBsnOPDi4bLu1o7Ozkd1MGfCwfIkb29Cnvof4KqSgdqMEI256JK4a_q8h53z3KYcBn6-93VLGdRgkOmtPfUc1MSKUY6yhZZs_uRlIyR025IMvSrAiDfv8wdEaR0A8H2YwX9zvyMg3dz192kc8WoiXaOjH4vdr6sylCudCYWPppo2gprodPY8ebZud0hSfObI133PGEQMkdJV7wOvMFglSjbDaP8qsMI4qApCrM3Sv_B2Iz0g5Etvvn58bxxs");'>
                </div>
            </div>
        </div>
        <div class="order-1 md:order-2 space-y-6">
            <span class="text-primary font-bold text-4xl opacity-20">01</span>
            <h3 class="text-3xl font-bold dark:text-white">The Collector's Soul</h3>
            <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                Our founder, Alex J., started with a single pair of "Bred" 1s. That spark ignited a decade-long journey of hunting through flea markets, early internet forums, and backrooms of mom-and-pop shops to find the rarest silhouettes ever created.
            </p>
            <div class="p-6 border-l-2 border-primary bg-slate-100 dark:bg-[#392828]/30">
                <p class="italic text-slate-700 dark:text-slate-300">
                    "Every sneaker has a soul. The crease on the toe box, the yellowing of the sole—it's all part of the narrative."
                </p>
            </div>
        </div>
    </section>
    <!-- Narrative Section 2 -->
    <section class="py-12 px-4 md:px-20 lg:px-40 max-w-[1200px] mx-auto grid md:grid-cols-2 gap-12 items-center">
        <div class="space-y-6">
            <span class="text-primary font-bold text-4xl opacity-20">02</span>
            <h3 class="text-3xl font-bold dark:text-white">Authentication First</h3>
            <p class="text-slate-600 dark:text-slate-400 leading-relaxed">
                In an era of replicas, we pride ourselves on a rigorous 40-point inspection process. Every stitch, scent, and texture is verified by our in-house experts who have handled over 50,000 pairs of Jordans throughout their careers.
            </p>
            <ul class="space-y-3">
                <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                    <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                    Verified Origin Sourcing
                </li>
                <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                    <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                    UV Light Inspection
                </li>
                <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                    <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                    Original Box &amp; Accessories Verification
                </li>
            </ul>
        </div>
        <div>
            <div class="aspect-[4/3] rounded-xl overflow-hidden bg-slate-200 dark:bg-zinc-800">
                <div class="w-full h-full bg-cover bg-center" data-alt="Expert hand inspecting a sneaker with a magnifying glass" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAyQPvW4emRrVIpehxzYEF4wyDdfnIPgYfDkuS7IT3CtQXJLT925gtHizwOhnfMEnWcwdVupIkW5SWpbUhZTB5M7WhLpkKx36xNEwvQnraNg5ytESqIUdxO6FLuz2gaznSkUugnJI6lRxve26B98Q1sbJ4cJuTzHodvpNwUXy324bWB7cJYiavnMGfh7fplSWZyTjCcm6GZUg3aXnMC2NOrzUGIkk_k0LWldvjqbbw_JxUqj2HP8j5a-8q59K0pYn8gw6yBTyKXUU8");'>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section -->
    <section class="py-24 bg-slate-100 dark:bg-black/20">
        <div class="max-w-[1200px] mx-auto px-4 md:px-20">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4 dark:text-white">The Collective</h2>
                <p class="text-slate-600 dark:text-slate-400">The minds behind the boutique.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white dark:bg-[#221010] p-6 rounded-xl shadow-lg border border-slate-200 dark:border-[#392828] group">
                    <div class="size-24 rounded-full overflow-hidden mb-6 mx-auto border-4 border-primary/20 group-hover:border-primary transition-colors">
                        <div class="w-full h-full bg-cover bg-center" data-alt="Professional portrait of founder Alex" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC-aRBlWcquntn2wCeMx_TR3Q-wfGFa_mg_Tn5bpduKiGkGUMzPFwjubbnAafmGocWOcswLFdt3BxTjbud4LTsDkpVl-p2L5swUuAQCgIU_hdx7HMGoZZ1JjUmxsfGwzBLqD04y1Ni-0QsPnw591e6QRB_InLflGaErkc0dh7XQUA3GMVcPu8i_S4H7FeHvOAAYaEvcEGLY_M0VipZVRs8wlIuUiJR9dbJdZB7CBQHF9n8XMIrF7covtd9MAlTY3sj6iwhbPnIT9tk");'>
                        </div>
                    </div>
                    <div class="text-center">
                        <h4 class="font-bold text-xl mb-1 dark:text-white">Alex J.</h4>
                        <p class="text-primary text-sm font-medium mb-4 uppercase tracking-wider">Founder &amp; Head Curator</p>
                        <div class="flex items-center justify-center gap-2 bg-slate-50 dark:bg-black/30 py-2 px-4 rounded-full border border-slate-100 dark:border-white/5">
                            <span class="text-[10px] font-bold text-slate-400 uppercase">FAVORITE GRAIL</span>
                            <span class="text-xs font-bold dark:text-white">1985 Chicago 1s</span>
                        </div>
                    </div>
                </div>
                <!-- Team Member 2 -->
                <div class="bg-white dark:bg-[#221010] p-6 rounded-xl shadow-lg border border-slate-200 dark:border-[#392828] group">
                    <div class="size-24 rounded-full overflow-hidden mb-6 mx-auto border-4 border-primary/20 group-hover:border-primary transition-colors">
                        <div class="w-full h-full bg-cover bg-center" data-alt="Professional portrait of head of authentication Sarah" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD-yy0s-gDyQKEAxhIeJ1Asb7nggs6MloPUpChQ5jUuQL9lUuAEESpPV4mvpm5pr3SzQ9v4XfKj5xFz1AO-z0Z0srV6xmQldP1uQiFSpn5tGAsASwqc3iTPmKQiWw5Ix2otEmX1tK7LSppNHKIv3jytVh8KJ0wjNJvJdLMyhHHXB6bM-e6kETxrMGh5_6mo9RdTd42i7B246uQ602b7nSfbbW7CnhvBsnovXAIqmmUKDdCQAcyUBygxwqsjb9tS7iB6b9PtwJjliAo");'>
                        </div>
                    </div>
                    <div class="text-center">
                        <h4 class="font-bold text-xl mb-1 dark:text-white">Sarah Chen</h4>
                        <p class="text-primary text-sm font-medium mb-4 uppercase tracking-wider">Authentication Lead</p>
                        <div class="flex items-center justify-center gap-2 bg-slate-50 dark:bg-black/30 py-2 px-4 rounded-full border border-slate-100 dark:border-white/5">
                            <span class="text-[10px] font-bold text-slate-400 uppercase">FAVORITE GRAIL</span>
                            <span class="text-xs font-bold dark:text-white">AJ4 "Black Cat"</span>
                        </div>
                    </div>
                </div>
                <!-- Team Member 3 -->
                <div class="bg-white dark:bg-[#221010] p-6 rounded-xl shadow-lg border border-slate-200 dark:border-[#392828] group">
                    <div class="size-24 rounded-full overflow-hidden mb-6 mx-auto border-4 border-primary/20 group-hover:border-primary transition-colors">
                        <div class="w-full h-full bg-cover bg-center" data-alt="Professional portrait of sourcing manager Marcus" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBDGvEHMDoN2i11Wrvl-fKwRnlMDTFozUAQKrfRHig2DRLmbG7Ss2aL4kjGG96g-IOMX7-uZIDTNLd3Ar7wxFSe2pgRSL26U99IV8p8UFKjZtVOtGgoH3QGPQA02Xxc3IITUFa1Gv5GLcG0sJXUOfEbv7aSAEx5vgRdQs6lkWk1FI80QKobEPV8qgw0aDjO-ogIIOe29qkDvvfovIecIZ8R-g2ZVAIOZ6G1EW9vf9qzAZ3OwcnKHIq8K43u0LLzXnK5WNS-B1b_EMs");'>
                        </div>
                    </div>
                    <div class="text-center">
                        <h4 class="font-bold text-xl mb-1 dark:text-white">Marcus Reed</h4>
                        <p class="text-primary text-sm font-medium mb-4 uppercase tracking-wider">Global Sourcing</p>
                        <div class="flex items-center justify-center gap-2 bg-slate-50 dark:bg-black/30 py-2 px-4 rounded-full border border-slate-100 dark:border-white/5">
                            <span class="text-[10px] font-bold text-slate-400 uppercase">FAVORITE GRAIL</span>
                            <span class="text-xs font-bold dark:text-white">AJ11 "Concord"</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Final Call to Action -->
    <section class="py-24 text-center bg-primary text-white">
        <div class="max-w-2xl mx-auto px-4">
            <h2 class="text-4xl font-black mb-6">READY TO FIND YOURS?</h2>
            <p class="text-white/80 mb-10 text-lg">Every great story starts with the first step. Take yours in a pair that defines an era.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-primary hover:bg-slate-100 px-10 py-4 rounded-lg font-bold transition-all">
                    SHOP ALL RELEASES
                </button>
                <button class="bg-transparent border-2 border-white/30 hover:border-white text-white px-10 py-4 rounded-lg font-bold transition-all">
                    TALK TO A CURATOR
                </button>
            </div>
        </div>
    </section>
</main>
<!-- Footer -->
<?php get_footer(); ?>