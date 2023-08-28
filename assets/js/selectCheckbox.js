// Función para marcar checkboxes basados en las variables de sesión
function markCheckboxes() {
    const labelsCheckboxes = document.querySelectorAll('[name="labels[]"]');
    const categoriesCheckboxes = document.querySelectorAll('[name="categories[]"]');

    labelsCheckboxes.forEach(checkbox => {
        if (dataFilter.labels.includes(checkbox.value)) {
            checkbox.checked = true;
        }
    });

    categoriesCheckboxes.forEach(checkbox => {
        if (dataFilter.categories.includes(checkbox.value)) {
            checkbox.checked = true;
        }
    });
}

// Ejecutar la función cuando se carga la página
window.addEventListener('DOMContentLoaded', markCheckboxes);