@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 ">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}


                    </div>
                @endif

              <div class="row" style="padding: 20px;">


                <div class="col-sm-6">
                  <h3>Balance {{ $wallet->user->name }}</h3>
                  <p style= "text-align: text-center">
              <button type="button" class="btn btn-primary btn-lg btn-block">
                @if(!is_null($user->wallet->balance))
                                {{ $user->wallet->balance }}
                                @else
                                0.000

                            @endif
                            MRN
                          </button>
              </p>
                </div>

                <div class="col-sm-6">
                  <h3>Referidos</h3>
                  <p>Puedes ganar 2 MRN por cada referido que invites , simplemente comparte el link de referido y ganaras 2 MRN por cada persona que se registre con tu link.</p>
                  <p>
                    Cantidad de referidos:
                    <b>

              @if(!is_null($user->wallet->balance))
                  {{ $user->wallet->refferal }} User
                  @else
                  0 User

              @endif
              </b>
                </div>
                <div class="col-sm-12 form-group">
                  <h3>Link de referido</h3>
                    <div  class="form-control disabled">{{ url('/') }}/{{ Auth::user()->referido }}</div>
                </div>


                <div class="col-sm-12">
                    <form class="" action="{{route('retirarPost')}}" method="post">
                    {{ csrf_field() }}
                    @if($user->wallet->balance >= 20)
                      <button class="btn btn-primary btn-lg btn-block">Retirar MRN</button>
                      @else
                      <div class="btn btn-danger btn-lg btn-block" >
                        Necesitas 20 MRN para retirar
                      </div>
                    @endif
                    </form>
  <form class="form-group" action="{{ route('editarPost') }}" method="post">
                        {{ csrf_field() }}
                      <h3>Cambiar direccion adress</h3>
                      <input type="text" name="address" class="form-control" value="{{ Auth::user()->address }}">
                      <button class="btn btn-primary btn-lg btn-block">Editar</button>
                    </form>
                </div>

            </div>
            </div>
        </div>
    </div>
</div>
@endsection
