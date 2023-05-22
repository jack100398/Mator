const route = 'product-type/';

const home = "/admin/product-type"

async function drop(id) {
    url = route + id;

    await sendAjax('delete', url, null);

    location.reload();
}

async function getItem(id) {
    return await sendAjax('get', route + id);
}

async function createModel(data) {
    await sendAjax('post', route, data)
        .then(value => {
            alert('新增成功');
            window.location.href = `${home}\\?site=${data['site']}`
        })
        .catch(error => {
            alert('修改失敗,請確認資訊使否皆已填入');
        });
}

async function updateModel(data) {
    await sendAjax('patch', route + data['id'], data)
        .then(value => {
            alert('修改成功');
            window.location.href = `${home}\\?site=${data['site']}`
        })
        .catch(error => {
            alert('修改失敗,請確認資訊使否皆已填入');
        });
}
