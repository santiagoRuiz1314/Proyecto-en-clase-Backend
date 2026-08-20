# 🎾 DEUCE – Ecommerce de Raquetas de Tenis

> Aplicación web desarrollada como proyecto universitario para aprender los fundamentos de PHP y del framework Laravel.

---

## 👨‍💻 Santiago Steven Ruiz Carreño

<img src="./foto.png" width ="300" height = "400">

---

## 📌 Descripción

**DEUCE** es una tienda en línea de raquetas de tenis construida con Laravel como primer acercamiento al desarrollo backend con PHP. En ella se practican los conceptos esenciales del framework: el sistema de rutas (rutas simples, grupos con `prefix` y controladores invocables), los controladores, las vistas y la estructura MVC que Laravel propone.

El frontend está resuelto con **HTML y CSS puro**: las cuatro vistas apuntan a una única hoja de estilos ubicada en `public/style.css`, sin JavaScript ni frameworks de CSS.

Actualmente el proyecto expone cuatro rutas:

| Método | Ruta | Controlador | Descripción |
| ------ | ---- | ----------- | ----------- |
| `GET`  | `/` | `HomeController::__invoke` | Landing del ecommerce |
| `GET`  | `/product` | `ProductController@index` | Listado de productos |
| `GET`  | `/product/create` | `ProductController@create` | Formulario para crear un producto |
| `GET`  | `/product/{idProduct}` | `ProductController@show` | Detalle de un producto |

> ⚠️ El orden importa: `/product/create` se declara **antes** que `/product/{idProduct}`, de lo contrario Laravel interpretaría `create` como el parámetro `idProduct`.

---

## 🚀 Tecnologías utilizadas

- PHP 8.3+
- Laravel 13
- SQLite
- Blade
- HTML5 y CSS3 (hoja única en `public/style.css`)
- Vite (incluido en el esqueleto de Laravel)

---

## ⚙️ Instalación

```bash
git clone https://github.com/santiagoRuiz1314/Proyecto-en-clase-Backend.git
cd Proyecto-en-clase-Backend

composer install
cp .env.example .env
php artisan key:generate
php artisan migrate

npm install
npm run dev
```

Luego levanta el servidor de desarrollo:

```bash
php artisan serve
```

La aplicación quedará disponible en `http://localhost:8000`.

---

## 📂 Estructura del proyecto

```
Proyecto-en-clase-Backend/
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php
│   │   └── ProductController.php
│   ├── Models/
│   └── Providers/
├── bootstrap/
├── config/
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
├── public/
│   └── style.css
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── home.blade.php
│       └── product/
│           ├── index.blade.php
│           ├── create.blade.php
│           └── show.blade.php
├── routes/
│   ├── console.php
│   └── web.php
├── storage/
├── tests/
├── composer.json
└── package.json
```

---
