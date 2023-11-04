<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all();

        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $about = About::find($id);

        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'gambar1'           => 'image|mimes:png,jpg,jpeg|max:2048',
            'gambar2'           => 'image|mimes:png,jpg,jpeg|max:2048',
            'gambar3'           => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        $model = About::findOrFail($id);

        // Gambar 1
        if ($request->file('gambar1') == null) {
            $gambar1            = $model->gambar1;
            $model->update([
                'gambar1'          => $gambar1,
            ]);
        } else {
            $gambar1            = $request->file('gambar1');
            $gambar1Name           = Str::random(8) . '-' . $gambar1->getClientOriginalName();
            Image::make($gambar1)->resize(4320, 4060, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/upload/about/' . $gambar1Name);

            $oldGambar1 = $model->gambar1;

            $model->update([
                'gambar1'      => $gambar1Name,
            ]);

            if ($model) {
                File::delete(public_path('img/upload/about/' . $oldGambar1));
            }
        }

        // Gambar 2
        if ($request->file('gambar2') == null) {
            $gambar2            = $model->gambar2;
            $model->update([
                'gambar2'          => $gambar2,
            ]);
        } else {
            $gambar2            = $request->file('gambar2');
            $gambar2Name           = Str::random(8) . '-' . $gambar2->getClientOriginalName();
            Image::make($gambar2)->resize(1080, 1080, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/upload/about/' . $gambar2Name);

            $oldGambar2 = $model->gambar2;

            $model->update([
                'gambar2'      => $gambar2Name,
            ]);

            if ($model) {
                File::delete(public_path('img/upload/about/' . $oldGambar2));
            }
        }

        // Gambar 3
        if ($request->file('gambar3') == null) {
            $gambar3            = $model->gambar3;
            $model->update([
                'gambar3'          => $gambar3,
            ]);
        } else {
            $gambar3            = $request->file('gambar3');
            $gambar3Name           = Str::random(8) . '-' . $gambar3->getClientOriginalName();
            Image::make($gambar3)->resize(1080, 1080, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/upload/about/' . $gambar3Name);

            $oldGambar3 = $model->gambar3;

            $model->update([
                'gambar3'      => $gambar3Name,
            ]);

            if ($model) {
                File::delete(public_path('img/upload/about/' . $oldGambar3));
            }
        }

        $model->update([
            'deskripsi'          => $request->deskripsi,
        ]);

        return redirect()->route('admin.about.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
