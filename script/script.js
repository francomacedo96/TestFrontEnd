var form = document.getElementById('formularioregistro');

form.addEventListener('submit', function(e){
    e.preventDefault();

    var dat = new FormData(form);
    console.log(dat);


    php = "entrada.php"

    fetch(php, {
        method: 'POST',
        body: dat
    })
    .then (res => res.json())
    .then (data => {
        console.log(data);
    })
})


function refresh() {
    location.reload();
}