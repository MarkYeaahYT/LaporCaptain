$(document).ready(function (){

	$.ajax({
		type: 'get',
		url: '/app/getdatapengaduan_all',
		dataType: 'JSON',
		success: function(r){
			console.log("ys")
			r.forEach(e => {
				if(e.pengaduan_status == 0){
					var button = '<a class="btn btn-danger">Belum</a>'
				}else if(e.pengaduan_status == "proses"){
					var button = '<a class="btn btn-primary">Proses</a>'
				}else if(e.pengaduan_status == "selesai"){
					var button = '<a class="btn btn-success">Selesai</a>'
				}

				if(e.pengaduan_foto == ""){
					$("#isipengaduan").append(
				'<div class="col-md-6 col-lg-4 mb-5">'+
                        '<div class="card" style="width: 18rem;">'+
                        '<img class="card-img-top" src="/uploads/default.png" alt="Card image cap">'+
                        '<div class="card-body">'+
                            '<h5 class="card-title">'+e.pengaduan_judul+'</h5>'+
                            '<h7 class="text-info">'+e.masyarakat_nama+'</h7>'+
                            '<p class="card-text">'+e.pengaduan_isi_laporan+'</p>'+
                            button+
                            '<hr>'+
                            '<p class="text-dark">'+e.pengaduan_tgl_pengaduan+'</p>'+
                        '</div>'+
                    '</div>'+
                  '</div>'
				)
				}else{
					$("#isipengaduan").append(
				'<div class="col-md-6 col-lg-4 mb-5">'+
                        '<div class="card" style="width: 18rem;">'+
                        '<img class="card-img-top" src="/uploads/'+e.pengaduan_foto+'" alt="Card image cap">'+
                        '<div class="card-body">'+
                            '<h5 class="card-title">'+e.pengaduan_judul+'</h5>'+
                            '<h7 class="text-info">'+e.masyarakat_nama+'</h7>'+
                            '<p class="card-text">'+e.pengaduan_isi_laporan+'</p>'+
                        	button+
                            '<hr>'+
                            '<p class="text-dark">'+e.pengaduan_tgl_pengaduan+'</p>'+
                        '</div>'+
                    '</div>'+
                  '</div>'
				)	
				}
					
			})
			
		}

	})
})