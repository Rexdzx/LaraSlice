<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolio = Portfolio::latest()->when(request()->q, function ($query) {
            $query->where('nama', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.portfolio.index', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $portfolio = Portfolio::all();

        return view('admin.portfolio.create', compact('portfolio'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama'          => 'required|string',
            'foto'          => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'portfolio'     => 'required|image|mimes:png,jpg,jpeg',
            'judul'         => 'required',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        $foto               = $request->file('foto');
        $portfolio          = $request->file('portfolio');


        $fotoName           = Str::random(8) . '-' . $foto->getClientOriginalName();
        $portfolioName      = Str::random(8) . '-' . $portfolio->getClientOriginalName();

        Image::make($foto)->resize(350, 350, function ($constraint) {
            $constraint->aspectRatio();
        })->save('img/upload/pas_foto/' . $fotoName);

        Image::make($portfolio)->resize(1080, 1080, function ($constraint) {
            $constraint->aspectRatio();
        })->save('img/upload/portfolio/' . $portfolioName);

        $saveFoto           = $fotoName;
        $savePortfolio      = $portfolioName;

        Portfolio::create([
            'nama'          => $request->nama,
            'foto'          => $saveFoto,
            'portfolio'     => $savePortfolio,
            'judul'         => $request->judul,
        ]);

        return redirect()->route('admin.portfolio.index')->with('success', 'Data Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $portfolio = Portfolio::find($id);

        return view('admin.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'foto'          => 'image|mimes:png,jpg,jpeg|max:2048',
            'portfolio'     => 'image|mimes:png,jpg,jpeg',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        $model = Portfolio::findOrFail($id);

        if ($request->file('foto') == null) {
            $foto           = $model->foto;
            $model->update([
                'foto'      => $foto,
            ]);
        } else {
            $foto           = $request->file('foto');
            $fotoName       = Str::random(8) . '-' . $foto->getClientOriginalName();
            Image::make($foto)->resize(120, false, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/upload/pas_foto/' . $fotoName);

            $oldFoto = $model->foto;

            $model->update([
                'foto'      => $fotoName,
            ]);

            if ($model) {
                File::delete(public_path('img/upload/pas_foto/' . $oldFoto));
            }
        }

        if ($request->file('portfolio') == null) {
            $portfolio      = $model->portfolio;

            $model->update([
                'portfolio' => $portfolio,
            ]);
        } else {
            $portfolio      = $request->file('portfolio');
            $portfolioName  = Str::random(8) . '-' . $portfolio->getClientOriginalName();
            Image::make($portfolio)->resize(1080, 1080, function ($constraint) {
                $constraint->aspectRatio();
            })->save('img/upload/portfolio/' . $portfolioName);

            $oldPortfolio = $model->portfolio;

            $model->update([
                'portfolio' => $portfolioName,
            ]);

            if ($model) {
                File::delete(public_path('img/upload/portfolio/' . $oldPortfolio));
            }
        }

        $model->update([
            'nama'          => $request->nama,
            'judul'         => $request->judul,
        ]);

        return redirect()->route('admin.portfolio.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();

        sleep(1);
        return back();
    }
}
