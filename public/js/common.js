$("#img-upload").on('click', function (e) {
    uploadImage();
})

async function uploadImage(element_id) {
    let element = document.getElementById(element_id);
    var img = element.files[0];
    var form = new FormData();
    form.append("img", img);
    form.append("_token", "{{ csrf_token() }}");
    return await ajaxUploadFile('post', '/upload', form)
}

function sendAjax(type = 'post', url, data = null) {
    return new Promise((resolve, reject) => {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: type,
            url: url,
            data: data,
            cache: false,
            success: function (res) {
                resolve(res);
            },
            error: function (err) {
                reject(err);
            }
        });
    });
}

function ajaxUploadFile(type = 'post', url, data) {
    return new Promise((resolve, reject) => {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: type,
            url: url,
            data: data,
            processData: false,
            //mimeType:"multipart/form-data",
            contentType: false,
            cache: false,
            success: function (res) {
                resolve(res);
            },
            error: function (err) {
                console.log(err);
            }
        });
    });
}