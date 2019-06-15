@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Encuestas</div>

                <div class="card-body">

                    <form action="{{ route('encuesta.store') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nueva encuesta</label>
                        <input type="text" class="form-control" name="titulo" placeholder="Introduzca titulo de encuesta">
                      </div>
                      <button type="submit" class="btn btn-primary">Aceptar</button>
                    </form>
                    <br>
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Titulo</th>
                          <th scope="col">Fecha</th>
                          <th scope="col">Aciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($encuestas as $e)
                        <tr>
                          <th>{{ $e->id }}</th>
                          <td>{{ $e->titulo }}</td>
                          <td>{{ $e->fecha }}</td>
                          <td>
                            <a href="{{ route('encuesta.edit',$e->id) }}" class="btn btn-info">Editar</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
