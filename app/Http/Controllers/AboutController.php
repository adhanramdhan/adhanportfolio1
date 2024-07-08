<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Hash;

class AboutController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = About::get();
        $title = "Data About";
        return view('about.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah About";
        return view('about.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'decription' => 'nullable',
            'decription2' => 'nullable',
        ]);

        About::create([
    
            'decription' => $request->decription,
            'decription2' => $request->decription2,
           
            
        ]);
        return redirect()->to('admin/about')->with('massage', 'data berhasil ditambah');
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

        $edit = About::find($id);
        $title = "edit data " . $edit->name;
        return view('about.edit', compact('edit', 'title'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        About::where('id', $id)->update([
            'decription' => $request->decription,
            'decription2' => $request->decription2,
          
            
        ]);
        return redirect()->to('admin/about')->with('massage', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        About::where('id', $id)->delete();
        return redirect()->to('admin/about')->with('massage', 'data berhasil dihapus');
    }
}

// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         //
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(string $id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(string $id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, string $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(string $id)
//     {
//         //
//     }
// }
