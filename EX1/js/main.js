$('.add').on('click', function() {
  var good = {};
  good.name = $(this).closest('tr').find('.name').text();
  good.price = $(this).closest('tr').find('.price').text();
  good.quantity = $(this).closest('tr').find('.quantity').val();

  $.ajax({
    url: 'add.php',
    type: 'post',
    data: good,
    success: location.reload(),
    error: function () {
      alert('Произошла ошибка');
    }
  })
});

$('.remove').on('click', function() {
  var name = $(this).closest('tr').find('.name').text();

  console.log(name);
  $.ajax({
    url: 'delete.php',
    type: 'post',
    data: `name=${name}`,
    success: location.reload(),
    // success: function(message) {
    //   console.log(message);
    // },
    error: function () {
      alert('Произошла ошибка');
    }
  })
});