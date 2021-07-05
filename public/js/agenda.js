//const { default: axios } = require("axios");


      document.addEventListener('DOMContentLoaded', function() {

        let formulario = document.querySelector("#formularioEventos")

        var calendarEl = document.getElementById('agenda');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          selectable:true,
          
          locale:"es",
          displayEventTime:false,

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

              $("#evento").modal("show"); //muestra el modal en la pagina evento
          },

          eventClick: function (info) {
              var evento = info.event;
              console.log(evento)

              axios.post("http://localhost:8888/agenda/public/evento/editar/"+info.event.id).then(
                (respuesta) =>{
//recupero desde la db los datos y los inserta en el modal-- en el eventocontroler busca en el edit por el dato id
                    formulario.id.value= respuesta.data.id; 
                    formulario.title.value= respuesta.data.title; 
                    formulario.descripcion.value= respuesta.data.descripcion; 
                    formulario.start.value= respuesta.data.start; 
                    formulario.end.value= respuesta.data.end; 

                    $("#evento").modal("show");//muestra el modal
                }
            ).catch(
                error=>{
                    if(error.response){
                        console.log(error.response.data);
                    }
                }
            )
              
          },

          select:function (info) {

            formulario.start.value=info.startStr;
            formulario.end.value=info.endStr;
            $("#home").modal("show");  
            
          }


        });
        calendar.render();

        document.getElementById("btnGuardar").addEventListener("click",function(){
            
            enviarDatos("http://localhost:8888/agenda/public/evento/agregar");

        });

        document.getElementById("btnEliminar").addEventListener("click",function(){
            
            enviarDatos("http://localhost:8888/agenda/public/evento/borrar/"+formulario.id.value);

        });

        document.getElementById("btnModificar").addEventListener("click",function(){
            
            enviarDatos("http://localhost:8888/agenda/public/evento/actualizar/"+formulario.id.value);

        });

        function enviarDatos(url) {
            const datos = new FormData(formulario);
            console.log(datos);


            axios.post(url, datos).then(
                (respuesta) =>{
                    calendar.refetchEvents(); //actualiza el calendario con los eventos agregados
                    $("#evento").modal("hide");
                }
            ).catch(
                error=>{
                    if(error.response){
                        console.log(error.response.data);
                    }
                }
            )
        }

      });

  