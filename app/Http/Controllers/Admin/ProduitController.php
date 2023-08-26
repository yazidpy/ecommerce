<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\Admin\Produit_form_request;

// required: Le champ doit être présent et ne peut pas être vide.
// email: Le champ doit être une adresse e-mail valide.
// numeric: Le champ doit être un nombre.
// integer: Le champ doit être un nombre entier.
// string: Le champ doit être une chaîne de caractères.
// max:value: Le champ ne peut pas dépasser la valeur spécifiée (utile pour les chaînes, nombres, etc.).
// min:value: Le champ doit être supérieur ou égal à la valeur spécifiée (utile pour les nombres, dates, etc.).
// confirmed: Le champ doit être confirmé par un champ supplémentaire avec le même nom suivi de _confirmation (par exemple, password_confirmation pour le champ password).
// unique:table,column,except,idColumn: Le champ doit être unique dans la table spécifiée, sauf s'il correspond à l'ID spécifié dans la colonne spécifiée.
// in:value1,value2,value3: Le champ doit être égal à l'une des valeurs spécifiées.
// date: Le champ doit être une date valide.
// regex:pattern: Le champ doit correspondre au motif de l'expression régulière spécifiée.

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(){
        return view('admin.produit',[
            'produits'=>Produit::orderBy('created_at','desc')->paginate(10)
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produit_formulaire',[
            'produit'=>new Produit(),
            'categories'=>Categorie::pluck('nom_categorie','id')
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Produit_form_request $request)
    {
        /**pour l'afficher il faut d'abord cette commande php artisan storage:link */
        $data=$request->validated();
        /** @var UploadedFile $image */
        $image =$request->validated('image');
        if($image != null && !$image->getError()){
        $data['image']=$image->store('produits','public');
        $produit= Produit::create($data);
        return to_route('admin.produit.create')->with('success','Un produit à été bien ajouté');
        }
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
    public function edit(Produit $produit)
    {
        return view('admin.produit_formulaire',[
        'produit'=>$produit,
        'categories'=>Categorie::pluck('nom_categorie','id')
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Produit_form_request $request, Produit $produit)
    {
        $data=$request->validated();
        /** @var UploadedFile $image */
        $image =$request->validated('image');
        if($image != null && !$image->getError()){
        $data['image']=$image->store('produits','public');
        $produit->update($data);
        return to_route('admin.produit.create')->with('success','Ce produit à été bien modifié');
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return to_route('admin.produit.index')->with('success','Ce produit est supprimé avec succés');

    }
}
