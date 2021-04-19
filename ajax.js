$( document ).ready(function() {
  $("#btn").click(
  function(){
    sendAjaxForm('answer', 'ajax_form', 'calc.php');
    return false; 
  }
);
});

function sendAjaxForm(answer, ajax_form, url) {
  $.ajax({
      url:     url,
      type:     "POST",
      dataType: "html", 
      data: $("#"+ajax_form).serialize(), 
      success: function(response) { 
        result = $.parseJSON(response);
        $('#answer').html('Результат: ' + result.sum);
    },
    error: function(response) { 
          $('#answer').html('Ошибка. Данные не отправлены.');
    }
 });
}