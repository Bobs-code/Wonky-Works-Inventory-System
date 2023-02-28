$(document).ready(function () {
  $('form').submit(function (event) {
    //  tESTING THE COMMENT
    var formData = {
      name: $('#item_name').val(),
      email: $('#item_category').val(),
    };

    $.ajax({
      type: 'POST',
      url: '../includes/add_item_process.php',
      data: formData,
      dataType: 'json',
      encode: true,
    }).done(function (data) {
      // console.log(data);
    });

    event.preventDefault();
  });
});
