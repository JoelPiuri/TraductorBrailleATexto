# Manual de Usuario: Programa de Traducción Español a Braille

## Introducción
Este programa está diseñado para ayudar a los usuarios a traducir texto en español a Braille de manera eficiente y precisa. Utilizando tecnologías web modernas, el programa proporciona una interfaz accesible y fácil de usar para realizar traducciones rápidas y precisas.

## Requisitos Previos

- PHP >= 7.4
- Composer
- Node.js y npm
- MySQL


## Funcionalidades del Programa

### Interfaz de Usuario
La interfaz está diseñada para ser intuitiva y fácil de usar, incluso para aquellos que no están familiarizados con este tipo de herramientas tecnológicas.

![interfaz de usuario](/images/interfazTraductor.jpeg)

Como podemos ver se divide en dos partes: Traduccion de español a braile y la traduccion de braile a español

#### Ingreso de Texto
- **Campo de Texto**: Ingrese el texto en español que desea traducir en el campo proporcionado.

#### Botón de Traducción
- **Traducir**: Después de ingresar el texto, presione el botón "Traducir" para iniciar el proceso de traducción al Braille.

#### Visualización de Resultados
- **Texto en Braille**: El texto traducido se mostrará en la misma página, permitiendo al usuario ver ambos, el texto original y el texto en Braille.

### Traducción de Texto
El programa traduce el texto ingresado del español al Braille, considerando las particularidades del idioma incluyendo:
- Letras mayúsculas y minúsculas
- Caracteres especiales y acentuados (á, é, í, ó, ú)
- Números y símbolos comunes

![Ejecucion de español a braile](/images/Ejecucion1.jpeg)

### Manejo de Caracteres Especiales
El sistema automáticamente detecta y maneja los caracteres especiales para asegurar una traducción precisa:
- **Marcadores de número**: Se agregan automáticamente al detectar secuencias numéricas.
- **Mayúsculas**: Se indica en Braille cuando el texto original utiliza mayúsculas.

![Ejecucion con Mayusculas](/images/Ejecucion2.jpeg)


## Soporte Técnico
Para cualquier problema técnico o consulta, por favor contacte a nuestro equipo de soporte a través del usuario de GitHub Godleve1 durante horas hábiles.

## Actualizaciones
Se recomienda a los usuarios revisar periódicamente el repositorio de GitHub ya que este programa está en constante desarrollo por lo cual posteriormente se presentarán nuevas versiones.

## Conclusión
Este manual proporciona una guía completa para utilizar el programa de traducción de español a Braille. Agradecemos a los usuarios por elegir nuestro programa y esperamos que les sea de gran ayuda en sus necesidades de traducción.
