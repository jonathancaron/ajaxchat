$(document).ready(function(){
  recupMessages();
  $('.formulaire').submit(function(){
    let nom = $('.nom').val();
    let message = $('.message').val();

    $.post('./send.php', {nom:nom,message:message}, function(donnees){
      $('.return').html(donnees);
      $('.nom').val('');
      $('.message').val('');
      recupMessages();
    });
    return false;
  });

  function recupMessages(){
    $.post('request.php', function(data){
      $('.afficher').html(data);

    });

  }
  setInterval(recupMessages,1000);


});
