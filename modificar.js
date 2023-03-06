var formulario = document.getElementById('formulariomod');

formulario.addEventListener('submit', function(e){
    e.preventDefault();

    var datos = new FormData(formulario);
    console.log(datos);


    php = "modificar.php"

    fetch(php, {
        method: 'POST',
        body: datos
    })
    .then (res => res.json())
    .then (data => {
        console.log(data);
    })
})