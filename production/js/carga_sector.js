$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: 'php/lista_sector.php'
  })
  .done(function(lista_op){
    $('#tipo_sector').html(lista_op)
  })
  .fail(function(){
    alert('Hubo un errror al cargar la lista de sectores')
  })

 
})