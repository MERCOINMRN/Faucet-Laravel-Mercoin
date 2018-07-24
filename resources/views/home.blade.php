@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">




  <!-- sidebar -->
      <div class="col-sm-3">
      <div class="">
        <div class="panel panel-default">
            <div class="panel-heading">Telegram</div>
            <div class="panel-body text-center">
              <a href="https://t.me/MercoinTALK">
            <div class="">
              <i class="fa fa-telegram fa-5x" aria-hidden="true"></i>
              <h3 style="color: black" > Telegram </h3>
              <p>Accede a contenido exclusivo dando click</p>
            </div>
          </a>
            </div>
      </div>
      <div class="panel panel-default">
      <div class="panel-heading">Exchange</div>

      <div class="panel-body text-center">


        <a href="https://www.southxchange.com/Market/Book/MRN/BTC">
      <div class="">
        <i class="fa fa-exchange fa-5x" aria-hidden="true"></i>
        <h3 style="color: black" > Southexchange</h3>
        <p>Compra y vende MRN dando click</p>
      </div>
    </a>


      </div>
    </div>
    <div id="SC_TBlock_541497" class="SC_TBlock">loading...</div>
      </div>
    </div>
  <!-- content -->
        <div class="col-md-9 ">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body text-center">
                  <p>Denominada así en honor al MERCOSUR, es una nueva altcoin que a diferencia de las demás criptomonedas, que salen al mundo y ya, fue pensada para que su
                    uso sea destinado pura y exclusivamente en la región latinoamericana. Esto no quiere decir que se impidan transacciones al resto del globo, sino más bien
                    que la región sea la primera en adoptarla como criptomoneda oficial. De eso se trata, de que haya nacido para que los ciudadanos de la comunidad tengan
                    sentido de pertenencia en ella.<p>


                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}


                        </div>
                    @endif
<p class="alert alert-info" role="alert">Para retirar el dinero necesitas recaudar 20 MRN, el boton sera desbloqueado cada 2 Horas, la cual te dara una cantidad de 0.5 MRN</p>
<p>Te quedan:</p>

<form class="" action="{{ route('perfilPost')}}" method="post">
<center><div class="g-recaptcha" data-sitekey="6LfmCWUUAAAAAGqL4JVVjRYtxOoYgeDTPwLyzEzs"></div></center>
{{ csrf_field() }}
  @if(!isset($wallet->last_retiro))
  <input type="hidden" name="dato" value="empezar">
  <button id="envio" class="btn btn-info btn-large" style="cursor: pointer">Empiza a ganar MRN</button>
@else


    @if($wallet->last_retiro <=  \Carbon\Carbon::now())
    <input type="hidden" name="dato" value="retirar">
    <button id="envio" class="btn btn-success btn-lg btn-block" style="cursor: pointer">Retirar MRN</button>
    @else
    <p>Te quedan <b>
    {{
     \Carbon\Carbon::parse($wallet->last_retiro)->diffForHumans()
    }}
       <b>
    </p>
    <div id="envio" class="btn btn-danger btn-lg btn-block" style="cursor: pointer">Todavia no puedes retirar</div>
    @endif


  @endif
    </form>

    <div id="SC_TBlock_541490" class="SC_TBlock">loading...</div>

                </div>
            </div>

        </div>
      <div class="col-md-3 ">
        <div class="panel panel-default">
            <div class="panel-heading">Explorador</div>
            <div class="panel-body text-center">
              <a href="https://t.me/MercoinTALK">
            <div class="">
              <i class="fa fa-google-wallet fa-5x" aria-hidden="true"></i>
            </div>
          </a>
            </div>
          </div>
        </div>
        <div class="col-md-3 ">
          <div class="panel panel-default">
              <div class="panel-heading">Social MRN</div>
              <div class="panel-body text-center">
                <a href="https://beta.mercoin.org/">
              <div class="">
                <i class="fa fa-heart fa-5x" aria-hidden="true"></i>
              </div>
            </a>
              </div>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="panel panel-default">
                <div class="panel-heading">wallets</div>
                <div class="panel-body text-center">
                  <a href="https://mercoin.org/recursos/">
                <div class="">
                  <i class="fa fa-credit-card-alt fa-5x" aria-hidden="true"></i>
                </div>
              </a>
                </div>
              </div>
            </div>

            <div id="SC_TBlock_544334" class="SC_TBlock col-sm-3">loading...</div>
            <div id="SC_TBlock_544336" class="SC_TBlock col-sm-3">loading...</div>
            <div id="SC_TBlock_544337" class="SC_TBlock col-sm-3">loading...</div>
            <div id="SC_TBlock_544338" class="SC_TBlock col-sm-3">loading...</div>
    </div>
</div>
@endsection
