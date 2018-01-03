$(document).ready(function () {
  $("#alert").hide();
  $(".btn-delete").click(function (e) {
    e.preventDefault();
    if (!confirm("¿Está seguro de eliminar?")) {
      return false;
    };
    var fila = $(this).parents("tr");
    var formulario = $(this).parents("form");
    var url = formulario.attr("action");
    $("#alert").show();
    $.ajax({
      type: "POST",
      url: url,
      data: formulario.serialize(),
      dataType: "json",
      success: function (response) {
        fila.fadeOut();
        $("#ProductoTotal").html(response.total);
        $("#alert").html(response.mensaje);
      },
      error: function (error) {
        $("#alert").html("Algo salió mal");
        console.log(error);
      }
    });
  });
});