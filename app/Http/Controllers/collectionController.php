<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use Illuminate\Support\Facades\DB;
use Datatables;
use Yajra\DataTables\Facades\DataTables as FacadesDataTables;

class collectionController extends Controller
{
    public function index(){
        return view('collection.daftarKoleksi');
    }
    public function create(){
        return view ('collection.registerkoleksi');
    }
    public function store(Request $request){

        $request->validate([
            'namaKoleksi' => ['required', 'string'],
            'jenisKoleksi' => ['required', 'numeric' ],
            'jumlahKoleksi' => ['required', 'numeric']
        ]);

        $user = Collection::create([
            'namaKoleksi' => $request->namaKoleksi,
            'jenisKoleksi' => $request->jenisKoleksi,
            'jumlahKoleksi' => $request->jumlahKoleksi,
        ]);

        return view ('collection.daftarKoleksi');
    }
    public function show(Collection $collection){
        return view('collection.infoKoleksi');
    }

    public function getAllCollection(){
        $collections = DB::table('collections')
        ->select(
            'id as id',
            'namaKoleksi as judul',
            'jenisKoleksi as jenis',
            'jumlahKoleksi as jumlah',
        )
        ->orderBy('judul','asc')
        ->get();

        return FacadesDataTables::of($collections)
        -> addColumn('action', function ($collection){
            $html = '
            <button data-rowid="" class="btn btn-primary" data-toogle="tooltip" data-placements="top"
            data-container="body" title="Edit Koleksi" onclick="infoKoleksi('."'".$collection->id."'".')">

            <i class="fa fa-edit"></i>
            ';
            return $html;
        })
        ->make(true);
    }

}

