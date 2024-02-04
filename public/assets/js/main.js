document.addEventListener('DOMContentLoaded', function() {
    // se obtiene el token CSRF
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const textoInput = document.getElementById('texto');
    const sugerenciasSpan = document.getElementById('sugerencias');

    textoInput.addEventListener('keyup', function() {// se añade el evento keyup al campo de texto
        const valorInput = textoInput.value;// se obtiene el valor
        // Verificamos caracteres especiales
        const contieneCaracteresEspeciales = /[^a-zA-Z0-9 ]/g.test(valorInput);
        if (contieneCaracteresEspeciales) {
            sugerenciasSpan.innerHTML = "Por favor, no introduzcas caracteres especiales.";
        } else {
            const xhr = new XMLHttpRequest();
            xhr.open('POST', librosConsultarUrl, true);//solicitud es asíncrona
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);

            xhr.onload = function() {// manejo de la respuesta
                if (xhr.status === 200) {
                    const data = JSON.parse(xhr.responseText);
                    sugerenciasSpan.innerHTML = data.reduce((texto, libro) => texto + "<br>" + libro.titulo, "<br>");
                } else {// si hay un error
                    console.error("Error: " + xhr.status);
                }
            };

            xhr.send("q=" + encodeURIComponent(valorInput));// se envía la solicitud 
        }
    });
});