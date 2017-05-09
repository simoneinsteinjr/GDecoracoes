@extends('admin')

@section('content')

    <div class="text-center">
        <h5><i class="fa fa-"></i> Lista de Mesas:</h5>
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
                    <th class="text-center"></th>
                    <th class="text-center">Nome</th>
                    <th class="text-center">Tipo</th>
                    <th class="text-center">Medida</th>
                    <th class="text-center">Quatidade</th>
                    <th class="text-center">Preco</th>
                    <th class="text-center"></th>
                </tr>
            </thead>


            <tbody>
            @foreach ($mesas as $mesa)
                <tr>
                    <td>{{ $mesa->foto}}</td>
                    <td>{{ $mesa->nome }}</td>
                    <td>{{ $mesa->tipo->designacao}}</td>
                    <td>{{ $mesa->medida }}</td>
                    <td>{{ $mesa->quantidade }}</td>
                    <td>{{ $mesa->preco }}</td>
                    {{--<td><a href="{{route('mesas.edit',$mesa->id)}}" class="btn btn-warning btn-sm">Alterar</a></td>--}}
                    {{--<td><a href="{{route('mesas.destroy',$mesa->id)}}" class="btn btn-danger btn-sm">Apagar</a></td>--}}

                    <td>
                        {!! Form::open(['method' => 'EDIT', 'route'=>['mesas.edit', $mesa->id]]) !!}
                        {!! Form::submit('Alterar', ['class' => 'btn btn-warning btn-sm']) !!}
                        {!! Form::close() !!}
                    </td>

                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route'=>['mesas.destroy', $mesa->id]]) !!}
                        {!! Form::submit('Apagar', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </td>

                </tr>
            @endforeach

            </tbody>

        </table>
    </div>

@endsection
