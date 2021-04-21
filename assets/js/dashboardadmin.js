$(document).ready(function() {

    $("#datareal").on("click", ".del", function() {
        console.log("hello");
    })

    $("#datareal").on("click", ".status", function() {
        var id = $(this).data("id");
        $.ajax({
            type: 'POST',
            url: '/admin/changestatus_to_p',
            data: {
                id: id
            },
            dataType: 'JSON',
            success: function(r) {
                console.log(r)
                ourtable.ajax.reload()
            }
        })
    })

    $("#datareal").on("click", ".informasi", function() {
        $("#pelapor").val($(this).data("nama"))
        $("#judul").val($(this).data("judul"))
        $("#tanggal").val($(this).data("tgl"))
        $("#isil").val($(this).data("isi"))
        $("#foto").attr("src", '/uploads/'+$(this).data("foto"))
        
    })
})