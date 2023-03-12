async function dropThirdLink(id) {
    url = 'third/' + id;

    await sendAjax('delete', url, null);

    location.reload();
}

async function getThirdLink(id) {
    return await sendAjax('get', 'third/' + id);
}
