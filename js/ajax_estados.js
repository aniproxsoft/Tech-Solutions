$(document).ready(function(){

 $('#estaditos').on('change', function(){
    var id = $('#estaditos').val()
   
    $.ajax({
      type: 'POST',
      url: 'getCity.php',
      data: {'id': id}
    })
    .done(function(listas){
      $('#city').html(listas)
    })
    .fail(function(){
      alert('Hubo un errror al cargar los vídeos')
    })
  })

  
})