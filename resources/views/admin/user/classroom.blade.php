@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de aulas</div>
                    <div class="container">
                    
                    <div>
                        @foreach($videos as $video)
                            <div class="container">
                                    <ul style="list-style: none;" class="list-group"> 
                                        <li class="list-group-item">Aula: {{$video->id}}</th>
                                        <li class="list-group-item">Título: {{ $video->nome }}</li>
                                        <li class="list-group-item">Descrição: {{ $video->description }}</li>
                                        <li class="list-group-item"><iframe width="560" height="315" src="{{ $video->url }}" frameborder="0"></iframe></li>
                                        <li class="list-group-item">
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
                                        </li> 
                                    </ul>
                            </div><div><br/></div>

                        @endforeach
                      
                      
                    </div>
                </div>
                
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection