<?php
/**
 * Template Name: Cart Page
 */
get_header(); 
?>

<main class="max-w-[1440px] mx-auto px-4 lg:px-20 py-12 min-h-[60vh]">
    <div class="flex flex-col gap-2 mb-12">
        <h1 class="text-4xl md:text-6xl font-black tracking-tight uppercase italic">Your <span class="text-primary">Shopping Cart</span></h1>
        <p class="text-slate-400 max-w-2xl">Review your selected items and proceed to checkout to secure your grails.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
        <!-- Cart Items List -->
        <div class="lg:col-span-2 space-y-6">
            <div id="full-cart-items" class="space-y-4">
                <!-- JS will populate this -->
                <div class="flex flex-col items-center justify-center py-20 bg-white/5 rounded-2xl border border-white/5 text-center">
                    <span class="material-symbols-outlined text-6xl mb-4 text-slate-600">shopping_basket</span>
                    <p class="text-xl font-bold uppercase tracking-widest text-slate-400">Loading your cart...</p>
                </div>
            </div>
        </div>

        <!-- Order Summary -->
        <div class="lg:col-span-1">
            <div class="bg-white/5 border border-white/5 rounded-2xl p-8 sticky top-32">
                <h3 class="text-xl font-black uppercase italic tracking-tighter mb-6 pb-4 border-b border-white/10">Order Summary</h3>
                
                <div class="space-y-4 mb-8">
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-slate-400 font-bold uppercase tracking-widest">Subtotal</span>
                        <span id="full-cart-subtotal" class="font-black italic">Rs 0</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-slate-400 font-bold uppercase tracking-widest">Shipping</span>
                        <span class="text-primary font-black italic">Calculated at checkout</span>
                    </div>
                </div>

                <div class="pt-6 border-t border-white/10 mb-8">
                    <div class="flex justify-between items-center text-xl">
                        <span class="text-white font-black uppercase italic">Total</span>
                        <span id="full-cart-total" class="text-primary font-black italic">Rs 0</span>
                    </div>
                </div>

                <a href="#" class="w-full bg-primary text-white font-black py-4 rounded-xl uppercase italic tracking-widest shadow-lg shadow-red-500/20 block text-center active:scale-95 transition-all text-sm mb-4">
                    Secure Checkout
                </a>

                <a href="<?php echo home_url(); ?>" class="w-full border border-white/10 text-white font-bold py-4 rounded-xl uppercase tracking-widest block text-center hover:bg-white/5 transition-all text-[10px]">
                    Continue Shopping
                </a>
            </div>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const itemsContainer = document.getElementById('full-cart-items');
    const subtotalEl = document.getElementById('full-cart-subtotal');
    const totalEl = document.getElementById('full-cart-total');

    function updateFullCartUI(data) {
        const cart = data.cart;
        const count = data.count;

        if (Object.keys(cart).length === 0) {
            itemsContainer.innerHTML = `
                <div class="flex flex-col items-center justify-center py-20 bg-white/5 rounded-2xl border border-white/5 text-center">
                    <span class="material-symbols-outlined text-6xl mb-4 text-slate-600">shopping_basket</span>
                    <p class="text-xl font-bold uppercase tracking-widest text-slate-400">Your cart is empty</p>
                    <a href="<?php echo home_url(); ?>" class="mt-6 text-primary font-black uppercase italic text-sm tracking-widest hover:underline">Start Shopping</a>
                </div>`;
            subtotalEl.innerText = 'Rs 0';
            totalEl.innerText = 'Rs 0';
            return;
        }

        let html = '';
        Object.values(cart).forEach(item => {
            total += item.price * item.qty;
            html += `
                <div class="cart-item-row flex flex-col md:flex-row items-center gap-6 p-6 bg-white/5 border border-white/5 rounded-2xl group transition-all hover:border-primary/20 hover:bg-white/[0.08]">
                    <div class="w-32 h-32 bg-white/5 rounded-xl overflow-hidden flex items-center justify-center flex-shrink-0 border border-white/5">
                        <img src="${item.image}" alt="${item.name}" class="w-full h-full object-contain p-2 transition-transform group-hover:scale-110 drop-shadow-2xl">
                    </div>
                    
                    <div class="flex-1 text-center md:text-left">
                        <h4 class="text-xl font-black uppercase italic tracking-tighter mb-1 font-display tracking-tight">${item.name}</h4>
                        <p class="text-slate-500 text-[10px] font-bold uppercase tracking-[0.2em] mb-4">Jordan Boutique Official</p>
                        
                        <div class="flex flex-col md:flex-row items-center gap-4 md:gap-8">
                            <div class="flex items-center gap-4 bg-white/5 px-4 py-2 rounded-lg border border-white/10 group-hover:border-primary/30 transition-colors">
                                <span class="text-[10px] font-black uppercase tracking-widest text-slate-500">Qty:</span>
                                <span class="font-black italic text-sm text-primary">${item.qty}</span>
                            </div>
                            <span class="text-white font-black italic text-lg">Rs ${item.price.toLocaleString()}</span>
                        </div>
                    </div>

                    <div class="flex flex-col items-center md:items-end gap-2 border-l border-white/10 pl-8 hidden md:flex">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-slate-500">Subtotal</span>
                        <span class="text-2xl font-black italic text-primary">Rs ${(item.price * item.qty).toLocaleString()}</span>
                        <button onclick="removeFromFullCart(${item.id})" class="mt-4 text-zinc-500 hover:text-white transition-all flex items-center gap-2 group/btn">
                            <span class="material-symbols-outlined text-lg group-hover/btn:text-primary transition-colors">delete</span>
                            <span class="text-[10px] font-bold uppercase tracking-widest group-hover/btn:tracking-[0.2em] transition-all">Remove Item</span>
                        </button>
                    </div>

                    <!-- Mobile Subtotal -->
                    <div class="md:hidden flex flex-col items-center gap-4 pt-4 border-t border-white/10 w-full">
                        <div class="flex justify-between w-full px-4 text-sm">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-slate-500">Subtotal</span>
                            <span class="text-xl font-black italic text-primary">Rs ${(item.price * item.qty).toLocaleString()}</span>
                        </div>
                        <button onclick="removeFromFullCart(${item.id})" class="text-zinc-500 hover:text-white transition-all flex items-center gap-2">
                            <span class="material-symbols-outlined text-lg">delete</span>
                            <span class="text-[10px] font-bold uppercase tracking-widest">Remove</span>
                        </button>
                    </div>
                </div>
            `;
        });

        itemsContainer.innerHTML = html;
        subtotalEl.innerText = `Rs ${total.toLocaleString()}`;
        totalEl.innerText = `Rs ${total.toLocaleString()}`;
    }

    window.removeFromFullCart = function(id) {
        // Find row and fade it
        const row = document.querySelector(`button[onclick="removeFromFullCart(${id})"]`)?.closest('.cart-item-row');
        if (row) row.style.opacity = '0.5';

        jQuery.ajax({
            url: jordan_cart_params.ajax_url,
            type: 'POST',
            data: { 
                action: 'jordan_remove_from_cart',
                post_id: id,
                nonce: jordan_cart_params.nonce
            },
            success: (response) => {
                if(response.success) {
                    updateFullCartUI(response.data);
                    // Also update global count and drawer badges
                    if(window.updateCartUI) window.updateCartUI(response.data);
                }
            }
        });
    }

    function fetchFullCart() {
        jQuery.ajax({
            url: jordan_cart_params.ajax_url,
            type: 'POST',
            data: { action: 'jordan_get_cart' },
            success: (response) => {
                if(response.success) updateFullCartUI(response.data);
            }
        });
    }

    fetchFullCart();
});
</script>

<?php get_footer(); ?>
