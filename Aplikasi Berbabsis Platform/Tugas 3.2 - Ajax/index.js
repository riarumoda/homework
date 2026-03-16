$(document).ready(function(){
    $("#shoutbutton").click(function() {
        var pesan = $("#msg").val();
        
        if(pesan == "") {
            alert("Isi pesan dulu dong!");
            return;
        }

        $.ajax({
            type: "POST",
            url: "reply.php",
            data: $("#form1").serialize(),
            success: function(rsp) {
                $("#data").append("<div class='reply-item'>" + rsp + "</div>");
                $("#msg").val("");
            },
            error: function(xhr, status, error) {
                console.error(xhr);
                alert("Gagal terhubung ke server.");
            }
        });
    });
});
