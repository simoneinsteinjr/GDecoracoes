@extends('admin')

@section('content')

    <div class="text-center">
        <h5><i class="fa fa-"></i> Lista de Tipos:</h5>
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
                    <th class="text-center">Designacao</th>
                    <th class="text-center">Descricao</th>
                    <th class="text-center">Acções</th>
                </tr>
            </thead>


            <tbody>
            @foreach ($tipo as $t)
                <tr>
                    <td>{{ $t->designacao }} </td>
                    <td>{{ $t->descricao }}  </td>
                    <td><a href="{{route('tipos.edit',$t->id)}}" class="btn btn-warning btn-md">Alterar</a></td>
                    {{--<td><a href="{{route('mesas.destroy',$mesa->id)}}" class="btn btn-danger btn-sm">Apagar</a></td>--}}

                    {{--<td>--}}
                        {{--{!! Form::open(['method' => 'EDIT', 'route'=>['mesas.edit', $mesa->id]]) !!}--}}
                        {{--{!! Form::submit('Alterar', ['class' => 'btn btn-warning btn-sm']) !!}--}}
                        {{--{!! Form::close() !!}--}}
                    {{--</td>--}}

                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route'=>['tipos.destroy', $t->id]]) !!}
                        {!! Form::submit('Apagar', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </td>

                </tr>
            @endforeach

            </tbody>

        </table>
    </div>

@endsection
