<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Template extends Model
{
    use HasFactory;


    protected $primaryKey = "id";


    protected $guarded = ["id"];


    protected $fillable = ["libelle","contenu"];


    public function tickets() : HasMany {
        return $this->hasMany(Ticket::class);
    }
}
