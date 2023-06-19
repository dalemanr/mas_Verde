$(document).ready(function() {
  $('#myModalButton').click(function() {
    $('#myModal').addClass('show');
  });
  
  // Cierra el modal cuando se hace clic en el botón de cerrar
  $('.modal-close').click(function() {
    $('#myModal').removeClass('show');
  });
  
  // Cierra el modal cuando se hace clic fuera del contenido
  $(window).click(function(event) {
    if (event.target == $('#myModal')[0]) {
      $('#myModal').removeClass('show');
    }
  });
});