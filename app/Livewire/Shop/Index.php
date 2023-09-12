<?php

namespace App\Livewire\Shop;

use App\Facades\Cart;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
  use WithPagination;
  public $search;

    public function render()
    {
        return view('livewire.shop.index' ,[
          'products' => $this->search === null ?
                Product::latest()->paginate(8) :
                Product::latest()->where('title', 'like', '%' . $this->search . '%')
                    ->paginate(8)
        ])->layout('layouts.app');
    }

    public function addToCart($productId)
    {
      $product = Product::find($productId);
      Cart::add($product);
      $this->dispatch('addToCart');
      // dd(Cart::get()['products']);
    }
}
