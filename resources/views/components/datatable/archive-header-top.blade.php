<div class="dark:bg-gray-700 dark:text-gray-900 py-2 mb-4 p-0 m-0">
    <form wire:submit='searching'>
        <div class="mt-5 px-10 grid grid-cols-2 gap-x-20 gap-y-4 sm:grid-cols-6">
            <div class="col-span-2">
                <label for="product_name" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white/50">Product Name</label>
                <div class="mt-2">
                  <input type="text" wire:model='product_name' id="product_name" class="form-control" placeholder="Enter Product Name">
                </div>
            </div>

            <div class="col-span-2">
                <label for="category" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white/50">Category</label>
                <div class="mt-2">
                    <select wire:model='selected_category' wire:change='setBrand' id="category" class="form-select">
                        <option value=null disabled>--- Select Category ---</option>
                        @foreach ($category_list as $item)
                            <option value="{{$item}}">{{$item}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-span-2">
                <label for="brand" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white/50">Brand</label>
                <div class="mt-2">
                    <select wire:model='selected_brand' id="brand" class="form-select">
                        <option value=null disabled>--- Select Brand ---</option>
                        @foreach ($brand_list as $item)
                            <option value="{{$item}}">{{$item}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="flex justify-end gap-6 px-10 py-6">
            <button class="btn-warning" wire:click='resetSearch'>Reset</button>
            <button class="btn-primary" type="submit">Search</button>
        </div>
    </form>

</div>