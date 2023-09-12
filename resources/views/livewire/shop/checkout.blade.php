<x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Checkout') }}
  </h2>
</x-slot>

<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8" >
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 text-gray-900 dark:text-gray-100">
        <div class="card-body">
          @if ($formCheckout)
          <form action="" wire:submit.prevent="checkout()">
  
            <div class="grid md:grid-cols-2 md:gap-6">
              <div class="relative z-0 w-full mb-6 group">
                  <input wire:model="first_name" type="text" name="first_name" id="first_name" class="@error('first_name') border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 peer @enderror block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    @error('first_name')
                      <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Well done!</span> {{ $message }}</p>
                    @enderror
                  <label for="first_name" class="@error('first_name') text-red-600 dark:text-red-500 peer-focus:text-red-600 peer-focus:dark:text-red-500 @enderror peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">first_name</label>
              </div>
              <div class="relative z-0 w-full mb-6 group">
                  <input wire:model="last_name" type="text" name="last_name" id="last_name" class="@error('last_name') border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 peer @enderror block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                  @error('last_name')
                    <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Well done!</span> {{ $message }}</p>
                  @enderror
                  <label for="last_name" class="@error('last_name') text-red-600 dark:text-red-500 peer-focus:text-red-600 peer-focus:dark:text-red-500 @enderror peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
              </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
              <div class="relative z-0 w-full mb-6 group">
                  <input wire:model="email" type="email" name="email" id="email" class="@error('email') border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 peer @enderror block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    @error('email')
                      <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Well done!</span> {{ $message }}</p>
                    @enderror
                  <label for="email" class="@error('email') text-red-600 dark:text-red-500 peer-focus:text-red-600 peer-focus:dark:text-red-500 @enderror peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">email</label>
              </div>
              <div class="relative z-0 w-full mb-6 group">
                  <input wire:model="phone" type="number" name="phone" id="phone" class="@error('phone') border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 peer @enderror block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                  @error('phone')
                    <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Well done!</span> {{ $message }}</p>
                  @enderror
                  <label for="phone" class="@error('phone') text-red-600 dark:text-red-500 peer-focus:text-red-600 peer-focus:dark:text-red-500 @enderror peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone</label>
              </div>
            </div>
            
            <div class="relative z-0 w-full mb-6 group">
              {{-- <input wire:model="description" type="text" name="description" id="description" class="@error('description') border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 peer @enderror block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " /> --}}
              <label for="address" class="@error('address') text-red-600 dark:text-red-500 peer-focus:text-red-600 peer-focus:dark:text-red-500 @enderror block mb-2 text-sm font-medium dark:text-gray-400 text-gray-500 ">Address</label>
              <textarea wire:model="address" id="address" rows="4" class="@error('address') dark:focus:ring-red-500 dark:focus:border-red-500 focus:ring-red-500 focus:border-red-500 border-red-500 dark:bg-red-700 dark:border-red-600 dark:placeholder-red-400 @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
              @error('address')
                <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Well done!</span> {{ $message }}</p>
              @enderror
              {{-- <label for="description" class="@error('description') text-red-600 dark:text-red-500 peer-focus:text-red-600 peer-focus:dark:text-red-500 @enderror peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label> --}}
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
              <div class="relative z-0 w-full mb-6 group">
                  <input wire:model="city" type="city" name="city" id="city" class="@error('city') border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 peer @enderror block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    @error('city')
                      <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Well done!</span> {{ $message }}</p>
                    @enderror
                  <label for="city" class="@error('city') text-red-600 dark:text-red-500 peer-focus:text-red-600 peer-focus:dark:text-red-500 @enderror peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">city</label>
              </div>
              <div class="relative z-0 w-full mb-6 group">
                  <input wire:model="postal_code" type="number" name="postal_code" id="postal_code" class="@error('postal_code') border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 peer @enderror block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                  @error('postal_code')
                    <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Well done!</span> {{ $message }}</p>
                  @enderror
                  <label for="postal_code" class="@error('postal_code') text-red-600 dark:text-red-500 peer-focus:text-red-600 peer-focus:dark:text-red-500 @enderror peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">postal_code</label>
              </div>
            </div>
            {{-- <div class="relative z-0 w-full mb-6 group">
              <label class="@error('image') text-red-900 dark:text-red @enderror block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
              <input wire:model="image" class="@error('image') border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 peer @enderror w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
              @error('image')
                <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Well done!</span> {{ $message }}</p>
              @enderror
              @if ($image)
  
                <img src="{{ $image->temporaryUrl() }}" alt="" width="200">
                  
              @endif
            </div> --}}
            
            <button type="submit" class="text-white mr-5  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            
          </form>
          @else
          <button wire:click="$dispatch('payment', '{{ $snapToken }}')" class="text-white mr-5  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Payment</button>
          
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  document.addEventListener('livewire:initialized', () => {
     // Runs after Livewire is loaded but before it's initialized
     // on the page...
     Livewire.on('payment', function (snapToken) {
       console.log(snapToken)
                         snap.pay(snapToken, {
                             // Optional
                             onSuccess: function (result) {
                                 Livewire.dispatch('emptyCart');
                                 Location.href = "/shop";
                             },
                             // Optional
                             onPending: function (result) {
                                 location.reload();
                             },
                             // Optional
                             onError: function (result) {
                                 location.reload();
                             }
                         });
                     });
 })
 </script>
