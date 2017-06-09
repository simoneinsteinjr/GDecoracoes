@extends('admin')

@section('content')

    <div class="text-center">
        <h5><i class="fa fa-"></i> Lista de Reservas</h5>
        <hr class="mt-2 mb-2">
    </div>

    <div class="table-responsiv">

        <form class="navbar-form navbar-right" role="search">
            <div class="md-form col-md-4 col-md-offset-2">
                <input type="text" id="txtpesquisar" placeholder="Pesquisar">
            </div>
        </form>

        <table id="tabela" class="table product-table">
            <thead>
                <tr>
                    <th class="text-center">Cliente</th>
                    <th class="text-center">Imagem</th>
                    {{--<th class="text-center">Tipo</th>--}}
                    <th class="text-center">Quatidade</th>
                    <th class="text-center">Preço</th>
                    <th class="text-center">Prazo</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Acções</th>
                </tr>
            </thead>


            <tbody>
            @foreach ($reserva as $r)
                <tr>
                    <td class="text-center"><strong>{{ $r->User->name}}</strong></td>
                    <td class="text-center"><img src="/img/{{$r->material->foto}}"></td>
                    {{--<td>{{ $r->material->tipo->designacao}}</td>--}}
                    <td class="text-center">{{ $r->quantidade }} Units </td>
                    <td class="text-center">{{ $r->preco }} MT </td>
                    <td class="text-center">{{ $r->dataFim }}</td>
                    <td class="text-center text-danger"><strong>{{ $r->estado }}</strong></td>
                    {{--<td><a href="confirmar/{{$r->id}}" class="btn btn-success btn-md">Confirmar</a></td>--}}

                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route'=>['reservas.destroy', $r->id]]) !!}
                        {!! Form::submit('CONFIRMAR', ['class' => 'btn btn-success btn-sm']) !!}
                        {!! Form::close() !!}
                    </td>

                </tr>
            @endforeach

            </tbody>

        </table>
    </div>

@endsection
