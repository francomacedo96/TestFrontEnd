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
    let url = "listar.php";
    fetch(url)
    .then(response => response.json())
    .then(info => mostrarData(info))
    .catch(error => console.log(error))


const mostrarData = (info) => {

    console.log(info)

    for (let i = 0; i < info.length; i++) {

        if (x == info[i].idCliente) {
            var nombreInput = document.getElementById("nombre");
            nombreInput.value = info[i].nombre;
        
            var apellidoInput = document.getElementById("apellido");
            apellidoInput.value = info[i].apellido;

            var rutInput = document.getElementById("rut");
            rutInput.value = info[i].rut;

            var tipoInput = document.getElementById("tipo");
            tipoInput.value = info[i].tipo;

            var telefonoInput = document.getElementById("telefono");
            telefonoInput.value = info[i].telefono;

            var activoInput = document.getElementById("activo");
            activoInput.value = info[i].activo;

            var emailInput = document.getElementById("email");
            emailInput.value = info[i].email;
        
        } 
    }

}
}