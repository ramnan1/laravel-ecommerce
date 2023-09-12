<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
  use WithFileUploads;

  public $title;
  public $price;
  public $description;
  public $image;

    public function render()
    {
        return view('livewire.product.create');
    }

    public function store()
    {

      $this->validate([
        'title' => 'required|min:3',
        'description' => 'required|max:180',
        'price' => 'required|numeric',
        'image' => 'image|max:1024'
      ]);

      $imageName = '';

      if ($this->image) {
        $imageName = \Str::slug($this->image, '-')
        . '-'
        . uniqid()
        . '.' . $this->image->getClientOriginalExtension();

        $this->image->storeAs('public', $imageName);
        // $nameImage = explode('/', $imageName);
        // $nameImageNew = end($nameImage);
      }

      Product::create([
        'title' => $this->title,
        'price' => $this->price,
        'description' => $this->description,
        'image' => $imageName
      ]);

      $this->dispatch('productStored');
    }

}
