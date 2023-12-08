$(document).ready(function(){
  console.log("Documento listo");

  // Abrir el modal
  $("#openModalBtn").click(function(){
    console.log("Botón clickeado");
    $("#myModal").fadeIn();
  });

  // Cerrar el modal haciendo clic en la 'x'
  $(".close").click(function(){
    console.log("Clic en 'x'");
    $("#myModal").fadeOut();
  });

  // Cerrar el modal haciendo clic fuera de él
  $(window).click(function(event){
    console.log("Clic en la ventana");
    if (event.target.id === "myModal") {
      $("#myModal").fadeOut();
    }
  });
});
