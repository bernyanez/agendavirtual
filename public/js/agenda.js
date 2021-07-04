//const { default: axios } = require("axios");


      document.addEventListener('DOMContentLoaded', function() {

        let formulario = document.querySelector("form")

        var calendarEl = document.getElementById('agenda');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          
          locale:"es",

          headerToolbar: {
              left: 'prev,next today',
              center:'title',
              right:'dayGridMonth,timeGridWeek,listWeek'

          },

          events: "http://localhost:8888/agenda/public/evento/mostrar" ,

          dateClick:function(info){
              formulario.reset();

              formulario.start.value=info.dateStr;
              formulario.end.value=info.dateStr;

              $("#evento").modal("show");
          }


        });
        calendar.render();

        document.getElementById("btnGuardar").addEventListener("click",function(){
            const datos = new FormData(formulario);
            console.log(datos);


            axios.post("http://localhost:8888/agenda/public/evento/agregar", datos).then(
                (respuesta) =>{

                    calendar.refetchEvents();
                    $("#evento").modal("hide");
                }
            ).catch(
                error=>{
                    if(error.response){
                        console.log(error.response.data);
                    }
                }
            )


        });

      });

  