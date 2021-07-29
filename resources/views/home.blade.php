@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tu perfil') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Bienvenido!') }}
<<<<<<< HEAD
                <div class="container">
=======
                    <div class="container">
                    
>>>>>>> d48b96de8411e49d8584f65bef6cf4e144c300a1
                    <form action="" method="get">
                    <div class="text-center">               
                    <div class="row" >
                        <table class="table table-striped">
                        <tbody> 
                            <div class="card my-1 m-1" style="width: 18rem;">
                                <div class="card-body my-1">
                                    <h5 class="card-title">{{ auth()->user()->name }}</h5>                               
                                    <h6 class="card-title">{{ auth()->user()->descripcion }}</h6>
                                    <h6 class="card-title">{{ auth()->user()->servicio }}</h6>
                                    <h6 class="card-subtitle mb-2 text-muted">{{ auth()->user()->telefono }}</h6>
                                    <h6 class="card-subtitle mb-2 text-muted">{{ auth()->user()->direccion }}</h6>
                                    <h6 class="card-subtitle mb-2 text-muted">{{ auth()->user()->email }}</h6>

<<<<<<< HEAD
    
=======
                                  
>>>>>>> d48b96de8411e49d8584f65bef6cf4e144c300a1
                                    <h6 class="card-subtitle mb-2 text-muted" hidden="true" name="id"> {{ auth()->user()->id }}</h6>
                                    <?php $id_users = Auth::id(); ?>
                                    <a  href="{{route('home.editar', $id_users )}}" class="card-link">Editar datos</a>
                                </div>
                            </div>
                        </tbody>
                        </table>
                        </div>    
                    </div>   
                    </form>
<<<<<<< HEAD

                        <div id="agenda"> 
                            
=======
                    </div> 

                    <div id="agenda">    
>>>>>>> d48b96de8411e49d8584f65bef6cf4e144c300a1
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
<<<<<<< HEAD
                  <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="" >
=======
                  <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
>>>>>>> d48b96de8411e49d8584f65bef6cf4e144c300a1
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
<<<<<<< HEAD
                   <?php
                    $id_users = Auth::id();
                  ?>  
                  <input type="text" class="form-control" name="id_users" id="id_users" aria-describedby="helpId" placeholder="" value="{{$id_users}}"  hidden="true">
                </div>

                <div class="form-group">
                   <?php
                    $id_cliente = Auth::id();
                  ?>  
                  <input type="text" class="form-control" name="id_cliente" id="id_cliente" aria-describedby="helpId" placeholder="" value="{{$id_cliente}}"  hidden="true">
                </div>
=======
                  <?php $id_users = Auth::id(); ?>
                  <input type="text" class="form-control" name="id_users" id="id_users" value="{{$id_users}}" aria-describedby="helpId" placeholder="" hidden="true">
                </div>

>>>>>>> d48b96de8411e49d8584f65bef6cf4e144c300a1

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

<<<<<<< HEAD
<script src="{{ asset('js/agenda.js') }}" defer></script>
=======

>>>>>>> d48b96de8411e49d8584f65bef6cf4e144c300a1
@endsection
