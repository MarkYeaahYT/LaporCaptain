$(document).ready(function() {

    $(".genlapor").on("click", function() {
        $("#datalapor").empty()
        var from = $("#dari").val();
        var end = $("#sampai").val();
        $.ajax({
            type: 'POST',
            url: '/admin/data_laporan',
            data: {
                from: from,
                end: end 
            },
            dataType: 'JSON',
            success: function(r) {
                // console.log(r)
                r.forEach(e => {
                    var html = '<tr>'+
                                '<td>'+e.pengaduan_tgl_pengaduan+'</td>'+
                                '<td>'+e.pengaduan_nik+'</td>'+
                                '<td>'+e.pengaduan_isi_laporan+'</td>'+
                                '<td>'+e.pengaduan_foto+'</td>'+
                                '<td>'+e.tanggapan_tgl_tanggapan+'</td>'+
                                '<td>'+e.tanggapan_tanggapan+'</td>'+
                                '<td>'+e.petugas_nama_petugas+'</td>'+
                             '</tr>';
                 $("#datalapor").append(html)    
                })
                
            }
        })
    })
})