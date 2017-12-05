$(document).ready(function(){
  $('.formulaire').submit(function(){
    let nom = $('.nom').val();
    let message = $('.message').val();

    $.post('./send.php', {nom:nom,message:message}, function(donnees){
      $('.afficher').html(donnees);

    });
    return false;
  });


});
