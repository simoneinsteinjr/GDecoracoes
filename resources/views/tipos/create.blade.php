@extends('admin')

@section('content')

    {!! Form::open(['url' => 'tipos', 'files'=>true]) !!}

    <div class="text-center">
        <h5><i class="fa fa-pencil"></i> Registo de Tipos:</h5>
        <hr class="mt-2 mb-2">
    </div>

    <div class="md-form col-md-5 col-md-offset-1">
        {!! Form::text('designacao',null,['placeholder'=>'Introduza o nome da area']) !!}
    </div>

    <div class="md-form col-md-5 col-md-offset-1">
        {!! Form::textarea('descricao', null, ['class'=>'md-textarea', 'placeholder'=>'Introduza a descricao da area']) !!}
    </div>

    <div class="md-form col-md-9 col-md-offset-1">
        {!! Form::submit('GRAVAR', ['class' => 'btn btn-primary btn-sm']) !!}
    </div>
    {!! Form::close() !!}

@stop