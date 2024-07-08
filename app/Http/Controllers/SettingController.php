<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Setting::get();
        $title = "Data Setting";
        return view('setting.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $title = "Tambah Experience";
        // return view('experience.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $pp = $request->file('profile_picture');
        $ppCustom = time() . "_" . $pp->getClientOriginalName();
        $path = 'upload';
        $pp->move($path, $ppCustom);
        Setting::create([
            'profile_picture' => $ppCustom,
        ]);
        return back();
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

        // $edit = Experience::find($id);
        // $title = "edit data " . $edit->name;
        // return view('experience.edit', compact('edit', 'title'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // Experience::where('id', $id)->update([
        //     'job' => $request->job,
        //     'company' => $request->company,
        //     'description' => $request->description,
        //     'date_start' => $request->date_start,
        //     'date_finish' => $request->date_finish,
        // ]);
        // return redirect()->to('admin/experience')->with('massage', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Experience::where('id', $id)->delete();
        // return redirect()->to('admin/experience')->with('massage', 'data berhasil dihapus');
    }
}