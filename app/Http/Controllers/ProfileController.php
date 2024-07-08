<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Profile::get();
        $title = "Data Profile";
        return view('profile.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Profile";
        return view('profile.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Profile::create([
            'name' => $request->name,
            'profesi' => $request->profesi,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'tanggal_lahir' => $request->tanggal_lahir,
            'instagram_link' => $request->instagram_link,
            'linkedin_link' => $request->linkedin_link,
            'youtube_link' => $request->youtube_link,
            'facebook_link' => $request->facebook_link,
            'wa_link' => $request->wa_link,
            'email_link' => $request->email_link,
        ]);
        return redirect()->to('admin/profile')->with('massage', 'data berhasil ditambah');
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

        $edit = Profile::find($id);
        $title = "edit data " . $edit->name;
        return view('profile.edit', compact('edit', 'title'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Profile::where('id', $id)->update([
            'name' => $request->name,
            'profesi' => $request->profesi,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'tanggal_lahir' => $request->tanggal_lahir,
            'instagram_link' => $request->instagram_link,
            'linkedin_link' => $request->linkedin_link,
            'youtube_link' => $request->youtube_link,
            'facebook_link' => $request->facebook_link,
            'wa_link' => $request->wa_link,
            'email_link' => $request->email_link,
        ]);
        return redirect()->to('admin/profile')->with('massage', 'profile berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Profile::where('id', $id)->delete();
        return redirect()->to('admin/profile')->with('massage', 'data berhasil dihapus');
    }
}
