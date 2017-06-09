@extends('utilizador')

@section('content')

    {!! Form::open(['url' => 'reservas', 'files'=>true]) !!}

<br>
    <div class="text-center">
        <h5>Efectue a Reserva do Seu Material</h5>
        <hr class="mt-2 mb-2">
    </div>

    <div class="row">
        <div class="col-sm-8 col-md-7">
            <div class="text-center">
                <h5><strong>Material Adicionado</strong></h5>
            <br>
            </div>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th class="text-center">Produto</th>
                    <th class="text-center">Qtd</th>
                    <th class="text-center">Preço</th>
                    <th class="text-center">Total</th>
                </tr>
                </thead>
                <tbody>
                @if(Session::has('carinho'))
                    @foreach($carinho->items as $m)
                        <tr>
                            <td class="text-center">{{$m['item']->tipo->designacao}}</td>
                            <td class="text-center">{{$m['quantidade']}}</td>
                            <td class="text-center">{{$m['item']->preco}} MT</td>
                            <td class="text-center">{{$m['preco']}} MT</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td class="text-right"><h5><strong>Total a Pagar: </strong></h5></td>
                    <td class="text-center text-danger"><h5><strong>{{$total}} MT</strong></h5></td>
                </tr>
            </table>

        </div>

        <div class="col-sm-4 col-md-4">
            <div class="text-center">
                <h5><strong>Dados da Reserva</strong></h5>
            </div>

            <div class="md-form">
                {!! Form::date('dataFim') !!}
            </div>

            <div class="md-form">
                {!! Form::textarea('descricao', null, ['class'=>'md-textarea', 'placeholder'=>'Introduza a descricao do material']) !!}
            </div>

            @if(Session::has('carinho'))
                @foreach($carinho->items as $m)
            <input type="hidden" name="material_id[]" value="{{$m['item']->id}}">
            <input type="hidden" name="quantidade[]" value="{{$m['quantidade']}}">
            <input type="hidden" name="preco[]" value="{{$m['preco']}}">
            @endforeach
            @endif

            <div class="text-right">
                    {!! Form::submit('SUBMETERR', ['class' => 'btn btn-success btn-md']) !!}
            </div>

        </div>

    </div>
    {!! Form::close() !!}

@stop