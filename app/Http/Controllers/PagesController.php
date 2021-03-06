<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\CounterVote;
use App\Pemilih;
use App\Userlogin;
use App\Kandidat;
use App\JmlVote;
use Carbon\Carbon;

class PagesController extends Controller
{


  public function kandidattb()
  {
    // $pemilih_list=Pemilih::orderBy('nama','asc')->paginate(10);
    $kandidat_list=Kandidat::all();
    return view('dasboardkandidat',compact('kandidat_list'));

  }

    public function pemilihtb()
    {
      // $pemilih_list=Pemilih::orderBy('nama','asc')->paginate(10);
      $pemilih_list=Pemilih::all();
      $jml=Pemilih::count();
      $jmlb=0;
      return view('dashboardv',compact('pemilih_list','jml','jmlb'));
    }



   public function pemilihtpeta()
   {
     $pemilih_list=Pemilih::all();
     $jml=Pemilih::count();
     $jmlb=0;
     return view('peta',compact('pemilih_list','jml','jmlb'));
   }

    public function petapilih()
    {

      $pt=DB::select("SELECT *  FROM pemilih_tb");

          return json_encode($pt);
    }

    public function Voter()
    {
      $kandidat_list=Kandidat::all();
      return view('voter',compact('kandidat_list'));
    }


    public function fpemilihall()
    {

      $tot=DB::select("SELECT *  FROM pemilih_tb");

      return json_encode($tot);
    }

    public function fpemilih($nama)
    {

      $no=DB::table('pemilih_tb')->where('nama','like','%'.$nama.'%')->get();
      // $no=Pemilih::where('nama','LIKE','%'.$nama.'%')->first();;
      return json_encode($no);
    }


    public function Cariktp($no_ktp)
    {
      $no=Pemilih::where('no_ktp','=',$no_ktp)->first();;
      return json_encode($no);
    }

    public function jmlVotes()
    {

      $tot=DB::select("SELECT *  FROM v_sum_vote");

      return json_encode($tot);
    }


    public function jmlVotep($id_kandidat)
    {

      $tot=DB::select("SELECT *  FROM v_sum_vote");

      $no=DB::select("SELECT *  FROM v_vote_kandidat WHERE id_kandidat=:id_kandidat",
       ['id_kandidat' => $id_kandidat]);
      // $no=JmlVote::where('id_kandidat','=',$id_kandidat)->first();

      $p=($no[0]->tot_vote/$tot[0]->tot_vote)*100;

      return floor($p);
    }


    public function jmlVote($id_kandidat)
    {

      // $tot=DB::select("SELECT *  FROM v_sum_vote");

      $no=DB::select("SELECT *  FROM v_vote_kandidat WHERE id_kandidat=:id_kandidat",
       ['id_kandidat' => $id_kandidat]);
      // $no=JmlVote::where('id_kandidat','=',$id_kandidat)->first();


      return json_encode($no);
    }


    public function jmlVotekeldesa($id_kandidat)
    {
      // SELECT *,SUM(vote) AS tot_vote FROM v_vote_umur WHERE id_kandidat=2 AND umur >17 AND umur < 20 GROUP BY umur  
      $no=DB::select("SELECT *,SUM(vote) AS tot_vote FROM V_vote_kel_desa WHERE id_kandidat=:id_kandidat GROUP BY kel_desa",
       ['id_kandidat' => $id_kandidat]);

      return json_encode($no);
    }


    public function jmlVoteprofesi($id_kandidat)
    {
      // SELECT *,SUM(vote) AS tot_vote FROM v_vote_umur WHERE id_kandidat=2 AND umur >17 AND umur < 20 GROUP BY umur  
      $no=DB::select("SELECT *,SUM(vote) AS tot_vote FROM v_vote_profesi WHERE id_kandidat=:id_kandidat GROUP BY profesi",
       ['id_kandidat' => $id_kandidat]);

      return json_encode($no);
    }


    public function jmlVoteUmurD($id_kandidat)
    {
      // SELECT *,SUM(vote) AS tot_vote FROM v_vote_umur WHERE id_kandidat=2 AND umur >17 AND umur < 20 GROUP BY umur  
      $no=DB::select("SELECT *,SUM(vote) AS tot_vote FROM v_vote_umur WHERE id_kandidat=:id_kandidat AND umur >20 AND umur <= 50 GROUP BY umur",
       ['id_kandidat' => $id_kandidat]);

      return json_encode($no);
    }

