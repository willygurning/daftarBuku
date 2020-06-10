<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\book;
class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        
        $buku = book::latest()->paginate(env('PER_PAGE'));
         
         return view('buku.index',['buku' => $buku]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $book = new Book; 
        // $book->judul = $request->judul;
        // $book->jenis = $request->jenis;
        // $book->jumlah = $request->jumlah;
        // $book->keterangan = $request->keterangan;

        // $book->save();

        $request->validate([
            'judul' => 'required',
            'jumlah' => 'required'
        ]);

        Book::create([
            'judul' => $request->judul,
            'jenis' => $request->jenis,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan,
        ]);

        // Book::create($request->all());

        return redirect('/buku')->with('status','Data berhasil ditambahkan');
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit(Book $buku)
    public function edit($id)
    {
        $buku = Book::find($id);
        return view('buku.edit',compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Book $buku)
        public function update(Request $request,$id)
    {
        $buku = Book::find($id);

        $buku -> update([
            'judul' => $request->judul,
            'jenis' => $request->jenis,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan
        ]);
            // Book::where('id',$buku->id)
            // ->update([
            //     'judul' => $request->judul,
            //     'jenis' => $request->jenis,
            //     'jumlah' => $request->jumlah,
            //     'keterangan' => $request->keterangan,
                
            // ]);
            return redirect('/buku')->with('status','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('books')->where('id',$id)->delete();
        return redirect('/buku')->with('status','Data berhasil dihapus');
    }
}
