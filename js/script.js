function fetchpostregistro() {
    formularioregistro.onsubmit = async (e) => {
        e.preventDefault();

        let response = await fetch('', {
            method: 'POST',
            body: new FormData(formularioregistro)
        });
        
        
    };
}