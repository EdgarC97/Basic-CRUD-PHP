@extends('layouts.app')

@section('title', 'Edit product') 

@section('content')
    <h1 class="text-3xl font-bold text-center mb-6">Editar Producto</h1>
    <div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden p-6">
        <!-- Botón de Regresar -->
        <div class="mb-4">
            <a href="{{ route('products.index') }}" class="text-blue-500 hover:underline">
                &larr; Regresar a la lista de productos
            </a>
        </div>
        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="name" id="name" value="{{ $product->name }}" required 
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea name="description" id="description" required 
                          class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring focus:ring-blue-500">{{ $product->description }}</textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Precio</label>
                <input type="number" step="0.01" name="price" id="price" value="{{ $product->price }}" required 
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring focus:ring-blue-500">
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 rounded hover:bg-blue-600">
                Actualizar
            </button>
        </form>
    </div>
@endsection
