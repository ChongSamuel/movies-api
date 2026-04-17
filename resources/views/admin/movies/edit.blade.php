<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ➕ Agregar película
        </h2>
    </x-slot>

    <div class="max-w-xl mx-auto mt-8 bg-white shadow-lg rounded-xl p-6">

        {{-- Errores --}}
        @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/admin/movies/{{ $movie->id }}">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium">Título</label>
                <input type="text" name="title"
                       class="w-full border p-2 rounded focus:ring focus:ring-blue-200"
                       value="{{ old('title', $movie->title) }}">
            </div>

            <div>
                <label class="block text-sm font-medium">Año</label>
                <input type="number" name="year"
                       class="w-full border p-2 rounded"
                       value="{{ old('year', $movie->year) }}">
            </div>

            <div>
                <label class="block text-sm font-medium">Categoría</label>
                <select name="category_id" class="w-full border p-2 rounded">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $movie->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium">Imagen (URL)</label>
                <input type="text" name="image_url"
                       class="w-full border p-2 rounded"
                       value="{{ old('image_url', $movie->image_url) }}">
            </div>

            <div>
                <label class="block text-sm font-medium">Sinopsis</label>
                <textarea name="synopsis"
                          class="w-full border p-2 rounded">{{ old('synopsis', $movie->synopsis) }}</textarea>
            </div>

            <div class="flex justify-between items-center">
                <a href="/admin/movies" class="text-blue-600 hover:underline">
                    ← Volver
                </a>

                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Actualizar
                </button>
            </div>
        </form>

    </div>

</x-app-layout>



<!-- <h1>Editar película</h1>

<form action="/admin/movies/{{ $movie->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ $movie->title }}"><br>
    <input type="number" name="year" value="{{ $movie->year }}"><br>
    
    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}"
                {{ $movie->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select> <br>

    <input type="text" name="image_url" value="{{ $movie->image_url }}"><br>
    <textarea name="synopsis">{{ $movie->synopsis }}</textarea><br>

    <button type="submit">Actualizar</button>
</form> -->