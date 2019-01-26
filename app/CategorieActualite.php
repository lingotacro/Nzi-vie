<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategorieActualite extends Model
{
    protected $fillable = ['titre'];

    public function actualite(){
        return $this->hasMany(Actualite::class);
    }
}
