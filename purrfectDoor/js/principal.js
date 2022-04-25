/* Ejecutamos código Javascript solamente cuando el DOM está completamente cargado */
document.addEventListener("DOMContentLoaded", function () {
    /* Seleccionamos elementos con dos clases a continuación */
    var list = document.querySelectorAll(".nav-list .list-item");
    var button = document.querySelectorAll(".menu");
    /* Para cada elemento del array que se obtuvo con las clases */
    for (i = 0; i < button.length; i++) {
        /* Contaremos cada click, iniciando en el 1 (ya que se llegó a aquí) */
        nclicks = 0;
            /* Y de ellos, estaremos "pendientes" de si el usuario hizo click */
            button[i].addEventListener("click", function () {
                /* Si llego aquí, es porque el usuario hizo click, entonces sumo un click.
                Además, cambio el estado a flex ya que el módulo de 2 del número de clicks es 0.
                Del contrario no renderizo el elemento con display none. */
                nclicks += 1
                for (i = 0; i < list.length; i++) {
                    list[i].style.display = 'flex';
                    if (nclicks % 2 != 0) {
                    } else {
                        list[i].style.display = 'none';
                    };
                };
            });
            /* Parche ya que mediaqueries no estaban funcionando */
            window.addEventListener('resize', function(){
                var newWidth = window.innerWidth;
                if (newWidth > 760) {
                    for (i = 0; i < list.length; i++) {
                    list[i].style.display = 'inline-block';
                    nclicks = 0;
                    }
                } else {
                    for (i = 0; i < list.length; i++) {
                    list[i].style.display = 'none';
                    nclicks = 0;
                    }
                }
            });
    }
  });