    public function jmlVoteUmurE($id_kandidat)
    {
      // SELECT *,SUM(vote) AS tot_vote FROM v_vote_umur WHERE id_kandidat=2 AND umur >17 AND umur < 20 GROUP BY umur  
      $no=DB::select("SELECT *,SUM(vote) AS tot_vote FROM v_vote_umur WHERE id_kandidat=:id_kandidat AND umur >50 GROUP BY umur",
       ['id_kandidat' => $id_kandidat]);

      return json_encode($no);
    }



    public function jmlVoteUmur($id_kandidat)
    {
      // SELECT *,SUM(vote) AS tot_vote FROM v_vote_umur WHERE id_kandidat=2 AND umur >17 AND umur < 20 GROUP BY umur  
      $no=DB::select("SELECT *,SUM(vote) AS tot_vote FROM v_vote_umur WHERE id_kandidat=:id_kandidat AND umur >17 AND umur <= 20 GROUP BY umur",
       ['id_kandidat' => $id_kandidat]);

      return json_encode($no);
    }


    public function Dashviewout(Request $request)
    {
      $request->session()->forget('congcorang');
      return view('login');
    }

    public function Dashview(Request $request)
    {
      $pass=$request->session()->get('congcorang');
      if($pass=='jeletot'){
        $kandidat_list=Kandidat::all();
        return view('dashboard',compact('kandidat_list'));
      }
      else{
        $msg="Gagal Login, Coba Lagi!";
        return view('login',compact('msg'));
      }
    }

    public function Dashviewkl(Request $request)
    {
      $pass=$request->session()->get('congcorang');
      if($pass=='jeletot'){
        $kandidat_list=Kandidat::all();
        return view('dashboardkl',compact('kandidat_list'));
      }
      else{
        $msg="Gagal Login, Coba Lagi!";
        return view('login',compact('msg'));
      }
    }

    public function Dashviewp(Request $request)
    {
      $pass=$request->session()->get('congcorang');
      if($pass=='jeletot'){
        $kandidat_list=Kandidat::all();
        return view('dashboardp',compact('kandidat_list'));
      }
      else{
        $msg="Gagal Login, Coba Lagi!";
        return view('login',compact('msg'));
      }
    }

    public function Dashviewpeta(Request $request)
    {
      $pass=$request->session()->get('congcorang');
      if($pass=='jeletot'){
        $kandidat_list=Kandidat::all();
        return view('dashboardpeta',compact('kandidat_list'));
      }
      else{
        $msg="Gagal Login, Coba Lagi!";
        return view('login',compact('msg'));
      }
    }



    public function ceklogin(Request $request)
    {
$cek="";
      // SELECT usernm, CAST(AES_DECRYPT(pwd, 'congcorang') AS CHAR(255)) xcd FROM user_adm  
        $cek=DB::select("SELECT usernm, CAST(AES_DECRYPT(pwd, 'congcorang') AS CHAR(255)) xcd
         FROM user_adm WHERE usernm=:usernm", ['usernm' => $request->usernm]);

      if(!empty ($cek)){


        if($cek[0]->xcd==$request->pwd&&$cek[0]->usernm==$request->usernm)
        {
         //  redirect()->route('dashboard');
         $request->session()->put('congcorang','jeletot');
         return redirect()->action('PagesController@Dashview');
        }
        else {
          $msg="Gagal Login, Coba Lagi!";
          return view('login',compact('msg'));
        }

      }
      else{
        return view('login');
      }

        //  return $cek[0]->xcd;
    }

    public function store(Request $request)
    {

      $pil=new \App\Pemilih;
      $pil->no_ktp=$request->no_ktp;
      $pil->nama=$request->nama;
      $pil->tgl_lahir=$request->tgl_lahir;
      $dt = Carbon::parse($request->tgl_lahir);

      $pil->umur=Carbon::createFromDate
      ($dt->year, $dt->month, $dt->day)->diff(Carbon::now())->format
      ('%y');
      $pil->jk=$request->jk;
      $pil->profesi=$request->profesi;
      $pil->latitude=$request->latitude;
      $pil->longitude=$request->longitude;
      $pil->kel_desa=$request->kel_desa;
      $pil->kecamatan=$request->kecamatan;

      $pil->save();

      $vote=new \App\CounterVote;
      $vote->no_ktp=$request->no_ktp;
      $vote->id_kandidat=$request->id_kandidat;
      $vote->vote=1;

      $vote->save();


      // $kandidat_list=Kandidat::all();
      // return redirect('voter',compact('kandidat_list'));

      return redirect()->action('PagesController@Voter');
    }
}
