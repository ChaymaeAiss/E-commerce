<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = ['date','heure','regle','mode_reglement_id','etat_id','user_id'];

    public function mode_reglement() : BelongsTo 
    {
        return $this->belongsTo(ModeReglement::class);
    }
    public function etat() : BelongsTo 
    {
        return $this->belongsTo(Etat::class);
    }
    public function user() : BelongsTo 
    {
        return $this->belongsTo(User::class);
    }
    public function details()
    {
        return $this->hasMany(DetailCommande::class);
    }
}
