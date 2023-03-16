

  window.onload=()=>{
    var botonesTurno=document.getElementsByClassName("tun");
    for (let index = 0; index < botonesTurno.length; index++) {
      botonesTurno[index].addEventListener("click",(e)=>{
           var horario=e.currentTarget.previousElementSibling;
           horario.classList.remove("horario")
      })
      
    }
  }
 