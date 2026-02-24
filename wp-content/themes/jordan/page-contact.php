<?php get_header(); ?>

<main class="flex-1">

<!-- Page Heading -->
<div class="mx-auto max-w-[1200px] px-6 pt-10 pb-6">
    <div class="flex flex-col gap-3">
        <h1 class="text-4xl md:text-5xl font-black leading-tight tracking-tight">
            Visit the Lab
        </h1>
        <p class="text-slate-500 dark:text-zinc-400 text-lg max-w-2xl font-normal">
            Visit our flagship location or explore us on the map below.
        </p>
    </div>
</div>

<!-- Content Section -->
<div class="mx-auto max-w-[1200px] px-6 py-5 mb-20">

    <div class="flex flex-col gap-6">

        <!-- Google Map -->
        <div class="relative w-full h-[500px] rounded-xl overflow-hidden border border-zinc-200 dark:border-zinc-800 shadow-xl">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.501455642812!2d85.28061500866963!3d27.701799576086387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19aca3d8345b%3A0xbbb5e9967c6a23e2!2sKathmandu%20BernHardt%20College!5e0!3m2!1sen!2snp!4v1771896402737!5m2!1sen!2snp"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                class="w-full h-full">
            </iframe>
        </div>

        <!-- Location Info Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2">

            <!-- Address Card -->
            <div class="p-6 rounded-xl bg-zinc-100 dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 shadow-sm">
                <h3 class="font-bold text-lg mb-2">Store Address</h3>
                <p class="text-zinc-600 dark:text-zinc-400 text-sm leading-relaxed">
                    Kathmandu BernHardt College<br/>
                    Kathmandu, Nepal
                </p>
            </div>

            <!-- Hours Card -->
            <div class="p-6 rounded-xl bg-zinc-100 dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 shadow-sm">
                <h3 class="font-bold text-lg mb-2">Opening Hours</h3>
                <ul class="text-zinc-600 dark:text-zinc-400 text-sm space-y-1">
                    <li class="flex justify-between">
                        <span>Mon - Fri</span>
                        <span>9am - 5pm</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Sunday</span>
                        <span>10am - 3pm</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Saturday</span>
                        <span>Closed</span>
                    </li>
                </ul>
            </div>

        </div>

    </div>

</div>

</main>

<?php get_footer(); ?>