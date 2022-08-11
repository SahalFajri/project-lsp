<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use App\Models\Category;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.aspirasis.index', [
            'aspirasis' => Aspirasi::filter(request('search'))->paginate(5)->withQueryString()
        ]);
    }

    public function indexUser()
    {
        return view('aspirasis', [
            'aspirasis' => Aspirasi::latest()->filter(request('search'))->paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|numeric|digits:16',
            'category_id' => 'required',
            'lokasi' => 'required',
            'ket' => 'required'
        ]);

        $aspirasi = Aspirasi::create($validatedData);

        $insertedId = $aspirasi->id;

        return redirect('/home')->with('success', "Aspirasi berhasil dikirim, <strong>id laporan : $insertedId</strong>");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function show(Aspirasi $aspirasi)
    {
        return view('show', [
            'aspirasi' => $aspirasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Aspirasi $aspirasi)
    {
        return view('dashboard.aspirasis.showEdit', [
            'aspirasi' => $aspirasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aspirasi $aspirasi)
    {
        $validatedData = $request->validate([
            'status' => 'required',
            'feedback' => 'nullable'
        ]);

        Aspirasi::where('id', $aspirasi->id)
            ->update($validatedData);

        return redirect('/dashboard')->with('success', 'Feedback/Status berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aspirasi $aspirasi)
    {
        //
    }
}
