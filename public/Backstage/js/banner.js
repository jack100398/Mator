async function getBanner(id) {
    return await sendAjax('get', 'banner/' + id);
}