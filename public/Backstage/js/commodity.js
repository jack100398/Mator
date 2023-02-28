async function dropCommodities(id) {
    url = 'commodity/' + id;

    await sendAjax('delete', url, null);
    await getCommodities();
}

async function search(data) {
    url = 'client-commodity';

    return await sendAjax('get', url, data);
}

async function getCommodities() {
    $('#commodity_cards').html();
    let html = await sendAjax('get', 'commodities', null);
    $('#commodity_cards').html(html);
}

async function getCommodity(id) {
    return await sendAjax('get', 'commodity/' + id);
}

getCommodities();