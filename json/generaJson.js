function enviaValor() {
    var primerValor = document.getElementById('valorUno').value;
    var segundoValor = document.getElementById('valorDos').value;

    fetch('procesaValor.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ primerValor: primerValor, segundoValor: segundoValor }),
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Hubo un problema al enviar los datos.');
        }
        return response.json();
    })
    .then(data => {
        console.log('Datos enviados exitosamente:', data);
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
