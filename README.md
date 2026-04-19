# 🎬 API de Catálogo de Películas (Backend)

## 📌 Descripción

Este proyecto corresponde al backend de una aplicación web de catálogo de películas.
Permite gestionar la información de películas mediante un sistema CRUD, así como manejar autenticación de usuarios con roles.

---

## ⚙️ Tecnologías utilizadas

* Laravel
* PHP
* MySQL
* Laravel Breeze (autenticación)
* Tailwind CSS (vistas admin)

---

## 🚀 Funcionalidades

### 🔐 Autenticación

* Registro de usuarios
* Inicio de sesión
* Manejo de roles:

  * **Admin**
  * **User**

---

### 🎬 Gestión de películas (CRUD)

* Crear películas
* Listar películas
* Editar películas
* Eliminar películas

---

### 🛡 Control de acceso

* Middleware para restringir acceso al panel admin
* Solo usuarios con rol **admin** pueden gestionar películas

---

## 📡 Endpoints principales

| Método | Endpoint           | Descripción                  |
| ------ | ------------------ | ---------------------------- |
| GET    | /api/movies        | Obtener listado de películas |
| GET    | /admin/movies      | Vista admin de películas     |
| POST   | /admin/movies      | Crear película               |
| PUT    | /admin/movies/{id} | Actualizar película          |
| DELETE | /admin/movies/{id} | Eliminar película            |

---

## 🗃 Base de datos

El sistema cuenta con tres tablas principales:

* **users** → usuarios del sistema (incluye rol)
* **movies** → películas
* **categories** → categorías de películas

Relación:

* Una película pertenece a una categoría (`category_id`)

---

## 🧪 Instalación

### 1. Clonar repositorio

```bash
git clone https://github.com/ChongSamuel/movies-api
cd backend
```

### 2. Instalar dependencias

```bash
composer install
```

### 3. Configurar entorno

```bash
cp .env.example .env
php artisan key:generate
```

Configurar conexión a base de datos en `.env`

---

### 4. Migrar base de datos

```bash
php artisan migrate
```

---

### 5. Ejecutar servidor

```bash
php artisan serve
```

---

## 🌐 Frontend

El frontend es independiente y se encuentra en otra carpeta.
Para ejecutarlo, basta con abrir el archivo:

```bash
frontend/index.html
```

El frontend consume la API del backend para mostrar las películas.

---

## 📌 Notas

* El panel de administración se encuentra en:

```bash
http://127.0.0.1:8000/admin/movies
```

* Para acceder como administrador, es necesario que el usuario tenga el rol `admin` en la base de datos.

---

## 👨‍💻 Autor

Samuel Chong

