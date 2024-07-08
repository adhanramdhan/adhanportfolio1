<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Whatido;
use Illuminate\Support\Facades\Hash;

class WhatidoController extends Controller


{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Whatido::get();
        $title = "Data Whatido";
        return view('whatido.index', compact('datas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Whatido";
        return view('whatido.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{

    $request->validate([
        'description' => 'required|string',
        'caption' => 'required|string',
        'icon' => 'required|image',
    ]);

    // Handle image upload
    if ($request->hasFile('icon')) {
        $image = $request->file('icon');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('upload'), $imageName);

        // Save the record
        Whatido::create([
            'icon' => $imageName,
            'description' => $request->description,
            'caption' => $request->caption,
        ]);
    }

    return redirect()->to('admin/whatido')->with('message', 'Data berhasil ditambah');
}

    // public function store(Request $request)
    // {
    //     Whatido::create([
    //         'description' => $request->description,
    //         'caption' => $request->caption,
    //         'icon' => $request->icon,

            
    //     ]);
        
    //         // Handle image upload
    //         if ($request->hasFile('icon')) {
    //             $image = $request->file('icon');
    //             $imageName = time() . '_' . $image->getClientOriginalName();
    //             $image->move(public_path('upload'), $imageName);
    
    //             // Save the image record
    //             $whaido = Whatido::create([
    //                 'icon' => $imageName,
    //             ]);
    
    //             // Save the portfolio record with the image ID
             
    //         }
    
            
        
        
    //     return redirect()->to('admin/whatido')->with('massage', 'data berhasil ditambah');
    // }

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

        $edit = Whatido::find($id);
        $title = "edit data " . $edit->name;
        return view('whatido.edit', compact('edit', 'title'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Whatido::where('id', $id)->update([
          'description' => $request->description,
        'caption' => $request->caption,
            
        ]);
        return redirect()->to('admin/whatido')->with('massage', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Whatido::where('id', $id)->delete();
        return redirect()->to('admin/whatido')->with('massage', 'data berhasil dihapus');
    }
}
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         $datas = Whatido::get();
//         // $categories = Ctgproject::with('category')->get();
//         $title = "Data Portfolio";
//         return view('portfolio.index', compact('datas', 'title'));
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         $title = "Tambah Portfolio";
//         $categories = Ctgproject::get();
//         $images = Imgproject::all();
//         return view('portfolio.create', compact('title' , 'categories' , 'images'));
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         $request->validate([
//             'title' => 'required',
//             'caption' => 'required',
//             'id_category' => 'required',
//             'images' => 'required',
//         ]);

//         // Handle image upload
//         if ($request->hasFile('images')) {
//             $image = $request->file('images');
//             $imageName = time() . '_' . $image->getClientOriginalName();
//             $image->move(public_path('upload'), $imageName);

//             // Save the image record
//             $imgproject = Imgproject::create([
//                 'images' => $imageName,
//             ]);

//             // Save the portfolio record with the image ID
//             Portfolio::create([
//                 'title' => $request->title,
//                 'caption' => $request->caption,
//                 'id_category' => $request->id_category,
//                 'id_images' => $imgproject->id,
//             ]);
//         }

//         return redirect()->to('admin/portfolio')->with('message', 'Data berhasil ditambah');
//     }
//     // public function store(Request $request)
//     // {

//     //     $pp = $request->file('images');
//     //     $ppCustom = time() . "_" . $pp->getClientOriginalName();
//     //     $path = 'upload';
//     //     $pp->move($path, $ppCustom);

//     //     Portfolio::create([
//     //         'title' => $request->title,
//     //         'caption' => $request->caption,
//     //         'id_category' => $request->id_category,
//     //         'id_images' => $request->id_images,
//     //     ]);


//     //     Imgproject::create([
//     //         'images' => $ppCustom,
//     //     ]);


//     //     return redirect()->to('admin/portfolio')->with('message', 'Data berhasil ditambah');
//     // }

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
//     public function edit($id)
//     {
//         $portfolio = Portfolio::findOrFail($id);
//         $categories = Ctgproject::all();
//         $images = Imgproject::all();

//         $title = "Edit Portfolio";
//         return view('portfolio.edit', compact('portfolio', 'categories', 'images', 'title'));
//     }
//     // public function edit(string $id)
//     // {
//     //     // Implement edit logic
//     // }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, $id)
//     {
//         $portfolio = Portfolio::findOrFail($id);

//         // Validate the request
//         $request->validate([
//             'title' => 'required|string',
//             'caption' => 'required|string',
//             'id_category' => 'required|integer|exists:ctgprojects,id',
//             'images' => 'nullable|image'
//         ]);

//         // Check if an image is uploaded
//         if ($request->hasFile('images')) {
//             $image = $request->file('images');
//             $imageName = time() . '_' . $image->getClientOriginalName();
//             $image->move(public_path('upload'), $imageName);

//             // Save new image in the Imgproject model
//             $imgProject = Imgproject::create([
//                 'images' => $imageName,
//             ]);

//             // Update the portfolio with new image id
//             $portfolio->update([
//                 'title' => $request->title,
//                 'caption' => $request->caption,
//                 'id_category' => $request->id_category,
//                 'id_images' => $imgProject->id,
//             ]);
//         } else {
//             // Update the portfolio without changing the image
//             $portfolio->update([
//                 'title' => $request->title,
//                 'caption' => $request->caption,
//                 'id_category' => $request->id_category,
//             ]);
//         }

//         return redirect()->route('admin.portfolio.index')->with('message', 'Portfolio updated successfully.');
//     }
//     // public function update(Request $request, string $id)
//     // {
//     //     Portfolio::where('id', $id)->update([
//     //         'title' => $request->title,
//     //         'caption' => $request->caption,
//     //         'id_category' => $request->id_category,
//     //         'id_images' => $request->id_images,
//     //     ]);

//     //     return redirect()->to('admin/portfolio')->with('message', 'Data berhasil diupdate');
//     // }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(string $id)
//     {
//        Portfolio::where('id', $id)->delete();
//        Imgproject::where('id', $id)->delete();
//        return redirect()->to('admin/portfolio')->with('massage', 'data berhasil dihapus');
//     }
// }
