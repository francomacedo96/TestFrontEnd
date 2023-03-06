var formulario = document.getElementById('formularioregistro');

formulario.addEventListener('submit', function(e){
    e.preventDefault();

    var datos = new FormData(formulario);
    console.log(datos);


    php = "entrada.php"

    fetch(php, {
        method: 'POST',
        body: datos
    })
    .then (res => res.json())
    .then (data => {
        console.log(data);
    })
})

/*
function borrado() {
    formulario.reset();
}
*/  