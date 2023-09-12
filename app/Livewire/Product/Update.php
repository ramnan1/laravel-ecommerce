<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\On; 

class Update extends Component
{
  use WithFileUploads;

  public $productId;
  public $title;
  public $price;
  public $description ;
  public $image;
  public $imageOld;
  public Product $product;

  // protected $listeners = [
  //   'updateProduct' => 'updateProductHandler'
  // ];
  
  #[On('updateProduct')] 
  public function updateProduct($productId)
  {
    $product = Product::find($productId);
    $this->productId = $product['id'];
    $this->title = $product['title'];
    $this->description = $product['description'];
    $this->price = $product['price'];
    $this->imageOld = asset('/storage/' . $product['image']);
  }
    
    public function update()
    {
        $this->validate([
            'title' => 'required|min:3',
            'description' => 'required|max:180',
            'price' => 'required|numeric',
            'image' => 'image|max:1024'
        ]);

        if ($this->productId) {
            $product = Product::find($this->productId);

            $image = '';

            if ($this->image) {
                Storage::disk('public')->delete($product->image);

                $imageName = \Str::slug($this->title, '-')
                    . '-'
                    . uniqid()
                    . '.' . $this->image->getClientOriginalExtension();

                $this->image->storeAs('public', $imageName, 'local');

                $image = $imageName;
            } else {
                $image = $product->image;
            }

            $product->update([
                'title' => $this->title,
                'price' => $this->price,
                'description' => $this->description,
                'image' => $image
            ]);

            $this->dispatch('productUpdated');

        }
    }

    
}
