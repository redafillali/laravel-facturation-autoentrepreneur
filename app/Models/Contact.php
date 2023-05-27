<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model {
    use HasFactory;

    protected $fillable = [
        'Nom',
        'Prenom',
        'Adresse',
        'Telephone',
        'Email',
        'compte_id',
        'etat',
    ];

    public function compte() {
        return $this->belongsTo( Compte::class );
    }

    public function factures() {
        return $this->hasMany( Facture::class );
    }

    public function devis() {
        return $this->hasMany( Devis::class );
    }

    public function bons() {
        return $this->hasMany( Bon::class );
    }

    // softdelete
    protected $softDelete = true;

}
