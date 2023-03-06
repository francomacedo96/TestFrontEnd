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
            <td onclick="del()">

            <form method="post" class="estilo" id="formborrar">
            
            <input type="text" name="borrar" value="${info[i].idCliente}">
            <button type="submit">Registro</button>
            </form>
        
        


            </td>
            </tr>
            `
    }
    document.getElementById('prev').innerHTML = body;

   
}


function del() {


    
    var formborrar = document.getElementById('formborrar');

    formborrar.addEventListener('submit', function(e){
    e.preventDefault();

    var datos = new FormData(formborrar);
    console.log(datos);


    php = "borrar.php"

    fetch(php, {
        method: 'POST',
        body: datos
    })
    .then (res => res.json())
    .then (data => {
        console.log(data);
    })
})


}


/*            
<td id="del" onclick="del(${info[i].idCliente})"><form method="post"><input type="hidden" name="${info[i].idCliente}"><input type="submit" name="del"></form></td></tr>

*/