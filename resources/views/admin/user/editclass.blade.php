@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Painel de Edição</div>

                <form action="{{ route('admin.classroom.update', $classroom)  }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group row">
                        <label for="" class="col-md-4 col-form-label text-md-right">Título</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="nome" value="{{ $classroom->nome }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-4 col-form-label text-md-right" >Descrição</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="description" value="{{ $classroom->description }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-4 col-form-label text-md-right">(url youtube)</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="url" value="{{ $classroom->url }}">
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
