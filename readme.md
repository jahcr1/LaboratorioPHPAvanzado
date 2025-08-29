# 🧪 Laboratorio PHP Avanzado: Funciones, Seguridad y POO

Proyecto de prácticas avanzadas en **PHP** que reúne ejemplos y ejercicios aplicados sobre el manejo de **funciones, programación orientada a objetos, seguridad y procesamiento de datos**.  
Este laboratorio está pensado como una **base de estudio y referencia** para desarrolladores que deseen mejorar sus habilidades en PHP con casos de uso reales.

---

## 📸 Capturas de Pantalla

| Fechas y Horarios                   | Procesamiento de Imágenes               | Captcha / Seguridad                   |
| ----------------------------------- | --------------------------------------- | ------------------------------------- |
| ![Fechas](./screenshots/fechas.png) | ![Imágenes](./screenshots/imagenes.png) | ![Captcha](./screenshots/captcha.png) |

---

## ⚙️ Tecnologías y Herramientas

- **PHP 8+**
- **MySQL / PDO** (consultas seguras)
- **GD Library** (procesamiento de imágenes)
- **Google reCAPTCHA v2**
- **Funciones nativas de PHP 8+** (para diversos scripts)

---

## 📂 Estructura del Proyecto

```
📦 PHP_Avanzado/
├── clase1/ # Manejo de Fechas
│ ├── componentes/ # Scripts para lógica Backend
│ ├── index.php # Página principal de demostración
│ ├── estilos.css # Estilos CSS
│ ├── botonera.php # Botonera Principal como enrutador
│ ├── unidad1.php # Interfaz de la Unidad 1
│ ├── unidad2.php # Interfaz de la Unidad 2
│ ├── unidad3.php # Interfaz de la Unidad 3
│ ├── unidad4.php # Interfaz de la Unidad 4
│ ├── unidad5.php # Interfaz de la Unidad 5
│ ├── unidad6.php # Interfaz de la Unidad 6
│ ├── unidad7.php # Interfaz de la Unidad 7
│ └── unidad8.php # Interfaz de la Unidad 8
├── clase2/ # Manejo de Fechas v2
├── clase3/ # Manejo Solicitudes GET/POST
├── clase4/ # Manejo Imagenes Dinámicas
├── clase5/ # Manejo de Captchas
├── clase6/ # POO Basics
├── clase7/ # POO Intermedio
├── clase8/ # POO Avanzado + PDO
│ ├── clases/ # Carpeta con Clases POO para lógica Backend
│ ├── componentes/ # Carpeta con scripts para lógica Backend
│ ├── imagenes/ # Carpeta con Imágenes de prueba
│ ├── index.php # Página principal de demostración
│ ├── estilos.css # Estilos CSS
│ ├── botonera.php # Botonera Principal como enrutador
│ ├── altas.php # Script Backend
│ ├── caract_usuarios.php # Script Backend
│ ├── recursos.php # Script Backend
│ ├── productos.sql # Base de datos para productos
│ ├── consultas.sql # Base de datos para las consultas
│ ├── unidad1.php # Interfaz de la Unidad 1
│ ├── unidad2.php # Interfaz de la Unidad 2
│ ├── unidad3.php # Interfaz de la Unidad 3
│ ├── unidad4.php # Interfaz de la Unidad 4
│ ├── unidad5.php # Interfaz de la Unidad 5
│ ├── unidad6.php # Interfaz de la Unidad 6
│ ├── unidad7.php # Interfaz de la Unidad 7
│ └── unidad8.php # Interfaz de la Unidad 8
├── screenshots/ # Capturas de funcionalidades
└── README.md # Este archivo

## 🚀 Funcionalidades Clave

- 📅 **Manejo avanzado de Fechas y Horarios** (cálculos, formatos, conversiones).
- 📂 **Gestión de Ficheros y Directorios**: creación, escritura, lectura y borrado dinámico.
- 🖼️ **Procesamiento de Imágenes** con **GD Library**:
  - Generación de **thumbnails**.
  - Aplicación de **marcas de agua** para protección de imágenes.
  - Redimensionamiento automático.
- 🔐 **Seguridad aplicada en formularios**:
  - Captcha personalizados.
  - Google reCAPTCHA v2.
  - Validaciones adicionales para inputs.
- 🧩 **Programación Orientada a Objetos (POO)**:
  - Definición y uso de clases.
  - Creación y manipulación de objetos.
  - Encapsulación y herencia básica.
- 🛡️ **Consultas seguras con PDO**: prevención de ataques **SQL Injection**.
- 📚 **Buenas prácticas de organización de código** en proyectos PHP.

---

## 🔧 Instalación (Local)

1. Clonar el repositorio

   ```bash
   git clone https://github.com/tuusuario/LaboratorioPHPAvanzado.git

   ```

2. Ingresar al proyecto
   cd LaboratorioPHPAvanzado

3. Instalar dependencias con Composer
   composer install

4. Configurar el archivo .env con tus credenciales de base de datos y llaves de Google reCAPTCHA.

5. Levantar el proyecto con Apache o un entorno local como XAMPP, WAMP o Laragon.


📝  Mejoras Futuras

- 🧩 Dashboard de ejemplos ejecutables con interfaz gráfica.

- 🧩 Agregar sección de expresiones regulares (RegEx) en PHP.

- 🧩 Implementar subida de archivos con validaciones robustas.

- 🧩 Añadir ejemplos de APIs externas (ej. consumo de JSON).

- 🧩 Integrar testing unitario con PHPUnit.

🧑‍💻 Autor

[Martin Contreras]
Desarrollador Web / Backend PHP
📧 martin.contreras.dev@gmail.com

🌐 [martincontrerasdev.com](https://martincontrerasdev.com/)

📄 Licencia

Este proyecto está bajo la licencia MIT. Consulta el archivo LICENSE para más información.
