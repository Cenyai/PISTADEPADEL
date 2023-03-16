function validarBoton(botonT1) {
    // Lógica de validación del botón
    console.log('Se hizo clic en el botón ' + botonT1);
  }
  document.getElementById('boton1').addEventListener('click', function() {
    validarBoton('boton1');
    console.log(`sehizo clic en el botón ` + botonT2);
  });
  document.getElementById('boton2').addEventListener('click', function() {
    validarBoton('boton2');
    console.log(`se hizo clic en el botón ` + botonT3);
  });
  document.getElementById('boton4').addEventListener('click', function() {
    validarBoton('boton3');
    console.log(`se hizo clic en el botón ` + botonT4);
  });
  document.getElementById('boton4').addEventListener('click', function() {
    validarBoton('boton4');
  });
  console.log(`se hizo clic en el botón` + botonT5);
  document.getElementById('boton5').addEventListener('click', function() {
    validarBoton('boton5');
  });
  console.log(`se hizo clic en el botón ` + botonT6);
  document.getElementById('boton6').addEventListener('click', function() {
    validarBoton('boton6');
  });
 