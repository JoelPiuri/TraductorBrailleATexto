# Notas de Versión: Braille Cat Traducciones

**Nombre del Producto:** Braille Cat Traducciones

**Versión:** 1.0

**Fecha de Publicación:** 06/jun/2024

## Descripción General
"Braille Cat Traducciones" es una aplicación web diseñada para traducir texto en español a Braille. Utiliza el framework Laravel, con Inertia.js y Vue.js para el frontend. La base de datos usa Eloquent ORM y soporta caracteres UTF-8, incluyendo letras acentuadas.

## Funcionalidades Principales

### Interfaz de Usuario:
- **Input de Texto:** Permite al usuario ingresar texto en español.
- **Botón de Traducción:** Inicia la traducción del texto ingresado a Braille.
- **Visualización de Traducción:** Muestra el texto traducido a Braille en la interfaz.

### Traducción de Texto:
- Traducción de caracteres en español a sus equivalentes en Braille, incluyendo letras mayúsculas y minúsculas.
- Manejo de caracteres especiales y acentuados (á, é, í, ó, ú).

### Manejo de Caracteres Especiales:
- Inclusión de un marcador de número para secuencias numéricas.
- Inclusión de un marcador de mayúscula para letras mayúsculas.

### Comunicación con la Base de Datos:
- Uso de Eloquent ORM para gestionar las consultas.
- Base de datos con collation utf8mb4_bin para caracteres acentuados.

### Seguridad:
- Protección contra asignación masiva mediante configuración del atributo $fillable en el modelo Translation.

## Componentes Técnicos

### Frontend (Vue.js):
- Componente principal `Homepage.vue` que maneja la entrada y la solicitud de traducción.
- Uso de axios para solicitudes HTTP.

### Backend (Laravel):
- **Rutas:** Definición en `web.php` para manejar las solicitudes de traducción.
- **Controlador:** `TranslationController` procesa las solicitudes y realiza consultas a la base de datos.
- **Modelo:** `Translation` representa la tabla de traducciones en la base de datos.

### Base de Datos:
- Tabla `translations` con columnas `caracterEspanol` y `braille`.
- Uso de collation `utf8mb4_bin`.

## Conclusión
Esta version ofrece una herramienta funcional para traducir texto en español a Braille, con soporte para caracteres especiales y acentuados, asegurando la correcta codificación y seguridad.
