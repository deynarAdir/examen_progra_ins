@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Respuestas</div>

                <div class="card-body">
                    <form action="{{ route('respuesta.store') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label>Texto</label>
                        <input type="text" class="form-control" name="texto" placeholder="Texto de la respuesta">
                      </div>
                      <div class="form-group">
                        <label>Voto</label>
                        <input type="number" name="voto" class="form-control" placeholder="Valoracion de la respuesta" value="1">
                      </div>
                      <div class="form-group">
                        <label>Encuesta</label>
                        <select name="id_enc" class="form-control">
                          @foreach($encuestas as $e)
                          <option value="{{ $e->id }}">{{ $e->titulo }}</option>
                          @endforeach
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">crear respuesta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
