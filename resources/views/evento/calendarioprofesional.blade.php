@extends('layouts.app')
@section('content')

<div class="container">
<<<<<<< HEAD:resources/views/evento/calendarioprofesional.blade.php

    <div id="agendaprofe">
      
     </div>
</div>

=======
    <div id="agenda">
     </div>
</div>

<!-- Modal -->
>>>>>>> d48b96de8411e49d8584f65bef6cf4e144c300a1:resources/views/evento/index.blade.php
<div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Formulario de eventos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="" id= "formularioEventos">

                {{ csrf_field() }}

                <div class="form-group" hidden="true">
                  <label for="id">id</label>
                  <input type="text" class="form-control" name="id_usuario" id="id_usuario" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">Help text</small>
                </div>

                <div class="form-group">
                  <label for="title">Titulo</label>
                  <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Escribe el titulo">
                  <small id="helpId" class="form-text text-muted">Help text</small>
                </div>

                <div class="form-group">
                  <label for="descripcion">Descripcion</label>
                  <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                </div>


                <div class="form-group">
                  <label for="start">start</label>
                  <input type="text" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">Help text</small>
                </div>

                <div class="form-group">
                  <label for="end">end</label>
                  <input type="text" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">Help text</small>
                </div>

                <div class="form-group">
<<<<<<< HEAD:resources/views/evento/calendarioprofesional.blade.php
                  <input type="text" class="form-control" name="id_users" id="id_users" value="" aria-describedby="helpId" placeholder="" hidden="true">
=======
                  <label for="id_users">id_users</label>
                  <input type="text" class="form-control" name="id_users" id="id_users" value="{{'$id_users'}}" aria-describedby="helpId" placeholder="" >
                  <small id="helpId" class="form-text text-muted">Help text</small>
>>>>>>> d48b96de8411e49d8584f65bef6cf4e144c300a1:resources/views/evento/index.blade.php
                </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btnGuardar" >Guardar</button>
                <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
                <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/agendaprofe.js') }}" defer></script>
@endsection