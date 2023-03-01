<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Grooming_kitten;
use App\Models\Grooming_Adult;
use App\Models\Food;
use App\Models\Pemesanan;

use Illuminate\Support\Facades\File;
use App\Http\Requests\FoodRequest;

class Grooming_Food extends Controller
{

    public function Dashboard()
    {
        return view('dashboard');
    }

    /**
     * 
     * Controller untuk person
     * 
     */

    public function Grooming()
    {
        // Menampilkan data paket usia kitten
        $gro = Grooming_Kitten::all();
        // Menampilkan data paket usia adult
        $adul = Grooming_Adult::all();
        return view('Pelayanan', ['groomings'=>$gro], ['adults'=>$adul]);
    }

    public function Food()
    {
        $food = Food::all();
        return view('Pet_Food', compact('food'));
    }

    public function Pemesanan()
    {
        $pesanan = Pemesanan::all();
        return view('pemesanan', compact('pesanan'));
    }

    public function cetakStruk($id)
    {
        $pesanan = Pemesanan::find($id); 
        $pesanan = Pemesanan::all();
        return view('cetakstruk', compact('pesanan'));
    }

    /**
     * 
     * End untuk controller person
     * 
     */

    /**
     * 
     * Controller untuk tambah
     * 
     */

    public function TambahKitten()
    {
            // Menampilkan view form kitten
        return view('tambahkitten');
    }

    public function TambahAdult()
    {
             // Menampilkan view form adult
        return view('tambah_adult');
    }

    public function ProsesTambah(Request $request)
    {
            // Menambah paket data kitten
        Grooming_Kitten::create($request->all());

        return redirect('/grooming');
    }

    public function ProsesAdult(Request $request)
    {
            // Menambah paket data adult
        Grooming_Adult::create($request->all());

        return redirect('/grooming');
    }

    public function tambah_food()
    {
        return view('tambah_food');
    }

    public function ProsesFood(Request $request)
    {
            // Menambah paket data food
        $food = Food::create($request->all());

            // Memindahkan file gambar ke folder public
        if($request->hasFile('gambar_food')) {
            $request->file('gambar_food')->move('img/Food', $request->file('gambar_food')->getClientOriginalName());
            $food->gambar_food = $request->file('gambar_food')->getClientOriginalName();
            $food->save();
        }

        return redirect('/Food');
    }

    public function tambah_pesan()
    {
        return view('tambah_pesan');
    }

    public function proses_pesan(Request $request)
    {
        $pesan = Pemesanan::create($request->all());

        return redirect('/Pemesanan');
    }

    /**
     * 
     * End untuk controller tambah
     * 
     */

    /**
     * 
     * Controller untuk edit dan hapus
     * 
     */

     public function EditAdult($id)
     {   
         $data = Grooming_Adult::find($id);
         return view('edit_paket_adult', compact('data'));
     }
 
     public function ProsesAdultEdit(Request $request, $id)
     {
         $data = Grooming_Adult::find($id);
         $data->update($request->all());
         return redirect('/grooming');
     }
 
     public function hapus($id)
     {
         $data = Grooming_Adult::find($id);
         $data->delete();
         return redirect('/grooming');
     }
 
     public function Edit_Kitten($id)
     {
         $data = Grooming_Kitten::find($id);
         return view('edit_paket_kitten', compact('data'));
     }
     
     public function proseskitten(Request $request, $id)
     {
         $data = Grooming_Kitten::find($id);
         $data->update($request->all());
         return redirect('/grooming');
     }
 
     public function delete($id)
     {
         $data = Grooming_Kitten::find($id);
         $data->delete();
         return redirect('/grooming');
     }
 
     public function Edit_Food(Request $request, $id)
     {
         $fos = Food::all();
 
         $f = Food::find($id);
 
         
         return view('edit_pet food', compact('f', 'fos'));
     }
     
     public function prosesfoodEdit(FoodRequest $request, $id)
     {   
        $data = $request->validated();
        
        $f = Food::find($id);
 
             if($request->hasfile('gambar_food')){
                 $destination ='img/Food/'.$f->gambar_food;
                 if(File::exists($destination)){
                     File::delete($destination);
                 }
 
                 $file = $request->file('gambar_food');
                 $filename = time() . '.' . $file->getClientOriginalName();
                 $file->move('img/Food/', $filename);
                 $f->gambar_food = $filename;
             }
 
             $f->merk = $data['merk'];
             $f->harga = $data['harga'];
             $f->stok = $data['stok'];
 
             $f->update();
 
         return redirect('/Food');
     }
 
     public function hilang($id)
     {
         $f = Food::findOrFail($id);
 
         if($f){
             $destination = 'img/Food/' .$f->gambar_food;
             if(File::exists($destination)){
                 File::delete($destination);
             }
         }
         $f->delete();
 
         return redirect('/Food');
     }
 
     public function edit_pesan($id)
     {
         $data = Pemesanan::find($id);
         return view('edit_pesan', compact('data'));
     }
     
     public function proses_edit_pesan(Request $request, $id)
     {
         $data = Pemesanan::find($id);
         $data->update($request->all());
         return redirect('/Pemesanan');
     }
 
     public function delete_pesan($id)
     {
         $data = Pemesanan::find($id);
         $data->delete();
         return redirect('/Pemesanan');
     }

     /**
      * End untuk controller edit dan hapus
      */

}
