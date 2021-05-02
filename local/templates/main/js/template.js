$(function() {
  $('.callback-request').submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: '/ajax/requests.php',
        type: 'post',
        data: $('.callback-request').serialize(),
        dataType: 'json',
        success: function() {
          alert('Спасибо, ваша заявка отправлена, ожидайте звонка!');
          location.reload();
        }
    });
  });
});
