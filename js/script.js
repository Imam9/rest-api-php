$.getJSON("data/pizza.json", function (data) {
  let menu = data.menu;
  $.each(menu, function (i, data) {
    $('#daftar-menu').append(' <div class="col-md-4"><div class="card mb-3" style="width: 18rem;"><img class="card-img-top" src="img/menu/'+ data.gambar +'" alt="Card image cap"><div class="card-body"><h5 class="card-title">'+data.nama+'</h5><p class="card-text">'+data.deskripsi+'</p><h5 class="card-title">'+data.harga+'</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>');
  });
});

$('.nav-link').on('click', function () {
  $('.nav-link').removeClass('active');
  $(this).addClass('active');

  let kategori = $(this).html();

  $('h2').html('kategori')
});
 