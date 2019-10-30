$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: 'php/lista_categoria.php'
  })
  .done(function(lista_op){
    $('#tipo_categoria').html(lista_op)
  })
  .fail(function(){
    alert('Hubo un errror al cargar la lista de tipos de categoria')
  })

 
})