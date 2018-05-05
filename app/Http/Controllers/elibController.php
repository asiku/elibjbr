<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Perpus;
use App\Divisi;
use App\V_perpus;
use Carbon\Carbon;

class elibController extends Controller
{
	private static $tot=0;
    //
	public function elibIndex(Request $request){
		$pass=$request->session()->get('congcorang');
		if($pass=='jeletot'){
			$kategory_list=Perpus::all();
			return view('elib',compact('kategory_list'));
		}
		else{
			$msg="Gagal Login, Coba Lagi!";
			$divisi_list=Divisi::all();
			return view('loginelib',compact('msg','divisi_list'));
		}

	}



	public function Dashviewout(Request $request)
	{
		$request->session()->forget('congcorang');
		$divisi_list=Divisi::all();
		return view('loginelib',compact('divisi_list'));
	}

	public function vlogin()
	{
		$divisi_list=Divisi::all();
		return view('loginelib',compact('divisi_list'));
	}

	public function ceklogin(Request $request)
	{
	$cek="";
		// SELECT usernm, CAST(AES_DECRYPT(pwd, 'congcorang') AS CHAR(255)) xcd FROM user_adm  
			$cek=DB::select("SELECT usernm, CAST(AES_DECRYPT(pwd, 'ClashRoyale9091  ') AS CHAR(255)) xcd
			 FROM user_adm WHERE usernm=:usernm", ['usernm' => $request->usernm]);

		if(!empty ($cek)){


			if($cek[0]->xcd==$request->pwd&&$cek[0]->usernm==$request->usernm)
			{
			 //  redirect()->route('dashboard');
			 $request->session()->put('congcorang','jeletot');

			 $usr=$request->usernm;
			 $request->session()->put('status',$usr);

			 return redirect()->action('elibController@elibIndex');
			}
			else {
				$msg="Gagal Login, Coba Lagi!";
				$divisi_list=Divisi::all();
				return view('loginelib',compact('divisi_list','msg'));

			}

		}
		else{
			$divisi_list=Divisi::all();
			return view('loginelib',compact('divisi_list'));
		}

			//  return $cek[0]->xcd;
	}


public static function angka($a)
{

	static::$tot=static::$tot+$a;
	return static::$tot;

}

public static function tes($kategory){
	$vperpus_list=V_perpus::where('kategory',$kategory)->get();
	return $vperpus_list;

}



}
