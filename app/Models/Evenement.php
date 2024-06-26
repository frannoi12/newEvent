<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Evenement extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $guarded = ["id"];

    protected $fillable = ["nom","pays","ville","adresse","gps","description","date","heur_debut","heur_fin"];

    public function entreprise(): BelongsTo{
        return $this->belongsTo(Entreprise::class);
    }

    public function tickets(): HasMany {
        return $this->hasMany(Ticket::class);
    }
}
