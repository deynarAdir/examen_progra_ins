@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Respuestas</div>

                <div class="card-body">
                    <form action="{{ route('respuesta.update',$respuesta->id) }}" method="POST">
                      @csrf
                      @method('put')
                      <div class="form-group">
                        <label>Titulo encuesta</label>
                        <input type="text" class="form-control" name="texto" placeholder="Texto de respuesta" value="{{ $respuesta->texto }}">
                      </div>
                      <div class="form-group">
                        <label>Voto</label>
                        <input type="number" name="voto" class="form-control" placeholder="Valoracion de la respuesta" value="{{ $respuesta->voto }}">
                      </div>
                      <div class="form-group">
                        <label>Encuesta</label>
                        <select name="id_enc" class="form-control">
                          @foreach($encuestas as $e)
                            @if($e->id == $respuesta->encuesta->id)
                              <option value="{{ $e->id }}" selected>{{ $e->titulo }}</option>
                            @else
                              <option value="{{ $e->id }}">{{ $e->titulo }}</option>
                            @endif
                          @endforeach
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
