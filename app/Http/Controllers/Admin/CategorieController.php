<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Http\Requests\Admin\CategorieFormRequest;


class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.categorie',[
            'categories'=>Categorie::orderBy('created_at','desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.categorieFormulaire',[
            'categorie'=>new Categorie()
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(CategorieFormRequest $request)
    {
        $categorie= Categorie::create($request->validated());
        return to_route('admin.categorie.create')->with('success','Une Catègorie  à été bien ajouté');
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
    public function edit(Categorie $categorie)
    {
    return view('admin.categorieFormulaire',[
        'categorie'=>$categorie
    ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(CategorieFormRequest $request, Categorie $categorie)
    {
        //
        $data=$request->validated();
        $categorie->update($data);
        return to_route('admin.categorie.create')->with('success','Cette catègorie à été bien modifiée');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        //
        $categorie->delete();
        return to_route('admin.categorie.index')->with('success','Cette catègorie est supprimée avec succés');
    }
}
