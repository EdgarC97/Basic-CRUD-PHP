@extends('layouts.app')

@section('title', 'Show product') 

@section('content')
    <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden p-6">
        <h1 class="text-3xl font-bold text-center mb-4">{{ $product->name }}</h1>
        
        <div class="mb-4">
            <p class="text-lg font-semibold">Nombre:</p>
            <p class="text-xl text-gray-700 mb-2">{{ $product->name }}</p>
        </div>

        <div class="mb-4">
            <p class="text-lg font-semibold">Descripción:</p>
            <p class="text-gray-700 mb-2">{{ $product->description }}</p>
        </div>
        
        <div class="mb-4">
            <p class="text-lg font-semibold">Precio:</p>
            <p class="text-xl text-blue-500">${{ number_format($product->price, 2) }}</p>
        </div>

        <div class="flex justify-end mt-6">
            <a href="{{ route('products.index') }}" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">Regresar</a>
        </div>
    </div>
@endsection
