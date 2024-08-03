// jQuery(document); ATAU
$(document).ready(function () {
  // cara menghilangkan tombolcari
  // $('#tombol-cari').hide();

  // event ketika keyword ditulis
  // fungsi load hanya bisa GET
  $('#keyword').on('keyup', function () {
    // munculkan icon loading
    $('.loader').show();

    // ajax menggunakan load
    // $('#container').load('ajax/ebooks.php?keyword=' + $('#keyword').val());


    // $.get()
    $.get('ajax/ebooks.php?keyword=' + $('#keyword').val(), function (data) {
      $('#container').html(data);
      $('.loader').hide();
    });
  });
});