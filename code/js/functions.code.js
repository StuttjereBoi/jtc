function setErr(className){
  for(i = 0; i < className.length; i++){
    $(`.${className[i]}`).parent().find('.err_list').append(`<span class='${className[i]}_err'></span>`);
  }
}

function chkEmp(className, err_message){
  $(`.${className}_err`).html(($(`.${className}`).val().length <= 0) ? err_message : '');
  ($(`.${className}`).val().length <= 0) ? $(`.${className}_err`).css({'display': 'block'}) : $(`.${className}_err`).css({'display': 'none'});
  return ($(`.${className}`).val().length <= 0) ? null : $(`.${className}`).val()
}
