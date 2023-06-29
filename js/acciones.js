var div = document.getElementById("porsiacaso");

var divVisible = false;
function mostrar(event) {
    if (divVisible) {
        div.style.display = "none";
      } else{
        div.style.display = "block";
      }
      divVisible = !divVisible;
      event.preventDefault();
      }
    


document.getElementById("elboton").addEventListener("click", mostrar);