
$("#img-upload").on('click',function(e){
    uploadImage();
})

function getCommodities() {
    sendAjax('get', '/commodities', null, function (response) {
        $('#commodity_cards').append(response);

    });
}

getCommodities();

function createCommodity() {
    var data = {
        'name': $('#commodity-name').val(),
        'power': $('#commodity-power').val(),
        'image_url':$('.img-thumbnail').attr('src')
    }
    console.log(data);
    sendAjax('post', '/commodity', data);
}

function uploadImage() {
    var img = document.getElementById("uploadImg").files[0];
    var form = new FormData();
    form.append("img", img);
    form.append("_token","{{ csrf_token() }}");

    ajaxUploadFile('post', '/upload', form, function (data) {$('#demo-img').attr('src', data);})
}

function sendAjax(type = 'post', url, data= null, callback = null) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: type,
        url: url ,
        data: data,
        cache: false,
        success:callback,
        error:function(err){
            console.log(err);
        }
    }); 
}

function ajaxUploadFile(type = 'post', url, data, callback = null) {
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