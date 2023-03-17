document.getElementById("jugador1-form").addEventListener("submit", function(event) {
    event.preventDefault();
    
    var nombre = document.getElementsByName("nombre")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var telefono = document.getElementsByName("teléfono")[0].value;
    var pista = document.getElementById("pista")[0].value;
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    };
    xhttp.open("POST", "guardar_jugador.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("nombre="+nombre+"&email="+email+"&teléfono="+telefono+"$pista="+pista);
});

