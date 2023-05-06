<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
                ->groupBy('items.id')
                ->orderBy('items.id', 'asc')
                ->select('items.nama as nama_barang', 'sales.qty as jumlah_terjual')
                ->get();
        foreach($items_sold as $item){
            $nama_barang[$counter] = $item->nama_barang;
            $jumlah_terjual[$counter] = $item->jumlah_terjual;
            $counter++;
        }
        return response()->json($items_sold);

        /*$nama_barang = json_encode($nama_barang);
        $jumlah_terjual = json_encode($jumlah_terjual);
        return view('menu/report.view', [
            'labels' => $nama_barang,
            'datas' => $jumlah_terjual
        ]);*/
    }
}
