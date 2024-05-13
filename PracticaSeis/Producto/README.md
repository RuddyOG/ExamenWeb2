# Proyecto Productos

Este es un proyecto que incluye un sistema de gestión de productos y usuarios.

## Descripción

El proyecto está diseñado para permitir a los usuarios registrar y gestionar productos en una base de datos. Además, proporciona funciones de autenticación de usuarios para garantizar la seguridad de los datos.

## Características

- Registro y autenticación de usuarios.
- Gestión de productos: creación, edición, eliminación y visualización.
- Almacenamiento seguro de contraseñas utilizando la función `password_hash()` de PHP.
- Utilización de prepared statements para prevenir inyecciones SQL.
- Interfaz de usuario simple y fácil de usar.

## Tecnologías Utilizadas

- PHP: Lenguaje de programación del lado del servidor.
- MySQL: Sistema de gestión de bases de datos relacional.
- HTML/CSS: Tecnologías para el desarrollo de la interfaz de usuario.

## Requisitos

- Servidor web (por ejemplo, Apache o Nginx).
- Servidor de base de datos MySQL (nombre de la base de datos: practica6).
- PHP instalado en el servidor.

## Instalación

1. Clona este repositorio en tu servidor web.
2. Importa la base de datos `database.sql` en tu servidor de base de datos MySQL (asegúrate de crear una base de datos llamada `practica6` antes de importarla).
3. Configura la conexión a la base de datos en el archivo `dbcxt.php`.
4. Asegúrate de que los permisos de los archivos y directorios estén configurados adecuadamente.

## Uso

1. Accede a la página de inicio de sesión (`signIn.php`) para iniciar sesión con tu cuenta de usuario.
2. Una vez iniciada sesión, podrás acceder a las funciones de gestión de productos en la página principal (`main.php`).
3. Desde la página principal, podrás agregar, editar, eliminar y ver detalles de los productos.

## Contribuciones

Las contribuciones son bienvenidas. Si deseas contribuir a este proyecto, por favor sigue estos pasos:

1. Haz un fork del proyecto.
2. Crea una nueva rama (`git checkout -b feature/nueva-caracteristica`).
3. Realiza tus cambios y haz commits (`git commit -am 'Añadir nueva característica'`).
4. Sube tus cambios (`git push origin feature/nueva-caracteristica`).
5. Crea un nuevo Pull Request.

## Licencia

Este proyecto está licenciado bajo la de RuddyTech.