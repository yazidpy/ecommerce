<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;

class Produit extends Model
{
    use HasFactory;
     protected $fillable=[
            'nom_produit',
            'description',
            'categorie_id',
            'marque',
            'prix',
            'stock',
            'image'
     ];
     public function categorie(){
        return $this->belongsTo(Categorie::class,'categorie_id');
     }
}


