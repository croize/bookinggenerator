<?php

namespace App\Http\Controllers\Turis;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Booking;
use App\Activity;
use App\Datebook;
use DB;
use Auth;

class TurisController extends Controller
{
  public function index()
  {
    $data = Activity::all();
    $status = Datebook::all();
    return view('welcome',compact('data','status'));
  }

  public function book(Request $request)
  {
    $sa = new Booking();
    $sa->bookid = Str::random_int(7);
    $sa->jumlah_orang = $request->jumlah_orang;
    $sa->activity_id = $request->activity;
    $sa->tanggal = $request->tanggal;
    $cekharga = DB::table('table_activity')->where('id','=',$request->activity)->value('price');
    $cekbatas = DB::table('table_date_activity')->where([['tanggal', '=', $request->tanggal],['activity_id', '=', $request->activity]])->value('batas_orang');
    $cekturis = DB::table('table_date_activity')->where([['tanggal', '=', $request->tanggal],['activity_id', '=', $request->activity]])->value('total_turis');
    $ceksisaturis = $cekbatas - $cekturis;
    $sa->price = $cekharga * $request->jumlah_orang;
    if ($cekbatas != NULL && $cekturis != NULL) {
        if ($ceksisaturis < $request->jumlah_orang) {
        return redirect('turis')->with('error','Sorry your selected date is full for your request guest. Available for '.$ceksisaturis.' guest');
        }elseif ($ceksisaturis >= $request->jumlah_orang) {
          $sa->save();
          return redirect('turis')->with('success','Your book activity request has been saved');
        }elseif ($ceksisaturis == 0) {
          return redirect('turis')->with('error','Sorry your selected date is full');
        }
    }elseif ($cekbatas == NULL && $cekturis == NULL) {
      $sa->save();
      return redirect('turis')->with('success','Your book activity request has been saved');
    }
  }
}
