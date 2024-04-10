<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-8">Create New Product</h2>
                <br>
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2">Name <span class="text-red-600 hover:text-red-900"> *</span></label>
                        <input type="text" id="name" name="name" class="form-input w-full" placeholder="Enter product name" value="{{ old('name') }}">
                        @error('name')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 font-bold mb-2">Description <span class="text-red-600 hover:text-red-900"> *</span></label>
                        <textarea id="description" name="description" class="form-textarea w-full" placeholder="Enter product description" rows="3">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="price" class="block text-gray-700 font-bold mb-2">Price <span class="text-red-600 hover:text-red-900"> *</span></label>
                        <input type="number" id="price" name="price" class="form-input w-full" placeholder="Enter product price" value="{{ old('price') }}">
                        @error('price')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="quantity" class="block text-gray-700 font-bold mb-2">Quantity <span class="text-red-600 hover:text-red-900"> *</span></label>
                        <input type="number" id="quantity" name="quantity" class="form-input w-full" placeholder="Enter product quantity" value="{{ old('quantity') }}">
                        @error('quantity')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="category_id" class="block text-gray-700 font-bold mb-2">Category <span class="text-red-600 hover:text-red-900"> *</span></label>
                        <select id="category_id" name="category_id" class="form-select w-full">
                            <option value="">Select category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="product_image" class="block text-gray-700 font-bold mb-2">Product Image</label>
                        <input type="file" id="product_image" name="product_image" class="form-input w-full" accept=".jpg, .jpeg, .png" required>
                        <span class="text-gray-500 text-sm">Upload only JPEG, JPG, PNG files. Maximum size: 2MB.</span>
                        <div style="width:25%; height: 130px; margin-top:10px; display:none;" id="filePreview"></div>
                        @error('product_image')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-6">
                        <button style="background-color: hsl(234.47deg 87.58% 68.43%);" type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Create Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>