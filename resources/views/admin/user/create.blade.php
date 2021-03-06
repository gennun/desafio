@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastrar Nova Aula</div>
                    <div>

                    </br> 
                    </div>
                    <form action="{{ route('admin.classroom.store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">Título</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror"  name="nome" required autocomplete="nome" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">Descrição</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror"  name="description" required autocomplete="description" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">(url youtube)</label>

                            <div class="col-md-6">
                                <input id="url" type="text" class="form-control @error('url') is-invalid @enderror"  name="url" required autocomplete="url" autofocus>
                            </div>
                        </div>

                    
                        
                        <div class="card-header">
                            <button type="submit" class="btn btn-primary">
                                Cadastrar
                            </button>
                        </div>
                    </form> 
                
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection