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
            <td>

            <button type="button" class="btn btn-primary" onclick="sel(${info[i].idCliente})">Select</button>       
            
            </td>
            <td>
            <button type="button" class="btn btn-danger" onclick="del(${info[i].idCliente})">Borrar</button>       
 

            </td>
            </tr>
            `
    }
    document.getElementById('prev').innerHTML = body;
}


function sel(x) {
    var nombreInput = document.getElementById("nombre");
    nombreInput.value = x;

}