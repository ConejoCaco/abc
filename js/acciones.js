function agregarDiv() {
    var div = document.createElement("div");
    div.classList.add("contenido");
    div.innerHTML = "<h3>Contenido agregado dinámicamente</h3><p>Este es el contenido del div agregado al presionar el botón.</p>";
    document.body.appendChild(div);
  }
var elboton = document.getElementById("elboton");
elboton.addEventListener("click", agregarDiv);