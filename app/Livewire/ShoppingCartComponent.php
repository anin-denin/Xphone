<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;


class ShoppingCartComponent extends Component
{
    public $cartItems = [];
    public $subtotal;
    public $vat;
    public $discount;
    public $total;

    public $pageTitle = 'Xphone Cart';

    protected $listeners = [
        'cartUpdated' => 'render',
    ];
    public function mount(){
       $this->cartItems = $this->getCartItems();
        $this->calculateTotals();
    }

    //calculate the totals
    public function calculateTotals()
    {
        $this->subtotal = $this->cartItems->sum(function($item) {
            return $item->quantity * 14000; //per produk di user 14jt 
        });
        $this->vat = $this->subtotal * 0.1; // 10% Tax 
        $this->discount = 5000; // Apply your discount logic here
        $this->total = $this->subtotal + $this->vat - $this->discount;
    }

    //get the details of shopping cart
    public function getCartItems()
    {
        return ShoppingCart::with('product')
            ->where('user_id', Auth::id())
            ->get();
    }
    //adding item to cart
    public function addToCart($productId)
    {
        $cartItem = ShoppingCart::where('user_id', Auth::id())
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            $cartItem->quantity += 1; // increment its quantity
            $cartItem->save();
        } else {
            ShoppingCart::create([
                'user_id' => Auth::id(),
                'product_id' => $productId,
                'quantity' => 1,
            ]);
        }
        //dispatch
        $this->dispatch('cartUpdated');
    }

    //update cart function
    public function updateQuantity($cartItemId, $quantity)
    {
        $cartItem = ShoppingCart::find($cartItemId);
        if ($cartItem) {
            $cartItem->quantity = $quantity;
            $cartItem->save();
            $this->dispatch('cartUpdated');
        }
    }

    //remove items from the cart
    public function removeItem($cartItemId)
    {
        $cartItem = ShoppingCart::find($cartItemId);
        if ($cartItem) {
            $cartItem->delete();
            $this->dispatch('cartUpdated');
        }
    }
    public function render()
    {
        $this->cartItems = $this->getCartItems();
        $this->calculateTotals();

        return view('livewire.shopping-cart-component', [
            'cartItems' => $this->cartItems
        ])->title('Xphone Cart | Shopping cart');
    }
}

//anin

