<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Entreprise extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $guarded = ["id"];

    protected $fillable = ["nom","adresse","quartier","pays","ville","user_id"];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function evenements(): HasMany{
        return $this->hasMany(Evenement::class);
    }
}
