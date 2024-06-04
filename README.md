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

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

#DESDE AQUI LOS PASOS
#Manual de instalación y configuración para el Ambiente de Desarrollo

##GitDesk
Es preferible utilizar GitDesk para las clonaciones del proyecto debido a las múltiples ventajas que ofrece esta herramienta. GitDesk proporciona una interfaz gráfica intuitiva que facilita la gestión de repositorios. Su capacidad para integrarse con otras herramientas de desarrollo y su soporte para múltiples plataformas lo convierten en una opción robusta y versátil para gestionar proyectos de software.

Una vez que tengamos instalado GitDesk, procederemos a clonar el proyecto. Durante este proceso, en el campo "Local Path" debemos ingresar la ruta correspondiente a la carpeta www de Laragon. Por ejemplo, si Laragon está instalado en la ruta predeterminada, la ruta sería *C:\laragon\www*. Esto se debe a que Laragon es un entorno de desarrollo local que organiza los proyectos web en su carpeta www, permitiendo acceder a ellos de manera directa a través del servidor local que proporciona.

A continuación, procedemos a realizar la clonación del proyecto. Una vez completada esta operación, abriremos el repositorio clonado con Visual Studio Code (VS Code). Al abrir el proyecto, VS Code puede solicitar la instalación de Git Bash.

Esta herramienta es esencial por las siguientes razones:

Git Bash: Ofrece un entorno de línea de comandos basado en Unix en Windows, permitiendo utilizar comandos Git y scripts de shell de manera similar a cómo se harían en sistemas operativos basados en Unix (como Linux y macOS). Esto es particularmente útil para desarrolladores que están acostumbrados a trabajar en entornos Unix o que necesitan ejecutar scripts específicos que requieren un entorno Unix.
Por lo tanto, la instalación de esta herramienta es fundamental para asegurarse de que Visual Studio Code pueda interactuar correctamente con Git, permitiendo a los desarrolladores gestionar el código fuente de manera efectiva y aprovechar al máximo las capacidades de control de versiones que ofrece Git.

##Instalación en otra máquina desde un repositorio Git
1. Descargar e instalar Laragon enlace: https://laragon.org/download/index.html
2. Clonar el repositorio en la carpeta Laragon/www. Utilice GitDesk para clonar el repositorio. En el campo "Local Path", ingrese la ruta correspondiente a la carpeta www de Laragon (por ejemplo, C:\laragon\www).
3. Abrir el proyecto en Visual Studio Code:
	- Una vez completada la clonación, abra el repositorio clonado con Visual Studio Code.
	- Copie el archivo .env.example y renómbrelo a .env directamente en Visual Studio Code.

**Abrir la terminal de Laragon**
3. Instalar dependencias php con el comando `composer`
4. Instalar dependencias Inertia.js con el comando `npm install`
5. Generar la Key de la Aplicación con el comando `php artisan key:generate`
6. Migrar las Tablas en la Base de Datos con el comando `php artisan migrate`
7. Poblar las Tablas con el comando `php artisan db:seed --class=TranslationsTableSeeder`
8. Para que los cambios en los archivos Vue.js sean notorios usar el comando `npm run dev`
**Adicional**
Para limpiar la Base de Datos usamos el comando `php artisan migrate:refresh`

Con estos pasos, tendrás un entorno de desarrollo completamente configurado y listo para trabajar en tu proyecto.
