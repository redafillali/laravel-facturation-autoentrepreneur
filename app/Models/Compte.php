<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model {
    use HasFactory;

    protected $fillable = [
        'Nom de la société',
        'Adresse',
        'Telephone',
        'Email',
        'Sitesweb',
        'Logo',
        'ICE',
        'etat',
    ];

    public function factures() {
        return $this->hasMany( Facture::class );
    }

    public function devis() {
        return $this->hasMany( Devis::class );
    }

    public function bons() {
        return $this->hasMany( Bon::class );
    }

    // timestamps
    public $timestamps = true;

    // soft delete
    protected $softDelete = true;

}
