
# Manual de Programador

# 1. Descripción del Proyecto
<p>
    El proyecto es un traductor de español a braille y viceversa, utilizando Laravel con Inertia.js y Vue.js. 
    La aplicación incluye una base de datos para almacenar las traducciones y cuenta con una interfaz de usuario para ingresar texto y obtener la traducción correspondiente.
</p>

# 2. Estructura del Proyecto

    app/Http/Controllers: Controladores de la aplicación.
    
    app/Models: Modelos de Eloquent.
    
    database/migrations: Migraciones de la base de datos.
    
    database/seeders: Seeders de la base de datos.
    
    resources/js/Components: Componentes Vue.js.
    
    resources/js/Pages: Páginas Vue.js.
# 3. Controladores
<p>
El controlador principal para las traducciones es TranslationController. Este controlador maneja las solicitudes de traducción y se comunica con la base de datos para obtener las traducciones necesarias.  
</p>
    
# 4. Modelos
<p>
    El modelo Translation representa la tabla de traducciones en la base de datos. Este modelo se utiliza para interactuar con las traducciones y realizar consultas.
</p>

# 5. Rutas
<p>
    Las rutas web están definidas en routes/web.php. Las rutas principales incluyen:
    
    /translate-to-braille: Ruta para traducir texto español a braille.
</p>

# 6.Componentes Vue.js
<p>
    Los componentes Vue.js están ubicados en resources/js/Components. Los componentes principales son:
    
    HeaderComponent.vue: Componente del encabezado.
    FooterComponent.vue: Componente del pie de página.
    
</p>

# 7.Páginas Vue.js
<p>
    Las páginas Vue.js están ubicadas en resources/js/Pages. Las páginas principales son:

    HomePage.vue: Página principal que contiene el formulario de traducción.
</p>
