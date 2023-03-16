function cargarHorarios() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var horarios = JSON.parse(this.responseText);
        // Actualizar la página HTML con los horarios disponibles
      }
    };
    xhttp.open("GET", "horarios.php", true);
    xhttp.send();
  }