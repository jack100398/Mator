
$("#img-upload").on('click', function (e) {
    uploadImage();
})

async function dropCommodities(id) {
    url = '/commodity/'+ id;

    await sendAjax('delete', url, null);
    await getCommodities();
}

async function search(data) {
    url = 'client-commodity';

    return await sendAjax('get', url, data);
}

async function getCommodities() {
    $('#commodity_cards').html();
    let html = await sendAjax('get', '/commodities', null);
    $('#commodity_cards').html(html);
}

async function getCommodity(id) {
    return await sendAjax('get', '/commodity/' + id);
}

getCommodities();

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