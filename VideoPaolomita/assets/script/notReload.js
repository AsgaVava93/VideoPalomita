<script type="text/javascript">
$(document).ready(function() {

  //click on form buton
  $("#boton").click(function(){

    //creating variables
    var nombre = $("#nombre").val();
    var tarea = $("#tarea").val();

  //call ajax
    $.ajax({

     //set type of sending data (GET Or POST)
      type: "POST",

      url: "resultado_mas.php",

      data: "nombre=" + nombre + "&tarea=" + tarea,
      dataType: "html",

      success: function(msg)
      {
        $("#risultado").html(msg); // messaggio di avvenuta mas valori al db (preso dal file risultado_mas.php) potete impostare anche un alert("Aggiunto, grazie!");
      },
      error: function()
      {
        alert("Fallo en la llamada, intentar otra vez..."); //sempre meglio impostare una callback in caso di fallimento
      }
    });
  });
});
</script>