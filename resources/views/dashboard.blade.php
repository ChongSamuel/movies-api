<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(auth()->user()->role === 'admin')
                        <p class="text-green-600 font-semibold">
                            ¡Has ingresado como administrador!
                        </p>
                    @else
                        <p class="text-blue-600 font-semibold">
                            ¡Has ingresado como usuario!
                        </p>
                    @endif

                    <a href="/frontend/index.html"
                       class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition margin-top-4 mt-4">
                        Ir al catálogo de películas
                    </a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
