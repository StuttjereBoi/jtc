
$(document).ready(function(){
  $.post('../code/php/wordtest.code.php', {
    get: true
  }, function(words){

    words = words.split(',');

    var counter = 0;

    var half = Math.ceil(words.length / 2);
    var question = words.splice(0, half);
    var answer = words.splice(- half);

    $('form').submit(function(event){
      event.preventDefault();
    });

    $('.question').html(question[counter]);

    $('.check').click(function(){
      if($('.answer').val() == answer[counter]){

        counter++;
        $('.question').html(question[counter]);

      }else{
        alert("wrong");
      }
    });

  });
});
