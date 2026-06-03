# Sitio PHP

Este proyecto es un sitio web en PHP con estructura MVC básica.

## 📂 Estructura de carpetas
- **assets/** → Archivos estáticos (CSS, JS, imágenes).
- **config/** → De momento vacía, se usará más adelante para configuración.
- **controladores/** → Vacía por ahora, se completará con la lógica de control.
- **modelos/** → También vacía, se usará a futuro para manejo de datos.
- **vistas/** → Plantillas y páginas que se muestran al usuario.
- **index.php** → Punto de entrada principal.

## 🎨 Vistas actuales
- **Galería**: se abre antes del footer en la página principal.  
- **Registro**: vista al darle clic en *Registrarse*.  
- **Index**: página inicial del sitio.  
- **Contacto**: accesible desde un botón en el footer, con validaciones en JS.  
- **Lugares para alquilar**: ya implementada, será una de las secciones principales del sitio.  

## 🌙 Funcionalidades
- **Modo noche / oscuro**: totalmente funcional, también en mobile.  
- **Modo mobile**: diseño táctil y responsive, con menú acordeón.  
- **Validaciones JS**: en el formulario de contacto.  
- **Filtros**: actualmente funciona solo el filtro de la sección *Explora espacios* (mitad de la página).  
- **Barra de búsqueda (desktop)**: multi-step interactiva, con tres opciones encadenadas que van apareciendo una tras otra. Al hacer scroll hacia abajo se minimiza y se integra al navbar.
  - Al hacer scroll hacia abajo, la barra se minimiza y se integra al navbar.  

## 🚀 Próximamente
- El hero actual será reemplazado.  
- Se agregarán 2 secciones nuevas:  
  - Servicios  
  - Shows  
- La sección de **Lugares para alquilar** se mantiene como parte principal del sitio.  

## ✍️ Notas
Este repo se irá completando con más vistas y lógica de negocio.
