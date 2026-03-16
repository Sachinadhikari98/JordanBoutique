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

        if (!cart || Object.keys(cart).length === 0) {
            itemsContainer.innerHTML = `
                <div class="flex flex-col items-center justify-center py-20 bg-zinc-900/40 rounded-3xl border border-white/5 text-center px-6 backdrop-blur-xl">
                    <span class="material-symbols-outlined text-6xl mb-4 text-slate-600">shopping_basket</span>
                    <p class="text-xl font-black uppercase tracking-widest text-white mb-2 italic">Your grail collection is empty</p>
                    <a href="<?php echo home_url('/categories'); ?>" class="mt-6 px-10 py-3 bg-primary text-white font-black uppercase italic text-xs tracking-widest rounded-xl shadow-lg shadow-red-500/20 hover:scale-105 transition-all">Start Shopping</a>
                </div>`;
            subtotalEl.innerText = 'Rs 0';
            totalEl.innerText = 'Rs 0';
            return;
        }

        let html = '';
        let totalVal = 0; 
        
        Object.values(cart).forEach(item => {
            const price = parseFloat(item.price) || 0;
            const qty = parseInt(item.qty) || 0;
            const sub = price * qty;
            totalVal += sub;
            
            html += `
                <div class="cart-item-row grid grid-cols-1 md:grid-cols-[140px_1fr_180px] items-center gap-8 p-6 md:p-8 bg-zinc-900/40 backdrop-blur-md border border-white/5 rounded-3xl group transition-all duration-500 hover:border-primary/30 hover:bg-white/[0.05] relative overflow-hidden">
                    
                    <!-- Product Image -->
                    <div class="w-full h-32 md:h-32 bg-white/5 rounded-2xl overflow-hidden flex items-center justify-center border border-white/5 group-hover:border-primary/20 transition-colors">
                        <img src="${item.image}" alt="${item.name}" class="w-full h-full object-contain p-4 transition-transform duration-700 group-hover:scale-110 drop-shadow-[0_10px_30px_rgba(0,0,0,0.5)]">
                    </div>
                    
                    <!-- Product Details -->
                    <div class="flex flex-col text-center md:text-left">
                        <span class="text-primary font-black uppercase italic tracking-[0.3em] text-[10px] mb-2">Original Grail</span>
                        <h4 class="text-xl md:text-2xl font-black uppercase italic tracking-tighter leading-none mb-4">${item.name}</h4>
                        
                        <div class="flex flex-wrap items-center justify-center md:justify-start gap-6">
                            <div class="flex items-center gap-3 bg-white/5 px-4 py-1.5 rounded-lg border border-white/10">
                                <span class="text-[9px] font-black uppercase tracking-widest text-slate-500">Qty</span>
                                <span class="font-black italic text-sm text-primary">${qty}</span>
                            </div>
                            <div class="flex flex-col items-center md:items-start">
                                <span class="text-[9px] font-bold uppercase tracking-widest text-slate-500">Unit Price</span>
                                <span class="text-white font-black italic text-sm">Rs ${price.toLocaleString()}</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Price & Actions -->
                    <div class="flex flex-col items-center md:items-end justify-center gap-4 border-t md:border-t-0 md:border-l border-white/10 pt-6 md:pt-0 md:pl-8">
                        <div class="text-center md:text-right w-full">
                            <span class="text-[10px] font-bold uppercase tracking-widest text-slate-500 block mb-1">Subtotal</span>
                            <span class="text-2xl md:text-3xl font-black italic text-primary leading-none block">Rs ${sub.toLocaleString()}</span>
                        </div>
                        
                        <button onclick="removeFromFullCart(${item.id})" class="text-zinc-500 hover:text-white transition-all flex items-center gap-2 group/btn px-3 py-1.5 hover:bg-red-500/10 rounded-lg border border-transparent hover:border-red-500/20">
                            <span class="material-symbols-outlined text-lg group-hover/btn:text-primary transition-colors">delete</span>
                            <span class="text-[10px] font-black uppercase tracking-widest">Remove Item</span>
                        </button>
                    </div>

                </div>
            `;
        });

        itemsContainer.innerHTML = html;
        subtotalEl.innerText = `Rs ${totalVal.toLocaleString()}`;
        totalEl.innerText = `Rs ${totalVal.toLocaleString()}`;
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
        console.log('Fetching full cart data...');
        jQuery.ajax({
            url: jordan_cart_params.ajax_url,
            type: 'POST',
            data: { action: 'jordan_get_cart' },
            success: (response) => {
                console.log('Cart Response:', response);
                if(response.success) {
                    updateFullCartUI(response.data);
                } else {
                    console.error('Failed to fetch cart:', response);
                }
            },
            error: (err) => {
                console.error('AJAX Error fetching cart:', err);
            }
        });
    }

    fetchFullCart();
});
</script>

<?php get_footer(); ?>
