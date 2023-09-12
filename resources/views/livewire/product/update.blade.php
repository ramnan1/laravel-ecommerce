
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8" >
  <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 dark:text-gray-100">
      <div class="card-body">
        <form action="" wire:submit.prevent="update()">

          <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-6 group">
                <input wire:model.live="title" type="text" id="title" class="@error('title') border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 peer @enderror block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300  dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                  @error('title')
                    <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Well done!</span> {{ $message }}</p>
                  @enderror
                <label for="title" class="@error('title') text-red-600 dark:text-red-500 peer-focus:text-red-600 peer-focus:dark:text-red-500 @enderror peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input wire:model="price" type="number" name="price" id="price" class="@error('price') border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 peer @enderror block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                @error('price')
                  <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Well done!</span> {{ $message }}</p>
                @enderror
                <label for="price" class="@error('price') text-red-600 dark:text-red-500 peer-focus:text-red-600 peer-focus:dark:text-red-500 @enderror peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Price</label>
            </div>
          </div>
          <div class="relative z-0 w-full mb-6 group">
            <input wire:model="description" type="text" name="description" id="description" class="@error('description') border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 peer @enderror block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            @error('description')
              <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Well done!</span> {{ $message }}</p>
            @enderror
            <label for="description" class="@error('description') text-red-600 dark:text-red-500 peer-focus:text-red-600 peer-focus:dark:text-red-500 @enderror peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
          </div>
          <div class="relative z-0 w-full mb-6 group">
            <label class="@error('image') text-red-900 dark:text-red @enderror block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
            <input wire:model="image" class="@error('image') border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 peer @enderror w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
            @error('image')
              <p id="standard_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Well done!</span> {{ $message }}</p>
            @enderror
            @if ($image)

              <img src="{{ $image->temporaryUrl() }}" alt="" width="200">
              @else
              <img src="{{ $imageOld }}" alt="" width="200">
            @endif
          </div>
          
          <button type="submit" class="text-white mr-5  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
          <button wire:click="$parent.formCloseHandler()" type="button" class="text-white  bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>


