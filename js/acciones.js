function agregarDiv(event) {
    event.preventDefault();
    var div = document.createElement("div");
    div.classList.add("contenido");
    div.innerHTML = "<h3>Contenido agregado dinamicamente</h3><p>Este es el contenido del div agregado al presionar el botón.</p>";
    document.body.appendChild(div);
  }

document.getElementById("elboton").addEventListener("click", agregarDiv);