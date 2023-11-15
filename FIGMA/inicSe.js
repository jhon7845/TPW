function mostrarAlerta(event) {
    event.preventDefault();

    var mensaje = "¡Bienvenido!";
    var ventana = document.createElement("div");
    ventana.className = "ventana";
    ventana.innerHTML = "<div class='mensaje'>" + mensaje + "</div>";
    document.body.appendChild(ventana);

    setTimeout(function() {
        ventana.style.display = "none";
        window.location.href = "cursos.html";
    }, 2000);
}