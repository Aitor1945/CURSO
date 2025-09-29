function mostrarHora() {
fetch('/hora')
.then(response => response.text())
.then(data => {
document.getElementById('hora').innerText = "Hora actual: " + data;
})
.catch(err => console.error("Error al obtener la hora:", err));
}