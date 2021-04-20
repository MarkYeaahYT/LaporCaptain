$(document).ready(function(){

	

	$("#datareal").on("click", ".inpo", function(){
		// var id = $(this).data("id");
		// var nama = $(this).data("nama");
		// var judul = $(this).data("judul");
		// var tgl = $(this).data("tgl");
		// var isi = $(this).data("isi");
		// var foto = $(this).data("foto");

		// $("#id").val(id)
		// $("#pelapor").val(nama)
		// $("#judul").val(judul)
		// $("#tanggal").val(tgl)
		// $("#isil").text(isi)
		// $("#foto").attr("src", "/uploads/"+foto)
		// $("#modal_tanggap").modal("show");
		
	})

	$("#datareal").on("click", ".del", function () {
		var id = $(this).data("id");
		$.ajax({
			type: 'POST',
			url: '/admin/hapus',
			data: {
				id: id
			},
			dataType: 'JSON',
			success: function(r){
				ourtable.ajax.reload();
			}
		})
	})

})