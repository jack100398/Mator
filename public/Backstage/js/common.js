$("#img-upload").on('click', function (e) {
    uploadImage();
})

async function uploadImage(element_id) {
    let element = document.getElementById(element_id);
    var img = element.files[0];
    var form = new FormData();
    form.append("img", img);
    form.append("_token", "{{ csrf_token() }}");
    return await ajaxUploadFile('post', 'upload', form)
}

async function uploadImageByNote(file) {
    var img = file;
    var form = new FormData();
    form.append("img", img);
    form.append("_token", "{{ csrf_token() }}");
    return await ajaxUploadFile('post', 'upload', form)
}

function sendAjax(type = 'post', path, data = null) {
    if (type === 'delete' && !confirm("是否確認刪除?")) {
        return;
    }

    var url = `${getAdminDomainUrl()}${path}`

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

function sendApiAjax(type = 'post', path, data = null) {
    var url = `${getApiDomainUrl()}${path}`

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

function ajaxUploadFile(type = 'post', path, data) {
    var url = `${getAdminDomainUrl()}${path}`

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

function getAdminDomainUrl() {
    return `${document.location.origin}/admin/`;
}

function getApiDomainUrl() {
    return `${document.location.origin}/api/`;
}