function upload(caption){
    $.ajax({
        url:"http://localhost/index.php/Upload_controller/uploadPost",
        data : {
            'caption' : caption
        },
        type: "post",
        cache:true,
        success: function(res){
            $("#textLoading").empty();
            var a = JSON.parse(res);
            $.each(a, function(i,v){
                $("#textLoading").append(
                    "<h5>File Uploaded</h5>"
                )
            });
        }
    })
}