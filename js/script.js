$.getJSON('data/pizza.json', function (data) {
	let menu = data.menu;

	$.each(menu, function(i, data){
		$("#daftar-menu").append('<div class="col-md-4 mt-2"><div class="card" style="width: 18rem;"><img src="img/pizza/'+ data.gambar +'" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><p class="card-text">'+ data.deskripsi +'</p><h5 class="card-title">'+ data.harga +'</h5><a href="#" class="btn btn-primary">Pesan Sekarang!</a> </div></div></div>');
	});
});