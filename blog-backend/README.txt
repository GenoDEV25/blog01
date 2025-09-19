Backend (Admin Dashboard):
Incluye un login simple para un usuario administrador. Desde el panel se puede:

Crear nuevos posts con título, resumen, categoría y una imagen.

Editar posts existentes, manteniendo la imagen anterior si no se sube una nueva.

Eliminar posts del sistema.

Validar todos los campos del formulario en el servidor: el título y resumen son obligatorios, la categoría debe seleccionarse de una lista y la imagen debe ser válida.

Validaciones y manejo de imágenes:

Al crear un post, la imagen es obligatoria y se valida que sea un archivo de imagen (JPG, PNG o WEBP) con tamaño máximo de 2MB.

Al actualizar un post, la imagen es opcional. Si se sube una nueva, se reemplaza la anterior; si no, se mantiene la imagen existente.

Todos los datos del formulario se validan en el backend antes de guardarse.

Código y flujo:

PostsController maneja todas las operaciones CRUD.

Se usan validationRulesCreate y validationRulesUpdate para diferenciar la validación al crear o actualizar.

Se utiliza session()->getFlashdata() y old() para mostrar errores y mantener los datos ingresados cuando falla la validación.

Las imágenes se guardan en /public/uploads y se renombran automáticamente para evitar conflictos.

La fecha de creación se guarda automáticamente al crear el post y se conserva al editarlo.

Categorías:
Las categorías están predefinidas en la base de datos y se seleccionan mediante un <select> en los formularios, evitando que el usuario escriba texto libre.

Estilo:
Se utilizó Tailwind CSS para mantener una interfaz limpia, moderna y consistente en todos los formularios y el panel administrativo.