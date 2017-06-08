@extends('utilizador')

@section('content')
    <br>

    <div class="text-center">
        <h5><i class="fa fa-pencil"></i> Registo do Utilizador</h5>
        <hr class="mt-2 mb-2">
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                {{--<div class="panel-heading">Registo de</div>--}}
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="md-form{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{--<label for="name" class="col-md-4 control-label">Nme</label>--}}

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Introduza o seu nome" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="md-form{{ $errors->has('email') ? ' has-error' : '' }}">
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Introduza o seu email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="md-form{{ $errors->has('password') ? ' has-error' : '' }}">
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" placeholder="Introduza a sua password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="md-form">
                            {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" placeholder="Introduza novamente a password" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registar-se
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
