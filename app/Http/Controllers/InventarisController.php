<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventaris;

class InventarisController extends Controller
{
    // public function data(){
    //     return view( 'inventariskantor' );
    // }
    // public function login(){
    //     return view( 'inventaris.login' );
    // }
    public function views(){
        // $products = Inventaris::all();
        // , compact('products')
        return view( 'inventaris.views');
    }
    public function creat(){
        return view( 'inventaris.creat' );
    }
    public function simpan(Request $request){
        // return $request;
        inventaris::creat([
            'nama'=> $request->nama_barang,
            'jumlah'=> $request->jumlah,
            'gudang'=> $request->gudang,
        ]);
        return redirect('/simpan');
    }
    public function read(){
        $products = Inventaris::all();
        return view( 'inventaris.read', compact('products'));
    }
    public function update($id){

        $products = Inventaris::findorfail($id);
        return view( 'inventaris.update', compact('products'));
    }
    public function delete(){
        return view( 'inventaris.delete' );
    }
}
