<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    protected $fillable = [
        'titre', 'sous_titre', 'image', 'publication', 'description', 'categorie_actualite_id'
    ];

    public function categorie_actualite(){
        return $this->belongsTo( CategorieActualite::class ,'categorie_actualite_id');
    }

}
