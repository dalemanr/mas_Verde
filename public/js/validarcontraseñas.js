// Obtener el formulario y los campos de contraseña
const form = document.querySelector('form');
const passwordInput = document.querySelector('#password');
const confirmPasswordInput = document.querySelector('#password-confirm');

// Agregar evento de escucha al formulario
form.addEventListener('submit', (event) => {
  // Obtener los valores de las contraseñas
  const passwordValue = passwordInput.value;
  const confirmPasswordValue = confirmPasswordInput.value;

  // Comparar las contraseñas
  if (passwordValue !== confirmPasswordValue) {
    // Mostrar un mensaje de error
    alert('Las contraseñas no coinciden. Por favor, inténtelo de nuevo.');

    // Evitar que se envíe el formulario
    event.preventDefault();
  }
});