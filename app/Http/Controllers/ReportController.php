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
        $items_sold = DB::table('sales')
                ->join('items', 'items.id', '=', 'sales.id_barang')
                ->groupBy('items.id')
                ->orderBy('items.id', 'asc')
                ->select('items.nama as nama_barang', 'sales.qty')
                ->get();
        return view('menu/report.view', ['items' => $items_sold]);
    }
}
