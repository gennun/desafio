@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de aulas</div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($videos as $video)
                            <tr>
                                <th scope="row">{{$video->id}}</th>
                                <td>{{ $video->name }}</td>
                                <td>{{ $video->description }}</td>
                                <td><iframe width="560" height="315" src="{{ $video->url }}" frameborder="0"></iframe></td>
                                <td>
                                    @can('edit-users')
                                        <a href="{{ route('admin.classroom.edit', $video) }}">
                                            <button type="button" class="btn btn-primary float-left">Editar</button>
                                        </a>
                                        <form action="{{ route('admin.classroom.destroy', $video) }}" method="POST" class="float-left">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger">Deletar</button>
                                        </form>
                                    @endcan
                                    
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