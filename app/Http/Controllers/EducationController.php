<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Education::get();
        $title = "Data Education";
        return view('education.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Education";
        return view('education.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Education::create([
            'campus' => $request->campus,
            'bachelor' => $request->bachelor,
            'major' => $request->major,
            'address' => $request->address,
            'date_start' => $request->date_start,
            
        ]);
        return redirect()->to('admin/education')->with('massage', 'data berhasil ditambah');
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

        $edit = Education::find($id);
        $title = "edit data " . $edit->name;
        return view('education.edit', compact('edit', 'title'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Education::where('id', $id)->update([
            'campus' => $request->campus,
            'bachelor' => $request->bachelor,
            'major' => $request->major,
            'address' => $request->address,
            'date_start' => $request->date_start,
            
        ]);
        return redirect()->to('admin/education')->with('massage', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Education::where('id', $id)->delete();
        return redirect()->to('admin/education')->with('massage', 'data berhasil dihapus');
    }
}
