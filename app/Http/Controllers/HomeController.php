<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use App\Wallet;
use App\services\jsonRPCClient;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $wallet = Wallet::where('user_id', Auth::user()->id)->first();
      if (!isset($wallet)) {
        $user = new Wallet();
        $user->user_id = Auth::user()->id;
        $user->save();
return view('home', compact('wallet'));

}

        return view('home', compact('wallet'));
    }

	public function registrar(Request $request)
{
 $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:6|confirmed',
      'address' => 'required|string|max:255'

  ]);
      $registrar = new User();
      $registrar->refferal_id = $request->get('user');
      $registrar->name = $request->get('name');
      $registrar->email = $request->get('email');
      $registrar->password = bcrypt($request->get('password'));
      $registrar->address = $request->get('address');
      $registrar->code = str_random(10);
      $registrar->referido = str_random(10);
      $registrar->active = 1;
      $registrar->save();


	return redirect()->route('login')->with('status', 'Registrado exitosamente');

}

    public function perfil()
    {
      $user = User::find(Auth::user()->id);
      $wallet = Wallet::where('user_id', Auth::user()->id)->first();
    return view('perfil', compact('user','wallet'));
    }

    public function perfilPost(Request $request)
    {
      $carbon = new Carbon();
      $response_recaptcha = $_POST['g-recaptcha-response'];
      if(isset($response_recaptcha)&& $response_recaptcha){
        $secret ="6LfmCWUUAAAAAFMWsiYsjtvenAxT1yhnKLFMKPPJ";
        $ip = $_SERVER['REMOTE_ADDR'];
        $validation_server =file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=response_recaptcha&remoteip=ip");
        $jsonResponse = Json_decode($validation_server);
        print_r($jsonResponse);
        if($jsonResponse->success)
        {
          echo"Es valido";
      if ($request->get('dato') === 'empezar') {
        $wallet = Wallet::where('user_id', Auth::user()->id)->first();
        $wallet->last_retiro = $carbon->addHour(2);
	$wallet->balance = 0.5;
        $wallet->save();

      return redirect('/home')->with('status', 'Ya empezaste a generar mercoin');


      }
    }
  }
  else{
        $wallet = Wallet::where('user_id', Auth::user()->id)->first();
        $wallet->last_retiro = $carbon->addHour(2);
        $wallet->balance = $wallet->balance + 0.50;
        $wallet->save();

      return redirect('/home')->with('status', 'Acabas de reclamar 0.5 MRN dentro de 2 horas podras volver a reclamar tus MRN!');

      }
    }

    public function referido($code)
    {

      $user = User::where('referido',$code)->first();
if($user != null && $user != '')
{
      return view('auth.referido', compact('user','code'));
}

 return redirect('/');

}

    public function referidoPost(Request $request)
    {
    $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:6|confirmed',
      'address' => 'required|string|max:255'

  ]);
      $registrar = new User();
      $registrar->refferal_id = $request->get('user');
      $registrar->name = $request->get('name');
      $registrar->email = $request->get('email');
      $registrar->password = bcrypt($request->get('password'));
      $registrar->address = $request->get('address');
      $registrar->code = str_random(10);
      $registrar->referido = str_random(10);
      $registrar->active = 1;
      $registrar->save();





      return redirect()->route('home');
    }

public function retirarPost(Request $request)
{

$wallet = Wallet::where('user_id', Auth::user()->id)->first();
$address = $wallet->user->address;
$balance = $wallet->balance;

$json = new jsonRPCClient('http://usuario:password@127.0.0.1:23880/');

 $json->sendfrom('mercoin',$address, intval($balance));

$wallet->balance = 0.00;
$wallet->save();

return redirect(route('perfil'))->with('status', 'Ya retiraste tu mercoin, puedes revisar en tu monedero.');

}

public function prueba()
{
$json = new jsonRPCClient('http://usuario:password@127.0.0.1:23880/');
return $json->getbalance('mercoin');
}
/*  rpcuser=usuario
rpcpassword=password
rpcallowip=127.0.0.1
rpcport=23880
daemon=1
server=1
*/
    public function activar($code)
    {
      $user = User::find(Auth::user()->id);

	if($user->active === 2){return redirect()->route('home')->with('status', 'Ya tu usuario esta activo');}
      if($user->code === $code){

      $user->active = 2;
     $user->save();
if(!empty($user->refferal_id)){
$set = Wallet::where('user_id', $user->refferal_id)->first();
      $set->balance = $set->balance + 2.00;
      $set->refferal = $set->refferal + 1;
      $set->save();
}
     return redirect()->route('home');
        }

        return redirect()->route('verificar')->with('status', 'Codigo incorrecto');
    }

    public function reenviar()
    {
      $data['name'] = Auth::user()->name;
       $data['email'] = Auth::user()->email;
      $data['code'] = Auth::user()->code;

       Mail::send('auth.mail',$data, function ($mensaje) use ($data){
           $mensaje->to($data['email'],$data['name'])->subject('Confirmacion Mercoin');
       });

       return redirect()->route('verificar')->with('status', 'Mensaje enviado satifactoriamente');
    }

    public function verificar()
    {
      if (Auth::user()->active === 1) {
        return view('auth.verificar');
      }
      return redirect()->route('home');
    }



public function editarPost(Request $request)
{
  $user = User::find(Auth::user()->id);

  $user->address = $request->get('address');
  $user->save();

  return redirect()->route('perfil')->with('status', 'Wallet cambiada Satifactoriamente');
}
}
