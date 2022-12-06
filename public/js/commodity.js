
$("#img-upload").on('click',function(e){
    uploadImage();
})

function createCommodity() {
    var data = {
        'name': $('#commodity-name').val(),
        'power': $('#commodity-power').val(),
        'img':$('.img-thumbnail').attr('src')
    }
}

function uploadImage() {
    var img = document.getElementById("uploadImg").files[0];
    var form = new FormData();
    form.append("img", img);
    form.append("_token","{{ csrf_token() }}");

    sendAjax('post', '/upload', form, function (data) {$('#demo-img').attr('src', data);})
}

function sendAjax(type = 'post', url, data, callback) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: type,
        url: url ,
          data: data,
          processData:false,
          //mimeType:"multipart/form-data",
          contentType: false,
        cache: false,
          success:callback,
        error:function(err){
            console.log(err);
        }
    }); 
}