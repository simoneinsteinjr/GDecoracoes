@extends('admin')

@section('content')

    {!! Form::open(['url' => 'materiais', 'files'=>true]) !!}

    <div class="text-center">
        <h5><i class="fa fa-pencil"></i> Registo de Material:</h5>
        <hr class="mt-2 mb-2">
    </div>

    <div class="md-form col-md-5 col-md-offset-1">
        {{--{!! Form::label('Tipo', 'Tipo:') !!}--}}
        {!! Form::select('tipo_id', $tipos, null, ['class'=>'mdb-select', 'placeholder'=>'Selecione o tipo']) !!}
    </div>

    <div class="md-form col-md-5 col-md-offset-1">
        {{--{!! Form::label('Quantidade', 'Quantidade:') !!}--}}
        {!! Form::number('medida',null,['placeholder'=>'Introduza a medida (Ex: 2.0 cm)']) !!}
    </div>

    <div class="md-form col-md-5 col-md-offset-1">
        {{--{!! Form::label('Quantidade', 'Quantidade:') !!}--}}
        {!! Form::number('quantidade',null,['placeholder'=>'Introduza quantidade']) !!}
    </div>

    <div class="md-form col-md-5 col-md-offset-1">
        {{--{!! Form::label('Preco', 'Preco:') !!}--}}
        {!! Form::number('preco',null,['placeholder'=>'Introduza o preco por unidade']) !!}
    </div>

    <div class="md-form col-md-3 col-md-offset-9">
            {{--{!! Form::label('Documento', 'Documento:') !!}--}}
            {!! Form::file('foto',null) !!}
    </div>

    <div class="md-form col-md-5 col-md-offset-1">
        {{--{!! Form::label('Tipo', 'Tipo:') !!}--}}
        {!! Form::textarea('descricao', null, ['class'=>'md-textarea', 'placeholder'=>'Introduza a descricao do material']) !!}
    </div>

    <div class="md-form col-md-9 col-md-offset-1">
        {!! Form::submit('GRAVAR', ['class' => 'btn btn-primary btn-sm']) !!}
    </div>
    {!! Form::close() !!}

@stop