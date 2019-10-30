$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: 'php/tipo_reporte.php'
  })
  .done(function(lista_op){
    $('#tipo_reporte').html(lista_op)
  })
  .fail(function(){
    alert('Hubo un errror al cargar la lista de tipos de reportes')
  })

 
})