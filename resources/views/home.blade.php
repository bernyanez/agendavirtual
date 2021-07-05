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
                    <div class="container">
                        <div id="agenda">
                            
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
                <h5 class="modal-title">Personaliza dias</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="">

                {{ csrf_field() }}


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
@endsection
