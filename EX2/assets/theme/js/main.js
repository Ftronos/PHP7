$('#login-form').on('submit', function (e) {
  e.preventDefault();

  $(this).find('.response').removeClass('alert alert-danger text-center').empty();

  var name = $(this).find('#login').val();
  var pass = $(this).find('#pass').val();
  var that = $(this);

  $.ajax({
    url: 'server.php',
    type: 'post',
    data: `login=${name}&pass=${pass}`,
    success: function (message) {
      if (message === '1') {
        location.reload();
      } else {
        that.find('.response').addClass('alert alert-danger text-center').text('Логин или пароль неправильный');
      }
    }
  })
})