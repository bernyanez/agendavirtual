//const { default: axios } = require("axios");
    document.addEventListener('DOMContentLoaded', function() {
        
        let formulario = document.querySelector("#formularioEventos")
        
        var calendarEl = document.getElementById('agenda');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          selectable: true,
          businessHours: true,

          
          locale:"es",
          displayEventTime:false,

          headerToolbar: {
              left: 'prev,next today',
              center:'title',
              right:'dayGridMonth,timeGridWeek,listWeek',
          },
          
<<<<<<< HEAD
=======


          events: "http://localhost:8888/agenda/public/home/mostrar" ,
         
>>>>>>> d48b96de8411e49d8584f65bef6cf4e144c300a1


         events: "http://localhost:8888/agenda/public/home/mostrar",
        
          dateClick:function(info){
              formulario.reset();
              formulario.start.value=info.dateStr;
              formulario.end.value=info.dateStr;
              $("#evento").modal("show"); //muestra el modal en la pagina evento
          },

       
          select: function(info) {
                //alert("selected " + info.startStr + " to " + info.endStr);
                $('#txtFechaInicio').val(info.startStr);
                $('#txtFechaFinal').val(info.endStr);
                $('#exampleModal').modal();
<<<<<<< HEAD

                },
            
=======
                },

                
                
>>>>>>> d48b96de8411e49d8584f65bef6cf4e144c300a1

          eventClick: function (info) {
              var evento = info.event;
              console.log(evento)
              

<<<<<<< HEAD

=======
>>>>>>> d48b96de8411e49d8584f65bef6cf4e144c300a1
              axios.post("http://localhost:8888/agenda/public/home/editar/"+info.event.id).then(
                (respuesta) =>{
                    //recupero desde la db los datos y los inserta en el modal-- en el eventocontroler busca en el edit por el dato id
                    formulario.id.value= respuesta.data.id; 
                    formulario.title.value= respuesta.data.title; 
                    formulario.descripcion.value= respuesta.data.descripcion; 
                    formulario.start.value= respuesta.data.start; 
                    formulario.end.value= respuesta.data.end; 
                    formulario.id_users.value= respuesta.data.id_users; 
<<<<<<< HEAD
                    formulario.id_cliente.value= respuesta.data.id_cliente; 
=======

>>>>>>> d48b96de8411e49d8584f65bef6cf4e144c300a1
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
<<<<<<< HEAD
            //var id_users= '<% Auth::id(); %>'
            formularioEventos.start.value=info.startStr;
            formularioEventos.end.value=info.endStr;
            //formularioEventos.id_users.value=id_users;
=======

            formularioEventos.start.value=info.startStr;
            formularioEventos.end.value=info.endStr;
>>>>>>> d48b96de8411e49d8584f65bef6cf4e144c300a1
            $("#evento").modal("show");  
            
          },

          


        });
        calendar.render();

        document.getElementById("btnGuardar").addEventListener("click",function(){
            
<<<<<<< HEAD
            enviarDatos("http://localhost:8888/agenda/public/home/agregar")//+formulario.id_users.value);
=======
            enviarDatos("http://localhost:8888/agenda/public/home/agregar");
>>>>>>> d48b96de8411e49d8584f65bef6cf4e144c300a1

        });

        document.getElementById("btnEliminar").addEventListener("click",function(){
            
            enviarDatos("http://localhost:8888/agenda/public/home/borrar/"+formulario.id.value);

        });

        document.getElementById("btnModificar").addEventListener("click",function(){
            
            enviarDatos("http://localhost:8888/agenda/public/home/actualizar/"+formulario.id.value);

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
      

      

  