$(document).ready(function(){

	// $("#datareal").on("click", ".del", function(){
	// 	// console.log("hello");
	// })

	$("#datareal").on("click", ".status", function(){
		var id = $(this).data("id");
		var nama = $(this).data("nama");
		var judul = $(this).data("judul");
		var tgl = $(this).data("tgl");
		var isi = $(this).data("isi");
		var foto = $(this).data("foto");

		$("#id").val(id)
		$("#pelapor").val(nama)
		$("#judul").val(judul)
		$("#tanggal").val(tgl)
		$("#isil").text(isi)
		$("#foto").attr("src", "/uploads/"+foto)
		$("#modal_tanggap").modal("show");
		
	})

	$(".selesai").on("click", function(){
		var id = $("#id").val()
		var tanggapan = $("#tanggapan").val()

		$.ajax({
			type: 'POST',
			url: '/petugas/changestatus_to_s',
			data: {
				id: id,
				tanggapan: tanggapan
			},
			dataType: 'JSON',
			success: function(r){
				console.log(r)
				ourtable.ajax.reload()
			}
		})
	})

})