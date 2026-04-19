<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Movie;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // ADMIN
        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin'
        ]);

        // USER
        User::create([
            'name' => 'Usuario',
            'email' => 'user@test.com',
            'password' => Hash::make('12345678'),
            'role' => 'user'
        ]);

        // CATEGORÍAS
        $categories = [
            'Acción',
            'Drama',
            'Ciencia Ficción',
            'Comedia',
            'Terror'
        ];

        foreach ($categories as $cat) {
            Category::create(['name' => $cat]);
        }

        // PELÍCULAS
        Movie::insert([
            [
                'title' => 'Interstellar',
                'year' => 2014,
                'category_id' => 3,
                'synopsis' => 'Viaje a través del espacio para salvar a la humanidad.',
                'image_url' => 'https://image.tmdb.org/t/p/w1280/9cTfZWP5TfdnmAjiD6ZBXWIJ7O9.jpg'
            ],
            [
                'title' => 'The Dark Knight',
                'year' => 2008,
                'category_id' => 1,
                'synopsis' => 'Batman enfrenta al Joker.',
                'image_url' => 'https://image.tmdb.org/t/p/w1280/qJ2tW6WMUDux911r6m7haRef0WH.jpg'
            ],
            [
                'title' => 'Forrest Gump',
                'year' => 1994,
                'category_id' => 2,
                'synopsis' => 'La vida de un hombre extraordinario.',
                'image_url' => 'https://image.tmdb.org/t/p/w1280/arw2vcBveWOVZr6pxd9XTd1TdQa.jpg'
            ],
            [
                'title' => 'The Hangover',
                'year' => 2009,
                'category_id' => 4,
                'synopsis' => 'Una despedida de soltero fuera de control.',
                'image_url' => 'https://image.tmdb.org/t/p/w1280/uluhlXubGu1VxU63X9VHCLWDAYP.jpg'
            ],
            [
                'title' => 'The Conjuring',
                'year' => 2013,
                'category_id' => 5,
                'synopsis' => 'Investigadores paranormales enfrentan fuerzas oscuras.',
                'image_url' => 'https://image.tmdb.org/t/p/w1280/wVYREutTvI2tmxr6ujrHT704wGF.jpg'
            ],
            [
                'title' => 'Inception',
                'year' => 2010,
                'category_id' => 3,
                'synopsis' => 'Un ladrón roba secretos a través de los sueños.',
                'image_url' => 'https://image.tmdb.org/t/p/w1280/8IB2e4r4oVhHnANbnm7O3Tj6tF8.jpg'
            ],
            [
                'title' => 'Titanic',
                'year' => 1997,
                'category_id' => 2,
                'synopsis' => 'Historia de amor en el Titanic.',
                'image_url' => 'https://image.tmdb.org/t/p/w1280/9xjZS2rlVxm8SFx8kPC3aIGCOYQ.jpg'
            ],
            [
                'title' => 'Avengers: Endgame',
                'year' => 2019,
                'category_id' => 1,
                'synopsis' => 'Los Avengers luchan por salvar el universo.',
                'image_url' => 'https://image.tmdb.org/t/p/w1280/or06FN3Dka5tukK1e9sl16pB3iy.jpg'
            ],
            [
                'title' => 'Joker',
                'year' => 2019,
                'category_id' => 2,
                'synopsis' => 'Origen del villano Joker.',
                'image_url' => 'https://image.tmdb.org/t/p/w1280/udDclJoHjfjb8Ekgsd4FDteOkCU.jpg'
            ],
            [
                'title' => 'Toy Story',
                'year' => 1995,
                'category_id' => 4,
                'synopsis' => 'Aventuras de juguetes con vida propia.',
                'image_url' => 'https://image.tmdb.org/t/p/w1280/uXDfjJbdP4ijW5hWSBrPrlKpxab.jpg'
            ],
            [
                'title' => 'It',
                'year' => 2017,
                'category_id' => 5,
                'synopsis' => 'Un payaso aterroriza a un grupo de niños.',
                'image_url' => 'https://image.tmdb.org/t/p/w1280/9E2y5Q7WlCVNEhP5GiVTjhEhx1o.jpg'
            ],
            [
                'title' => 'Matrix',
                'year' => 1999,
                'category_id' => 3,
                'synopsis' => 'Un hacker descubre la verdad sobre su realidad.',
                'image_url' => 'https://image.tmdb.org/t/p/w1280/ejmTPNAkgZaVJ4AI9zb9SehAYU0.jpg'
            ]
        ]);
    }
}
