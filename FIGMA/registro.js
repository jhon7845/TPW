function mostrarAlerta(event) {
    event.preventDefault();

    var mensaje = "¡Registro Exitoso!";
    var ventana = document.createElement("div");
    ventana.className = "ventana";
    ventana.innerHTML = "<div class='mensaje'>" + mensaje + "</div>";
    document.body.appendChild(ventana);

    setTimeout(function() {
        ventana.style.display = "none";
        window.location.href = "index.html";
    }, 2000);
}