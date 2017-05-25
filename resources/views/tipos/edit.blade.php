@extends('admin')

@section('content')

    {!! Form::model($tipo,['method' => 'PATCH','files'=>true,'route'=>['tipos.update',$tipo->id]]) !!}
            <div class="text-center">
                <h5><i class="fa fa-pencil"></i> Actualização do Tipo:</h5>
                <hr class="mt-2 mb-2">
            </div>

            <div class="md-form col-md-5 col-md-offset-1">
                {!! Form::text('designacao') !!}
            </div>

            <div class="md-form col-md-5 col-md-offset-1">
                {!! Form::textarea('descricao') !!}
            </div>
            <div class="md-form col-md-9 col-md-offset-1">
                {!! Form::submit('ACTUALIZAR', ['class' => 'btn btn-primary btn-sm']) !!}
            </div>

    {!! Form::close() !!}
@endsection