# Aprendiendo Laravel – Resumen del Curso (GOGODEV)

Este documento resume y reestructura el contenido del curso "Laravel Profesional" dictado por GOGODEV, y relaciona cada temática con el repositorio del proyecto `LaravelCurso`. Cada sección representa un bloque temático (correspondiente a un video del curso), con explicación de los conceptos clave, cómo se implementan en el proyecto y las herramientas utilizadas. Ideal para tener una visión completa, clara y aplicable.

---

## 1. Introducción y Configuración Inicial

El curso arranca presentando Laravel 11 y el proyecto a desarrollar. Se explica:

* Instalación de Laravel via Composer.
* Configuración del entorno (`.env`).
* Uso del servidor de desarrollo (`php artisan serve`).
* Introducción al patrón MVC.

> ⚡ Se crea una ruta básica para validar el entorno ("Hola Mundo") y se genera un controlador con `php artisan make:controller`, que retorna una vista Blade.

**Herramientas clave:** Laravel Installer, `.env`, `routes/web.php`, controladores básicos, vistas simples.

---

## 2. Blade: Vistas y Plantillas

Se introduce Blade, el motor de plantillas de Laravel:

* Uso de `@extends`, `@section`, `@yield`, `@include`.
* Herencia de plantillas y componentes parciales.
* Variables y directivas (`@if`, `@foreach`, `{{ }}`).

> ⚡ Se implementan layouts reutilizables para mantener la interfaz consistente. Las vistas se almacenan en `resources/views`.

**Relevante en:** Carpeta `blade/` del repo.

---

## 3. Bases de Datos: Migraciones y Modelos

Se configura la conexión a base de datos y se crean:

* Migraciones (`php artisan make:migration`).
* Modelos Eloquent (`php artisan make:model`).
* Relaciones básicas y uso de comandos como `migrate` y `tinker`.

> ⚡ Se crean tablas `users` y `posts` con llaves foráneas.

**Relevante en:** `database/migrations`, `app/Models`, `modeldata/`.

---

## 4. Rutas, Controladores y Vistas en Acción

Se conecta todo el flujo MVC:

* Definición de rutas en `web.php`.
* Controladores con métodos `index`, `store`, etc.
* Vistas que reciben datos del controlador.

> ⚡ Se implementan las páginas de publicaciones y formularios para crear nuevas publicaciones.

**Relevante en:** Carpeta `controllers/`, `crud/`.

---

## 5. Funcionalidades de Amistad y Feed

Se crea una red social básica:

* Tabla pivote para relaciones de amistad.
* Métodos `belongsToMany` en el modelo `User`.
* Feed personalizado según los amigos.

> ⚡ Se manejan rutas POST para enviar/aceptar solicitudes y mostrar botones condicionales en Blade.

**Relevante en:** `controllers/`, relaciones Eloquent.

---

## 6. Datos de Prueba: Seeders, Factories y Faker

Se genera data fake para testing:

* Factories (`php artisan make:factory`).
* Seeders (`DatabaseSeeder`).
* Faker para datos aleatorios.

> ⚡ Se crean 10 usuarios y 50 publicaciones aleatorias.

**Relevante en:** `database/factories`, `database/seeders`.

---

## 7. Relaciones entre Modelos

Se formalizan:

* Relaciones `hasMany`, `belongsTo`, `belongsToMany`.
* Uso de `with()` para eager loading.

> ⚡ Se optimizan consultas y se accede a relaciones desde las vistas.

**Relevante en:** `app/Models`, `controllers/`, `relationships/`.

---

## 8. API RESTful + Autenticación con Sanctum

Se construye una API:

* Endpoints CRUD en `routes/api.php`.
* Controladores API que devuelven JSON.
* Protección de rutas con Sanctum (tokens).

> ⚡ Login API y uso de tokens en headers Authorization.

**Relevante en:** `api_crud/`, `middlewareauth/`.

---

