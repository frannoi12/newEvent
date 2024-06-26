<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
    use HasFactory;

    protected $primaryKey = "id";


    protected $guarded = ["id"];


    protected $fillable = ["libelle","prix","nombre_place","type"];

    public function evenement() : BelongsTo {
        return $this->belongsTo(Evenement::class);
    }


    public function template() : BelongsTo {
        return $this->belongsTo(Template::class);
    }

    public function ligneCommandes() : HasMany {
        return $this->hasMany(LigneCommande::class);
    }
}
