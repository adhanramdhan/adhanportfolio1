<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\models\Ctgproject;

class CtgprojectController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Ctgproject::get();
        $title = "Data Ctgproject";
        return view('ctgproject.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Ctgproject";
        $tampil = Ctgproject::get();
        return view('ctgproject.create', compact('title' , 'tampil'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {



        Ctgproject::create([

            'category' => $request->category,

        ]);
        return redirect()->to('admin/ctgproject')->with('massage', 'data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $edit = Ctgproject::find($id);
        $title = "edit data " . $edit->name;
        return view('ctgproject.edit', compact('edit', 'title'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Ctgproject::where('id', $id)->update([
            'category' => $request->category,


        ]);
        return redirect()->to('admin/ctgproject')->with('massage', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Ctgproject::where('id', $id)->delete();
        return redirect()->to('admin/ctgproject')->with('massage', 'data berhasil dihapus');
    }
}


// {
//     //
// }
