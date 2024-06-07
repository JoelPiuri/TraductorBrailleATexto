### Documentación del Ambiente de Desarrollo

El proyecto está desarrollado usando **Visual Studio Code**, **Vue.js**, **Inertia.js** y **PHP**. Aquí se detalla cómo configurar el entorno de desarrollo:

#### Requisitos Previos

1. **Node.js**: Descargar e instalar desde [nodejs.org](https://nodejs.org/).
2. **Composer**: Descargar e instalar desde [getcomposer.org](https://getcomposer.org/).
3. **PHP**: Versión mínima recomendada es PHP 7.4.

#### Pasos de Instalación

1. **Clonar el repositorio**:

    ```sh
    git clone https://github.com/usuario/TraductorBrailleATexto.git
    cd TraductorBrailleATexto
    ```

2. **Instalar las dependencias de PHP**:

    ```sh
    composer install
    ```

3. **Instalar las dependencias de Node.js**:

    ```sh
    npm install
    ```

4. **Crear y configurar el archivo `.env`**:

    ```sh
    cp .env.example .env
    ```

    Editar el archivo `.env` con la configuración de la base de datos y otras variables de entorno necesarias.

5. **Generar la clave de la aplicación**:

    ```sh
    php artisan key:generate
    ```

6. **Ejecutar las migraciones de la base de datos**:

    ```sh
    php artisan migrate
    ```

7. **Iniciar el servidor de desarrollo**:

    ```sh
    php artisan serve
    npm run dev
    ```

#### Configuración en Visual Studio Code

1. **Instalar las extensiones recomendadas**:
    - PHP Intelephense
    - Vue Language Features (Volar)
    - ESLint
    - Prettier

2. **Configurar los depuradores**:
    - Configurar el depurador para PHP.
    - Configurar el depurador para JavaScript/Node.js.
