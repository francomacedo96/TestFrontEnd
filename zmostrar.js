let url = "listar.php";
fetch(url)
    .then(response => response.json())
    .then(info => mostrarData(info))
    .catch(error => console.log(error))


const mostrarData = (info) => {

    console.log(info)
    let body = ''
    for (let i = 0; i < info.length; i++) {

            body += `
            <tr>
            <td id="${info[i].idCliente}">${info[i].idCliente}</td>
            <td>${info[i].nombre}</td>
            <td>${info[i].apellido}</td>
            <td>${info[i].rut}</td>
            <td>${info[i].tipo}</td>
            <td>${info[i].telefono}</td>
            <td>${info[i].activo}</td>
            <td>${info[i].email}</td>
            <td id="det"><p>Select</p></td>
            <td>
            <button onclick="del(${info[i].idCliente})">Borrar</button>       
 

            </td>
            </tr>
            `
    }
    document.getElementById('prev').innerHTML = body;
}


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
