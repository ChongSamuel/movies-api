<x-app-layout>

    <div class="max-w-5xl mx-auto mt-10 bg-white shadow-lg rounded-xl p-6">

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Películas</h1>

            <a href="/admin/movies/create" 
               class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                + Agregar
            </a>
        </div>

        <table class="w-full border-collapse text-sm">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="p-3">ID</th>
                    <th class="p-3">Título</th>
                    <th class="p-3">Año</th>
                    <th class="p-3">Categoría</th>
                    <th class="p-3">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($movies as $movie)
                <tr class="border-b hover:bg-gray-50 transition">
                    <td class="p-3">{{ $movie->id }}</td>
                    <td class="p-3">{{ $movie->title }}</td>
                    <td class="p-3">{{ $movie->year }}</td>
                    <td class="p-3">{{ $movie->category->name ?? '' }}</td>

                    <td class="p-3 flex gap-2">
                        <a href="/admin/movies/{{ $movie->id }}/edit"
                           class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600">
                            Editar
                        </a>

                        <form action="/admin/movies/{{ $movie->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button 
                                onclick="return confirm('¿Eliminar esta película?')"
                                class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</x-app-layout>
