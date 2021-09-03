<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $table="produit";
    protected $fillable=['nom','category_id','description','prix','quantite','image'];
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
}
