<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Perpus;
use App\Perpus_detail;
use App\Divisi;
use Carbon\Carbon;

class elibControllerRPA extends Controller
{


  public function frmRPA(Request $request){
		$pass=$request->session()->get('congcorang2');
		if($pass=='jeletot'){
			$kategory_list=Perpus::all();
			return view('elibdashrpa',compact('kategory_list'));
		}
		else{
			$msg="Gagal Login, Coba Lagi!";
			$divisi_list=Divisi::all();
			return view('loginelibrpa',compact('msg','divisi_list'));
		}

	}

  public function DashviewoutRPA(Request $request)
  {
    $request->session()->forget('congcorang2');
    $divisi_list=Divisi::all();
    return view('loginelibrpa',compact('divisi_list'));
  }


  public function vloginRPA()
  {
    $divisi_list=Divisi::all();
    return view('loginelibrpa',compact('divisi_list'));
  }


  public function getIdd($id_p){
    $id = DB::table('divisi_tb')->where('divisi', $id_p)->value('id_divisi');
    return $id;
  }

  public function cekloginfrm(Request $request){
    $cek="";
      // SELECT usernm, CAST(AES_DECRYPT(pwd, 'congcorang') AS CHAR(255)) xcd FROM user_adm  
        $cek=DB::select("SELECT usernm, CAST(AES_DECRYPT(pwd, 'ClashRoyale9091  ') AS CHAR(255)) xcd
         FROM user_adm WHERE usernm=:usernm", ['usernm' => $request->usernm]);

      if(!empty ($cek)){

        if($cek[0]->xcd==$request->pwd&&$cek[0]->usernm==$request->usernm)
        {
         //  redirect()->route('dashboard');



         $request->session()->put('congcorang2','jeletot');

         $usr=$request->usernm;
         $request->session()->put('status',$usr);

         return redirect()->route('frminputRPA')->with('id_divisi',self::getIdd($request->usernm));
        // $kategory_list=Perpus::all();
   			// return view('elibdashrpa',compact('kategory_list'));
        }
        else {
          $msg="Gagal Login, Coba Lagi!";
          $divisi_list=Divisi::all();
          return view('loginelibrpa',compact('divisi_list','msg'));

        }

      }
      else{
        $divisi_list=Divisi::all();
        return view('loginelibrpa',compact('divisi_list'));
      }

  }

  public function savepdf(Request $request){

        $file = $request->file('pth');
        $dt = Carbon::now();

        // $filename = 'RPA_'.$file->getClientOriginalName().$dt->minute.$dt->second.'.'.$file->getClientOriginalExtension();

        $filename = 'RPA_'.$dt->minute.$dt->second.$file->getClientOriginalName();
        

         $ss=preg_replace('/\s+/', '_',$filename);
        Storage::disk('pdfloc')->put($filename,file_get_contents($file));
        Storage::disk('pdfloc')->move($filename,$ss);

        $input=new \App\Perpus_detail;
        $input->id_perpus=$request->id_perpus;
        $input->id_divisi=$request->id_divisi;
        $input->pth=$ss;
        $input->save();

        //Display File Name
              // echo 'File Name: '.$file->getClientOriginalName();
              // echo '<br>';
              //
              // //Display File Extension
              // echo 'File Extension: '.$file->getClientOriginalExtension();
              // echo '<br>';
              //
              // //Display File Real Path
              // echo 'File Real Path: '.$file->getRealPath();
              // echo '<br>';
              //
              // //Display File Size
              // echo 'File Size: '.$file->getSize();
              // echo '<br>';
              //
              // //Display File Mime Type
              // echo 'File Mime Type: '.$file->getMimeType();

              // generate a new filename. getClientOriginalExtension() for the file extension
              // $filename = 'RPA' . time() . '.' . $file->getClientOriginalName();

            // save to storage/app/photos as the new $filename
            // $path = $file->storeAs('pdffiles', $filename);

            //Move Uploaded File
            // $destinationPath = public_path().'/pdffiles';
            // $file->move($destinationPath,$filename);
// dd($path);
      // return asset('gbr');

  }



}
