<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-4">{{ $product->name }}</h2>
                <p class="text-gray-700 mb-4">{{ $product->description }}</p>
                <p class="text-gray-700 mb-4"><b>Price</b> : ${{ $product->price }}</p>
                <p class="text-gray-700 mb-4"><b>Quantity</b> : {{ $product->quantity }}</p>
                <p class="text-gray-700 mb-4"><b>Category</b> : {{ $product->category->name }}</p>
                @if ($product->product_image)
                    <img style="width:25%; height: 130px;" src="{{ $product->product_image }}" alt="Product Image" class="max-w-xs mb-4">
                @endif
            </div>
        </div>
    </div>
</x-app-layout>