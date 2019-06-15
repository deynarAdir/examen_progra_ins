@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Encuestas</div>

                <div class="card-body">
                    <form action="{{ route('encuesta.update',$encuesta->id) }}" method="POST">
                      @csrf
                      @method('put')
                      <div class="form-group">
                        <label>Titulo encuesta</label>
                        <input type="text" class="form-control" name="titulo" placeholder="Titulo de encuesta" value="{{ $encuesta->titulo }}">
                      </div>
                      <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
