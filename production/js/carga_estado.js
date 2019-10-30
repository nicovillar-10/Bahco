$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: 'php/lista_estado.php'
  })
  .done(function(lista_op){
    $('#tipo_estado').html(lista_op)
  })
  .fail(function(){
    alert('Hubo un errror al cargar la lista de estados')
  })

 
})