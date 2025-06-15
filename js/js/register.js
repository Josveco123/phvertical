document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('register');
    const menu = document.getElementById('user-register');

    // Función para cerrar el menú si está abierto y se hace clic fuera de él
    function closeMenuOutsideClick(event) {
        if (!menu.contains(event.target) && !button.contains(event.target)) {
            menu.classList.add('hidden');
            document.removeEventListener('click', closeMenuOutsideClick);
        }
    }

    button.addEventListener('click', function (event) {
        event.stopPropagation(); // Detiene la propagación para evitar cerrar el menú inmediatamente después de abrirlo
        menu.classList.toggle('hidden');
        if (!menu.classList.contains('hidden')) {
            document.addEventListener('click', closeMenuOutsideClick);
        }
    });
});


document.addEventListener('DOMContentLoaded', function() {
    var boton = document.getElementById('nosotros');

    boton.addEventListener('click', function() {
        boton.textContent = "NOSOTROS";
    });
  });
