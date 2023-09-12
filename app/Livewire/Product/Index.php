<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;



class Index extends Component
{
  use WithPagination;

  public $search;
  public $paginate = 10;
  public $formVisible;
  public $formUpdate;
  // public $productUpdateId;

    public function render()
    {
        return view('livewire.product.index',[
          'products' => $this->search === null ?
                Product::latest()->paginate($this->paginate) :
                Product::latest()->where('title', 'like', '%' . $this->search . '%')
                    ->paginate($this->paginate)
        ])->layout('layouts.app');
    }

    public function formCloseHandler() 
    {
      $this->formVisible = false;
      $this->formUpdate = true;
      // $this->productUpdateId = null;

    }
    #[On('productStored')] 
    public function productStoredHandler()
    {
      $this->formVisible = false;
      $this->formUpdate = false;
      session()->flash('message', 'Your product was stored');
    }
    #[On('productUpdated')] 
    public function productUpdatedHandler()
    {
        $this->formVisible = false;
        $this->formUpdate = false;
        session()->flash('message', 'Your product was updated');
    }

    public function updateHandler($productId)
    {
      // $product = Product::find($productId);
      $this->formUpdate = true;
      $this->formVisible = true;
      $this->dispatch('updateProduct',$productId);
    }

    public function deleteProduct($productId)
    {
        $product = Product::find($productId);

        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();
        session()->flash('message', 'Product was deleted!');

    }
}
