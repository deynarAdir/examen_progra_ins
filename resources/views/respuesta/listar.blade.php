@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Respuestas</div>

                <div class="card-body">
                    <a href="{{ route('respuesta.create') }}" class="btn btn-info text-white">Crear respuesta</a>
                    <br>
                    <br>
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Texto</th>
                          <th scope="col">Voto</th>
                          <th scope="col">Encuesta</th>
                          <th scope="col">Aciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($respuestas as $r)
                        <tr>
                          <th>{{ $r->id }}</th>
                          <td>{{ $r->texto }}</td>
                          <td>{{ $r->voto }}</td>
                          <td>{{ $r->encuesta->titulo }}</td>
                          <td>
                            <a href="{{ route('respuesta.edit',$r->id) }}" class="btn btn-info">Editar</a>
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
