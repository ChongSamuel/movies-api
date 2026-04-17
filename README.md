# Movies API (Laravel)

API REST desarrollada con Laravel para gestionar un catálogo de películas.

## Funcionalidades

- Listado de películas con categorías
- Relación entre películas y categorías
- Datos en formato JSON
- Estructura preparada para CRUD

## Instalación

1. Clonar repositorio
2. Ejecutar:
   composer install
3. Copiar .env.example a .env
4. Configurar base de datos
5. Ejecutar:
   php artisan migrate
6. Levantar servidor:
   php artisan serve

## Endpoint principal

GET /api/movies
