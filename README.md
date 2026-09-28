<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

--------------------------------------------------------------------------------------------------------

<div align="center">

#  Práctica: Laravel x npm

**Autenticación + renderizado en servidor + gestión de paquetes con Composer y npm**

![Laravel](https://img.shields.io/badge/Laravel-13-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-Build-646CFF?style=for-the-badge&logo=vite&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind-CSS-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white)
![npm](https://img.shields.io/badge/npm-Packages-CB3837?style=for-the-badge&logo=npm&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-PHP-885630?style=for-the-badge&logo=composer&logoColor=white)

**Nivel:** básico-intermedio

`Composer` · `npm / npx` · `Vite` · `Breeze` · `Blade` · `CRUD`

</div>

---

##  Contenido

1. [Objetivo](#-1-objetivo)
2. [Preparación del entorno](#-2-preparación-del-entorno)
3. [Clonar el proyecto](#-3-clonar-el-proyecto)
4. [Puesta en marcha y errores comunes](#-4-puesta-en-marcha-y-solución-de-errores-comunes)
5. [Funcionamiento del módulo Notes](#-5-funcionamiento-del-módulo-notes)
6. [Práctica a realizar](#-6-práctica-a-realizar)
7. [Referencias (APA 7)](#-7-referencias-apa-7)

---

##  1. Objetivo

Descargar un proyecto Laravel ya funcional, ponerlo a correr en tu equipo y ampliarlo:

-  Completar el CRUD de notas agregando la **edición** con PHP y Blade.
-  Integrar una **librería de npm** en el frontend, compilada con Vite.
-  Observar la diferencia entre el modo desarrollo (`npm run dev`, con HMR) y el build de producción (`npx vite build`).

---

##  2. Preparación del entorno

Elige **una** de las opciones. Al final necesitas: **PHP, Composer, Node.js (con npm) y Git**.

###  2.1 Linux / WSL

Instala PHP, Composer y Laravel con el instalador oficial de [php.new](https://php.new), y Node con nvm.

```bash
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"
```
ó
```bash
curl -fsSL https://php.new/install/linux/8.4
```

Instalacion por partes:
PHP:
```bash
sudo apt update && sudo apt upgrade -y
sudo apt install -y php php-cli php-common php-curl php-mbstring php-xml php-zip php-mysql php-sqlite3 unzip curl git
```

Descarga el instalador oficial de Composer e instálalo globalmente:
```bash
curl -sS https://getcomposer.org/installer | php sudo mv composer.phar /usr/local/bin/composer
```
si es necesario hay que dar permisos
```bash
sudo chmod +x /usr/local/bin/composer
```

instalador global de laravel:
```bash
composer global require laravel/installer
```
Agrega la ruta global de Composer a tus variables de entorno PATH:
```bash
nano ~/.bashrc
```
Agrega la siguiente línea al final del archivo:
```bash
export PATH="$HOME/.config/composer/vendor/bin:$PATH"
```
> [!NOTE]
> La versión de PHP que indica la documentación oficial (de php.new) puede cambiar, así que consúltala antes.

###  2.2 Herd (macOS / Windows)

Descarga el instalador desde [herd.laravel.com](https://herd.laravel.com). Incluye PHP, Composer, Laravel CLI, Node y npm. Coloca el proyecto dentro de la carpeta `Herd` de tu usuario y se servirá automáticamente en un dominio `.test`.

###  2.3 Windows nativo

*(Ya deberían tenerlo.)*

- Instalar PHP y Composer (o el script de php.new para Windows).
- Instalar Node.js LTS.
- Instalar Git.

###  2.4 Verificación (aplica a todas las opciones)

```bash
php -v
composer -V
node -v
npm -v
git --version
```

Si alguno no responde, revisa que esté en el `PATH` y reinicia la terminal.

---

##  3. Clonar el proyecto

###  3.1 Con comandos

```bash
git clone <URL>
cd expo3_laravel
code .
```

###  3.2 Con la interfaz de VS Code

1. Abre VS Code y presiona `Ctrl + Shift + P`.
2. Escribe **Git: Clone** y pega la URL del repositorio.
3. Elige la carpeta destino.
4. Cuando termine, acepta **Open** para abrir el proyecto.

También puedes usar el icono de **Source Control** → **Clone Repository**.

> [!TIP]
> **Usuarios de WSL:** clona dentro del sistema de archivos de Linux (`~/proyectos`), no en `/mnt/c/...`.

---

##  4. Puesta en marcha y solución de errores comunes

Un repositorio clonado **no incluye** `vendor/`, `node_modules/`, `.env` ni `public/build/`. Hay que generarlos.

###  4.1 Instalación estándar

```bash
composer install
npm install
cp .env.example .env          # Windows (CMD): copy .env.example .env
php artisan key:generate
```

Crea el archivo de base de datos SQLite y ejecuta las migraciones:

```bash
touch database/database.sqlite   # PowerShell: New-Item database\database.sqlite -ItemType File
php artisan migrate
```

Levanta el proyecto **en dos terminales**:

```bash
# Terminal 1
php artisan serve

# Terminal 2
npm run dev
```

> [!IMPORTANT]
> Si solo corres `php artisan serve` sin `npm run dev` (ni un build previo), la página cargará sin estilos.

Con **Herd**, el sitio ya se sirve en su dominio `.test` y solo necesitas `npm run dev`.

###  4.2 Errores frecuentes

<details>
<summary><b>Ver tabla de errores y soluciones</b></summary>

<br>

| Síntoma | Causa probable | Solución |
|---|---|---|
| `vendor/autoload.php` no existe | No se instalaron las dependencias PHP | `composer install` |
| *No application encryption key has been specified* | Falta `.env` o su clave | Copiar `.env.example` a `.env` y ejecutar `php artisan key:generate` |
| *Vite manifest not found* o página sin estilos | No hay build ni `npm run dev` corriendo | `npm install` y luego `npm run dev` (o `npx vite build`) |
| `npm` o `node` no se reconoce | Node no instalado o fuera del `PATH` | Instalar Node LTS y reiniciar la terminal |
| *La ejecución de scripts está deshabilitada* (PowerShell) | Política de ejecución de Windows | Abrir PowerShell y ejecutar `Set-ExecutionPolicy -Scope CurrentUser RemoteSigned` |
| *could not find driver* | Extensión SQLite desactivada en PHP | Habilitar `pdo_sqlite` y `sqlite3` en `php.ini` (ubícalo con `php --ini`) |
| *Database file does not exist* | Falta `database/database.sqlite` | Crear el archivo y volver a ejecutar `php artisan migrate` |
| *no such table* | Migraciones sin ejecutar | `php artisan migrate` |
| Error por extensión faltante (`mbstring`, `openssl`, `fileinfo`, `intl`, etc.) | Extensión desactivada en `php.ini` | Quitar el `;` de la línea `extension=...` correspondiente y reiniciar la terminal |
| *Your requirements could not be resolved* / conflicto de versión | Versión de PHP insuficiente | Comprobar `php -v` frente al requisito de `composer.json` |
| *Target class [...] does not exist* | Falta el `use` del controlador en `routes/web.php` | Importar la clase con `use App\Http\Controllers\...` |
| *Class not found* tras cambiar archivos | Autoload o caché desactualizados | `composer dump-autoload` y `php artisan optimize:clear` |
| Puerto 8000 ocupado | Otro proceso lo usa | `php artisan serve --port=8001` |

</details>

> [!NOTE]
> **Herd Lite:** su `php.ini` es propio. Ejecuta `php --ini` para ver su ubicación real antes de activar extensiones.

###  4.3 Verificación final

Abre la aplicación, regístrate en `/register`, entra a `/notes` y crea una nota. Si todo carga con estilos y guarda datos, el entorno está listo.

---

##  5. Funcionamiento del módulo Notes

> [!NOTE]
> Aunque se le llame "API", el módulo **no devuelve JSON**: el servidor procesa la petición y responde con vistas Blade ya renderizadas.

###  5.1 Flujo general

1. El usuario se registra o inicia sesión (autenticación de Laravel Breeze).
2. El middleware `auth` protege todas las rutas de notas: sin sesión, redirige a `/login`.
3. Cada nota pertenece a un usuario mediante la clave foránea `user_id`.
4. El controlador consulta solo las notas del usuario autenticado y las pasa a la vista.
5. Al eliminar, el controlador verifica que la nota pertenezca al usuario; si no, responde con error 403.
6. Las acciones de escritura usan formularios con token CSRF y validación en el servidor.

###  5.2 Rutas

| Método | Ruta | Nombre | Acción |
|---|---|---|---|
| `GET` | `/notes` | `notes.index` | Listar notas del usuario |
| `GET` | `/notes/create` | `notes.create` | Mostrar formulario de creación |
| `POST` | `/notes` | `notes.store` | Guardar una nota nueva |
| `DELETE` | `/notes/{note}` | `notes.destroy` | Eliminar una nota |

> [!WARNING]
> **No existe todavía** la ruta de edición ni la de actualización. Son parte de la práctica.

###  5.3 Archivos creados para el módulo

| Archivo | Función |
|---|---|
| `app/Models/Note.php` | Modelo Eloquent; define los campos asignables y la relación con el usuario |
| `app/Http/Controllers/NoteController.php` | Lógica de listar, crear, guardar y eliminar |
| `database/migrations/xxxx_create_notes_table.php` | Estructura de la tabla `notes` |
| `resources/views/notes/index.blade.php` | Vista del listado |
| `resources/views/notes/create.blade.php` | Vista del formulario de creación |

###  5.4 Archivos modificados respecto al proyecto base

| Archivo | Cambio |
|---|---|
| `app/Models/User.php` | Se añadió la relación "un usuario tiene muchas notas" |
| `routes/web.php` | Se importó el controlador y se agregó el grupo de rutas protegidas |
| `resources/views/layouts/navigation.blade.php` | Enlace de "Notas" en el menú |
| `resources/views/welcome.blade.php` | Página de inicio personalizada con `@vite()` |

Archivos de Breeze que **no se tocan** pero conviene conocer: `routes/auth.php`, `resources/views/auth/*`, `app/Http/Controllers/Auth/*` y `app/Http/Requests/Auth/LoginRequest.php`.

###  5.5 Herramientas de Composer y npm en el proyecto

| Herramienta | Qué hace |
|---|---|
| **Composer** (`composer.json` / `composer.lock`) | Instala Laravel y Breeze |
| **npm** (`package.json` / `package-lock.json`) | Instala Vite, Tailwind y Alpine |
| `npm run dev` | Servidor de Vite con HMR para desarrollar |
| `npx vite build` | Genera el build de producción en `public/build/` |

---

##  6. Práctica a realizar

###  6.1 Descripción

Ampliarás el proyecto en dos partes independientes y observarás el comportamiento de Vite.

###  6.2 Parte 1: Edición de notas (PHP y Blade)

**Requisitos:**

- [ ] Crear las rutas `notes.edit` (GET) y `notes.update` (PUT/PATCH), dentro del grupo protegido por `auth`.
- [ ] Agregar los métodos `edit` y `update` en `NoteController`, usando *route model binding*.
- [ ] Validar los datos igual que en el registro de una nota nueva.
- [ ] Impedir que un usuario edite notas de otro (respuesta 403).
- [ ] Crear la vista `resources/views/notes/edit.blade.php` con el formulario precargado con los datos actuales.
- [ ] Agregar un botón o enlace **Editar** en cada nota del listado.
- [ ] Al actualizar, redirigir al listado con un mensaje de confirmación.

###  6.3 Parte 2: Librería de npm

**Requisitos:**

- [ ] Elegir **una** librería (ejemplos: `sweetalert2` o `toastify-js`).
- [ ] Instalarla con npm y confirmar que aparece en `package.json`.
- [ ] Importarla en `resources/js/app.js`.
- [ ] Usarla en una acción del CRUD, por ejemplo:
  - confirmación visual antes de eliminar una nota, o
  - notificación emergente al crear o actualizar.
- [ ] Verificar que funciona con `npm run dev`.

###  6.4 Entregables

-  Captura de pantalla de la edición funcionando y de la librería en acción.
-  Reporte de la práctica.

---

##  7. Referencias (APA 7)

Composer. (s. f.). *Composer documentation*. https://getcomposer.org/doc/

Git. (s. f.). *git-clone documentation*. https://git-scm.com/docs/git-clone

Laravel. (s. f.-a). *Asset bundling (Vite)*. https://laravel.com/docs/vite

Laravel. (s. f.-b). *Blade templates*. https://laravel.com/docs/blade

Laravel. (s. f.-c). *Installation*. https://laravel.com/docs/installation

Laravel. (s. f.-d). *Routing*. https://laravel.com/docs/routing

Laravel. (s. f.-e). *Starter kits*. https://laravel.com/docs/starter-kits

Laravel. (s. f.-f). *Validation*. https://laravel.com/docs/validation

Laravel Herd. (s. f.). *Herd documentation*. https://herd.laravel.com/docs

Microsoft. (s. f.). *Introduction to Git in VS Code*. Visual Studio Code Documentation. https://code.visualstudio.com/docs/sourcecontrol/intro-to-git

npm, Inc. (s. f.). *npm documentation*. https://docs.npmjs.com/

SweetAlert2. (s. f.). *SweetAlert2*. https://sweetalert2.github.io/

The PHP Group. (s. f.). *PHP manual*. https://www.php.net/manual/en/

Vite. (s. f.-a). *Building for production*. https://vite.dev/guide/build

Vite. (s. f.-b). *Features*. https://vite.dev/guide/features

---

<div align="center">

Hecho para fines educativos · Clona, modifica y practica 💡

</div>
