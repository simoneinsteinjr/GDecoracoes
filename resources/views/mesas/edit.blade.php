@extends('admin')

@section('content')

    {!! Form::model($mesa,['method' => 'PATCH','files'=>true,'route'=>['mesas.update',$mesa->id]]) !!}
            <div class="text-center">
                <h5><i class="fa fa-pencil"></i> Actualização da Mesa:</h5>
                <hr class="mt-2 mb-2">
            </div>

            <div class="md-form col-md-5 col-md-offset-5">
                {!! Form::text('nome') !!}
            </div>

            <div class="md-form col-md-5 col-md-offset-1">
                {!! Form::select('tipo_id', $tipos, null, ['class'=>'mdb-select', 'placeholder'=>'Selecione o tipo']) !!}
            </div>

            <div class="md-form col-md-5 col-md-offset-1">
                {!! Form::text('medida') !!}
            </div>

            <div class="md-form col-md-5 col-md-offset-1">
                {!! Form::number('quantidade') !!}
            </div>

            <div class="md-form col-md-5 col-md-offset-1">
                {!! Form::number('preco') !!}
            </div>

            <div class="md-form col-md-3 col-md-offset-9">
                {!! Form::file('foto',null) !!}
            </div>

            <div class="md-form col-md-9 col-md-offset-1">
                {!! Form::submit('ACTUALIZAR', ['class' => 'btn btn-primary btn-sm']) !!}
            </div>

    {!! Form::close() !!}
@endsection