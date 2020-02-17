
$(document).ready(function(){

  var id, pass;

  setErr(['id', 'pass']);

  $('form').submit(function(event){
    event.preventDefault();
  });

  $('.submit').click(function(){

    id = chkEmp('id', 'U heeft geen medewerkersnummer ingevoerd');
    pass = chkEmp('pass', 'U heeft geen wachtwoord ingevoerd');

    if(id == null || pass == null){return}

    $.post('../code/php/login.code.php', {
      login: true,
      id: id,
      pass: pass
    }, function(cb){
      if(cb.length !== 0){
        alert(cb);
      }else{
        window.location.href = 'profile.php';
      }
    });

  });





});