## 9. Autenticación Web: Breeze & Jetstream

Se comparan dos stacks de autenticación:

* Breeze (simple, con Blade).
* Jetstream (completo, con Livewire o Inertia).

> ⚡ Se instala Breeze y se protege el acceso a rutas como publicaciones o solicitudes de amistad.

**Relevante en:** `authbreeze/`, `authjetstream/`.

---

## 10. Componentes Dinámicos con Livewire

Se introduce Livewire:

* Componentes interactivos sin JS.
* Directivas `wire:model`, `wire:click`, etc.

> ⚡ Se construye un componente para aceptar solicitudes de amistad en tiempo real.

**Relevante en:** `app/Http/Livewire`, `resources/views/livewire`.

---

## 11. SPA con Inertia.js + Vue

Se combina Laravel + Vue con Inertia:

* `Inertia::render()` para rutas.
* Componentes Vue en `resources/js/Pages`.

> ⚡ La UX mejora sin crear una API separada.

**Relevante en:** `inertia-example/`.

---

## 12. Almacenamiento de Archivos

Se enseña a:

* Subir y almacenar archivos con `Storage`.
* Crear enlaces simbólicos (`php artisan storage:link`).
* Validar archivos (mimes, max).

> ⚡ Subida de foto de perfil.

**Relevante en:** `storageexample/`.

---

## 13. Localización (multi-idioma)

Se implementa i18n:

* Archivos en `resources/lang`.
* Uso de `__()` y `@lang`.
* Cambio de idioma dinámico (App::setLocale).

> ⚡ Traducción de vistas al inglés/español.

**Relevante en:** `localeexample/`.

---

## 14. Envió de Emails

Se crea un sistema de mails:

* Clases `Mailable` (`php artisan make:mail`).
* Enviar emails con `Mail::to()->send()`.
* Plantillas en `resources/views/emails`.

> ⚡ Se envía un correo al aceptar una amistad.

**Relevante en:** `mailexample/`.

---

## 15. Eventos, Listeners y Scheduling

Se introduce:

* Eventos (`php artisan make:event`) y Listeners.
* Observers de modelos.
* Tareas programadas (`schedule()` en Kernel.php).

> ⚡ Se dispara evento al aceptar amistad, se programa una tarea diaria.

**Relevante en:** `eventsexample/`, `utilities/`.

---

## 16. Vite y Generación de PDF

Dos features prácticas:

* Vite para bundling de JS/CSS.
* PDF con `barryvdh/laravel-dompdf`.

> ⚡ Se genera un PDF con publicaciones.

**Relevante en:** `assetbundlingANDpdf/`.

---

## 17. Importar/Exportar CSV/Excel

Se usa Laravel Excel (Maatwebsite):

* `make:import`, `make:export`.
* Exportación de publicaciones y carga masiva de usuarios.

> ⚡ Se implementan botones para exportar e importar desde interfaz.

**Relevante en:** `csvexample/`.

---

## 18. Utilidades y Buenas Prácticas

Tips finales:

* Tinker, dd(), debugbar.
* Helpers (`optional(), config(), cache(), etc.`).
* Collections: map, filter, pluck.
* Artisan: comandos útiles como `route:list`, `optimize`.

> ⚡ Ejemplos de uso en `utilities/`.

---

## 19. Testing en Laravel

Testing automatizado con PHPUnit:

* Tests de característica (`make:test`).
* Assertions (`assertStatus`, `assertSee`, `assertDatabaseHas`).
* Uso de `php artisan test`, `RefreshDatabase` trait.

> ⚡ Se testea creación de posts y login.

**Relevante en:** `testexample/`.

---

## Conclusión

El curso deja una base sólida para proyectos Laravel profesionales: desde rutas, vistas, bases de datos y relaciones, hasta autenticación, APIs, Livewire, Inertia, exportaciones y testing. Un recorrido muy completo y moderno por el ecosistema Laravel.
