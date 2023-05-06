<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SalesController extends Controller
{
    function index()
    {
        //get sales according to user's level(role)
        $user = Auth::user();
        if ($user->level == 'pembeli') {
            $sales = DB::table('sales')
                ->join('items', 'items.id', '=', 'sales.id_barang')
                ->select('sales.*', 'items.nama as nama_barang')
                ->whereIn('id_user', array($user->id))
                ->get();
        } else {
            $sales = DB::table('sales')
                ->join('items', 'items.id', '=', 'sales.id_barang')
                ->select('sales.*', 'items.nama as nama_barang', 'items.stok')
                ->where('status', false)
                ->get();
        }

        //render view with sales
        return view('menu/sales.index', compact('sales'))->with([
            'user' => Auth::user()
        ]);
    }

    public function create()
    {
        return view('menu/sales.create')->with([
            'user' => Auth::user(),
            'item' => Item::all()
        ]);
    }

    public function store(Request $request)
    {
        //validate form
        $validator = Validator::make($request->all(),[
            'id_barang' => 'required',
            'qty' => 'required'
        ]);
        //retrieve user
        $user = Auth::user();
        //retrieve validated input
        $validated = $validator->safe()->only([
            'id_barang',
            'qty'
        ]);

        
        // get harga_jual from items table
        $harga = DB::table('items')
                ->select('harga_jual')
                ->where('id_barang', $request->id_barang)
                ->get();
        //calculate total`
        $total = $harga * $request->qty;

        //create order
        Sales::create([
            'id_user' => $user->id,
            'id_barang' => $request->id_barang,
            'qty'   => floatval(str_replace(",", "", $request->qty)),
            'harga_jual'   => floatval(str_replace(",", "", $harga)),
            'total'   => floatval(str_replace(",", "", $total))
        ]);

        //staff should validate the sales (order)

        //redirect to index
        return redirect()->route('sales.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(Sales $sales)
    {
        return view('menu/sales.edit', compact('sales'))->with([
            'user' => Auth::user()
        ]);
    }

    public function update(Request $request, Sales $sales, Item $item)
    {
        $this->validate($request, [
            // 'id_user' => 'required',
            // 'nama_user' => 'required',
            // 'id_barang' => 'required',
            // 'nama_barang' => 'required',
            'stok' => 'required',
            // 'harga_jual' => 'required',
            // 'total' => 'required'
        ]);
        // dd($request);
        $item = Sales::all()->whereIn('id_barang', array($request->id_barang));


        //create item
        $item->update([
            // 'nama_barang'     => $item->nama,
            'stok'   => $item->stok - floatval(str_replace(",", "", $request->qty)),
            // 'password'   => Hash::make($request->password)
        ]);

        //redirect to index
        return redirect()->route('sales.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function getbarang($id)
    {
        $data = Item::where('id', $id);

        return response()->json($data);
    }
}
