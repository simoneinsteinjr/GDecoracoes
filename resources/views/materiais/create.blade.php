@extends('admin')

@section('content')

    {!! Form::open(['url' => 'materiais', 'files'=>true]) !!}

    <div class="text-center">
        <h5><i class="fa fa-pencil"></i> Registo de Material:</h5>
        <hr class="mt-2 mb-2">
    </div>

    <div class="md-form col-md-5 col-md-offset-1">
        {!! Form::select('tipo_id', $tipos, null, ['class'=>'mdb-select', 'placeholder'=>'Selecione o tipo']) !!}
    </div>

    <div class="md-form col-md-5 col-md-offset-1">
        {!! Form::number('medida',null,['placeholder'=>'Introduza a medida (Ex: 2.0 cm)']) !!}
    </div>

    <div class="md-form col-md-5 col-md-offset-1">
        {!! Form::number('quantidade',null,['placeholder'=>'Introduza quantidade']) !!}
    </div>

    <div class="md-form col-md-5 col-md-offset-1">
        {!! Form::number('preco',null,['placeholder'=>'Introduza o preco por unidade']) !!}
    </div>

    <div class="file-field col-lg-5">
        <div class="btn btn-primary btn-sm">
            <span>Escolha a foto</span>
            <input type="file" name="foto">
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Busque o ficheiro">
        </div>
    </div>

    <div class="md-form col-md-5 col-md-offset-1">
        {!! Form::textarea('descricao', null, ['class'=>'md-textarea', 'placeholder'=>'Introduza a descricao do material']) !!}
    </div>

    <div class="md-form col-md-9 col-md-offset-1">
        {!! Form::submit('GRAVAR', ['class' => 'btn btn-primary btn-sm']) !!}
    </div>
    {!! Form::close() !!}

@stop