@extends('layouts.app')

@section('title', 'Create product')

@section('content')
    <h1 class="text-3xl font-bold text-center mb-6">Agregar Producto</h1>
    <div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden p-6">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="name" id="name" placeholder="Nombre" value="{{ old('name') }}" required
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring focus:ring-blue-500 @error('name') border-red-500 @enderror">
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea name="description" id="description" placeholder="Descripción"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring focus:ring-blue-500 @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                @error('description')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Precio</label>
                <input type="number" step="0.01" name="price" id="price" placeholder="Precio" value="{{ old('price') }}" required
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:outline-none focus:ring focus:ring-blue-500 @error('price') border-red-500 @enderror">
                @error('price')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 rounded hover:bg-blue-600">
                Guardar
            </button>
            <div class="flex justify-end mt-6">
                <a href="{{ route('products.index') }}"
                    class="text-center w-full bg-red-500 text-white font-bold py-2 rounded hover:bg-red-600">Regresar</a>
            </div>
        </form>
    </div>
@endsection
