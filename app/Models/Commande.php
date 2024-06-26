<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Commande extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $guarded = ["id"];

    protected $fillable = ["date"];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function ligneCommandes() : HasMany {
        return $this->hasMany(LigneCommande::class);
    }
}
