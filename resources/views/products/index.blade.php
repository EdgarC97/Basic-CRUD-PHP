@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-center mb-6">Productos</h1>
    <div class="mb-4 text-right">
        <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 no-underline">Agregar
            Producto</a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="py-2 px-4 text-left">Id</th>
                    <th class="py-2 px-4 text-left">Nombre</th>
                    <th class="py-2 px-4 text-left">Precio</th>
                    <th class="py-2 px-4 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-2 px-4">{{ $product->id }}</td>
                        <td class="py-2 px-4">{{ $product->name }}</td>
                        <td class="py-2 px-4">${{ number_format($product->price, 2) }}</td>
                        <td class="py-2 px-4 text-center">
                            <a href="{{ route('products.show', $product) }}"
                                class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Ver detalles</a>
                            <a href="{{ route('products.edit', $product) }}"
                                class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 ml-4">Editar</a>
                                <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 ml-4 delete-button">Eliminar</button>
                                </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
    <script>
        Swal.fire({
            position: "center center",
            icon: "success",
            title: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 1500
        });
    </script>
@endif
@endsection
