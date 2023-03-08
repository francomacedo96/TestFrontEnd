

const del = (id) => {
    
    var url = "zborrar.php";
    var formdata = new FormData();
    formdata.append('idCliente', id);
    console.log(formdata);

    fetch(url, {
        method: 'POST',
        body: formdata

    })
    .then (res => res.json())
    .then (res => {
        console.log(res);
    })
}
