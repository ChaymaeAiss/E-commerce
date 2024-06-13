<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailCommande extends Model
{
    use HasFactory;
    protected $fillable = ['commande_id','produit_id','quantite','prix_ht','tva'];

    public function commande() : BelongsTo 
    {
        return $this->belongsTo(Commande::class);
    }
    public function produit() : BelongsTo
    {
        return $this->belongsTo(Produit::class);
    }

}
