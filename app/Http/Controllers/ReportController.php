<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use App\Models\User;
use App\Notifications\NewUserNotification;


class ReportController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $nama_barang = array();
        $jumlah_terjual = array();
        $counter = 0;
        $items_sold = DB::table('sales')
                ->join('items', 'items.id', '=', 'sales.id_barang')
                ->select('items.nama as nama_barang', DB::raw('SUM(sales.qty) as jumlah_terjual'))
                ->groupBy('items.id')
                ->orderBy('items.id', 'asc')
                ->get();
        foreach($items_sold as $item => $value){
            $nama_barang[$counter] = $value->nama_barang;
            $jumlah_terjual[$counter] = $value->jumlah_terjual;
            $counter++;
        }
        /*
        $tipe = gettype($value->nama_barang);
        return response()->json($nama_barang);
        $nama_barang = json_encode($nama_barang);
        */
        
        $user = User::find(1);
        $user->email = 'azmi.fadhillah@binus.ac.id';
        $user->save();
        //$notification = new NewUserNotification;
        //$user->routeNotificationForMail($notification);
        Notification::send($user, new NewUserNotification);

        $jumlah_terjual = json_encode($jumlah_terjual);
        return view('menu/report.view', [
            'labels' => $nama_barang,
            'datas' => $jumlah_terjual
        ]);
    }
}
