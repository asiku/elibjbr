<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Perpus;
use App\Divisi;
use App\V_perpus;
Use App\Cabang;
use Carbon\Carbon;

class elibController extends Controller
{
	private static $tot=0;
	private static $tot1=0;
	private static $tot2=0;
	private static $tot3=0;
	private static $tot4=0;
	private static $tot5=0;
    //
	public function elibIndex(Request $request){
		$pass=$request->session()->get('congcorang');
		if($pass=='jeletot'){
			$kategory_list=Perpus::all();
			$divisi_list=Divisi::all();
			$cabang_list=Cabang::all();
			return view('elib',compact('kategory_list','divisi_list','cabang_list'));
		}
		else{
			$msg="Gagal Login, Coba Lagi!";
			$divisi_list=Divisi::orderBy('divisi')->get();
			$cabang_list=Cabang::all();
			return view('loginelib',compact('msg','divisi_list','cabang_list'));
		}

	}


	public function elibIndexadmin(Request $request){
		$pass=$request->session()->get('congcorang');
		if($pass=='jeletot'){
			$kategory_list=Perpus::all();
			$divisi_list=Divisi::all();
			$cabang_list=Cabang::all();
			return view('elibadminmain',compact('kategory_list','divisi_list','cabang_list'));
		}
		else{
			$msg="Gagal Login, Coba Lagi!";
			$divisi_list=Divisi::orderBy('divisi')->get();
			$cabang_list=Cabang::all();
			return view('loginelib',compact('msg','divisi_list','cabang_list'));
		}

	}

	public function Dashviewout(Request $request)
	{
		$request->session()->forget('congcorang');
		$divisi_list=Divisi::orderBy('divisi')->get();
		$cabang_list=Cabang::all();
		return view('loginelib',compact('divisi_list','cabang_list'));
	}

	public function vlogin()
	{
		$divisi_list=Divisi::orderBy('divisi')->get();
		$cabang_list=Cabang::all();
		return view('loginelib',compact('divisi_list','cabang_list'));
	}

	public function ceklogin(Request $request)
	{
	$cek="";
		// SELECT usernm, CAST(AES_DECRYPT(pwd, 'congcorang') AS CHAR(255)) xcd FROM user_adm  
			$cek=DB::select("SELECT usernm,id_cabang, CAST(AES_DECRYPT(pwd, 'ClashRoyale9091  ') AS CHAR(255)) xcd
			 FROM user_adm WHERE usernm=:usernm and id_cabang=:id_cabang", ['usernm' => $request->usernm,'id_cabang'=>$request->id_cabang]);

		if(!empty ($cek)){


			if($cek[0]->xcd==$request->pwd&&$cek[0]->usernm==$request->usernm&&$cek[0]->id_cabang==$request->id_cabang)
			{
			 //  redirect()->route('dashboard');
			 $request->session()->put('congcorang','jeletot');

			 $usr=$request->usernm;
			 $request->session()->put('status',$usr);

				 if($request->usernm=="Admin"){
					  return redirect()->action('elibController@elibIndexadmin');

				 }
				 else {

						return redirect()->action('elibController@elibIndex');
				 }

			}
			else {
				$msg="Gagal Login, Coba Lagi!";
				$divisi_list=Divisi::all();
				$cabang_list=Cabang::all();
				return view('loginelib',compact('divisi_list','msg','cabang_list'));

			}

		}
		else{
			$divisi_list=Divisi::all();
			$cabang_list=Cabang::all();
			return view('loginelib',compact('divisi_list','cabang_list'));
		}

			//  return $cek[0]->xcd;
	}


public static function angka()
{

	static::$tot=static::$tot+1;
	return static::$tot;

}

public static function angkachild()
{

	static::$tot1=static::$tot1+1;
	return static::$tot1;

}

public static function angkaparent()
{

	static::$tot2=static::$tot2+1;
	return static::$tot2;

}

public static function angkasub()
{

	static::$tot3=static::$tot3+1;
	return static::$tot3;

}

public static function angkasub2()
{

	static::$tot4=static::$tot4+1;
	return static::$tot4;

}

public static function angkapth()
{

	static::$tot5=static::$tot5+1;
	return static::$tot5;

}



public static function filterkategory($kategory){
	$vperpus_list=V_perpus::where('kategory',$kategory)->get();
	return $vperpus_list;

}

public static function filterkategorydivisi_kat($divisi,$kategory){
	$vperpus_list=V_perpus::where('divisi',$divisi)->where('kategory',$kategory)->first();
	return $vperpus_list['kategory'];

}


public static function filterkategorydivisi($divisi,$kategory){
	$vperpus_list=V_perpus::where('divisi',$divisi)->where('kategory',$kategory)->get();
	return $vperpus_list;

}


public static function filterkategoryall($kategory){
	$vperpus_list=V_perpus::all();
	return $vperpus_list;

}


}
