<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = ['codebarre','designation','prix_ht','tva','description','image','sous_famille_id','marque_id','unite_id'];

    public function sous_familles() : BelongsTo 
    {
        return $this->belongsTo(SousFamille::class);
    }
    public function marques() : BelongsTo 
    {
        return $this->belongsTo(Marque::class);
    }
    public function unites() : BelongsTo 
    {
        return $this->belongsTo(Unite::class);
    }
}